<?php

class ChatAjax {
	const INTERNAL_POLLING_DELAY_MICROSECONDS = 500000;
	const CHAT_AVATAR_DIMENSION = 28;


	static protected function getUserIPMemcKey($userId, $address, $date) {
		return $userId . '_' .  $address . '_' . $date . '_v1';
	}

	/**
	 * This is the ajax-endpoint that the node server will connect to in order to get the currently logged-in user's info.
	 * The node server will pass the same cookies that the client has set, and this will allow this ajax request to be
	 * part of the same sesssion that the user already has going.  By doing this, the user's existing wikia login session
	 * can be used, so they don't need to re-login for us to know that they are legitimately authorized to use the chat or not.
	 *
	 * The returned info is just a custom subset of what the node server needs and does not contain an exhaustive list of rights.
	 *
	 * The 'isLoggedIn' field and 'canChat' field of the result should be checked by the calling code before allowing
	 * the user to chat.  This is the last line of security against any users attemptin to circumvent our protections.  Otherwise,
	 * a banned user could copy the entire client code (HTML/JS/etc.) from an unblocked user, then run that code while logged in as
	 * under a banned account, and they would still be given access.
	 *
	 * The returned 'isChatMod' field is boolean based on whether the user is a chat moderator on the current wiki.
	 *
	 * If the user is not allowed to chat, an error message is returned (which can be shown to the user).
	 */
	static public function getUserInfo(){
		global $wgMemc, $wgServer, $wgArticlePath, $wgRequest, $wgCityId, $wgContLang, $wgIP;
		wfProfileIn( __METHOD__ );

		$data = $wgMemc->get( $wgRequest->getVal('key'), false );
		if( empty($data) ) {
			return array( 'errorMsg' => wfMsg('chat-room-is-not-on-this-wiki'));
		}

		$user = User::newFromId( $data['user_id'] );
		if( empty($user) || !$user->isLoggedIn() || $user->getName() != $wgRequest->getVal('name', '') ) {
			wfProfileOut( __METHOD__ );
			return array( 'errorMsg' => wfMsg('chat-room-is-not-on-this-wiki'));
		}

		$isCanGiveChatMode = false;
		$userChangeableGroups = $user->changeableGroups();
		if (in_array('chatmoderator', $userChangeableGroups['add'])) {
			$isCanGiveChatMode = true;
		}

		// First, check if they can chat on this wiki.
		$retVal = array(
			'canChat' => Chat::canChat($user),
			'isLoggedIn' => $user->isLoggedIn(),
			'isChatMod' => $user->isAllowed( 'chatmoderator' ),
			'isCanGiveChatMode' => $isCanGiveChatMode,
			'isStaff' => $user->isAllowed( 'chatstaff' ),
			'username' => $user->getName(),
			'avatarSrc' => AvatarService::getAvatarUrl($user->getName(), self::CHAT_AVATAR_DIMENSION),
			'editCount' => "",
			'since' => '',

			// Extra wg variables that we need.
			'activeBasket' => ChatHelper::getServerBasket(),
			'wgCityId' => $wgCityId,
			'wgServer' => $wgServer,
			'wgArticlePath' => $wgArticlePath
		);

		// Figure out the error message to return (i18n is done on this side).
		if($retVal['isLoggedIn'] === false){
			$retVal['errorMsg'] = wfMsg('chat-no-login');
		} else if($retVal['canChat'] === false){
			$retVal['errorMsg'] = wfMsg('chat-you-are-banned-text');
		}

		// If the user is approved to chat, make sure the roomId provided is for this wiki.
		// Users may be banned on the wiki of the room, but not on this wiki for example, so this prevents cross-wiki chat hacks.
		if($retVal['canChat']){
			$roomId = $wgRequest->getVal('roomId');
			$cityIdOfRoom = NodeApiClient::getCityIdForRoom($roomId);
			if($wgCityId !== $cityIdOfRoom){
				$retVal['canChat'] = false; // don't let the user chat in the room they requested.
				$retVal['errorMsg'] = wfMsg('chat-room-is-not-on-this-wiki');
			}
		}

		// If the user can chat, dig up some other stats which are a little more expensive to compute.
		if($retVal['canChat']){
			$userStatsService = new UserStatsService($user->getId());
			$stats = $userStatsService->getStats();

			// NOTE: This is attached to the user so it will be in the wiki's content language instead of wgLang (which it normally will).
			$stats['edits'] = $wgContLang->formatNum($stats['edits']);
			if(empty($stats['date'])){
				// If the user has not edited on this wiki, don't show anything
				$retVal['since'] = "";
			} else {
				// this results goes to chat server, which obiously has no user lang
				// so we just return a short month name key - it has to be translated on client side
				$date = getdate( wfTimestamp( TS_UNIX, $stats['date'] ) );
				$retVal['since'] =  $date;
			}

			$retVal['editCount'] = $stats['edits'];
		}

		if ($retVal['isLoggedIn'] && $retVal['canChat']) {
			// record the IP of the connecting user.
			// use memcache so we order only one (user, ip) pair each day
			$ip = $wgRequest->getVal('address');
			$memcKey = self::getUserIPMemcKey($data['user_id'], $ip, date("Y-m-d"));
			$entry = $wgMemc->get( $memcKey, false );

			if ( empty($entry) ) {
				$wgMemc->set($memcKey, true, 86400 /*24h*/);
				$log = WF::build( 'LogPage', array( 'chatconnect', false, false ) );
				$log->addEntry( 'chatconnect', SpecialPage::getTitleFor('Chat'), '', array($ip), $user);

				$dbw = wfGetDB( DB_MASTER );
				$cuc_id = $dbw->nextSequenceValue( 'cu_changes_cu_id_seq' );
				$rcRow = array(
						'cuc_id'         => $cuc_id,
						'cuc_namespace'  => NS_SPECIAL,
						'cuc_title'      => 'Chat',
						'cuc_minor'      => 0,
						'cuc_user'       => $user->getID(),
						'cuc_user_text'  => $user->getName(),
						'cuc_actiontext' => wfMsgForContent( 'chat-checkuser-join-action' ),
						'cuc_comment'    => '',
						'cuc_this_oldid' => 0,
						'cuc_last_oldid' => 0,
						'cuc_type'       => CUC_TYPE_CHAT,
						'cuc_timestamp'  => $dbw->timestamp(),
						'cuc_ip'         => IP::sanitizeIP( $ip ),
						'cuc_ip_hex'     => $ip ? IP::toHex( $ip ) : null,
						'cuc_xff'        => '',
						'cuc_xff_hex'    => null,
						'cuc_agent'      => null
				);
				$dbw->insert( 'cu_changes', $rcRow, __METHOD__ );
				$dbw->commit();
			}
		}

		wfProfileOut( __METHOD__ );
		return $retVal;
	} // end getUserInfo()

	/**
	 *  injecting data from chat to memcache
	 */

	static public function setUsersList() {
		global $wgRequest;
		wfProfileIn( __METHOD__ );

		if(ChatHelper::getChatCommunicationToken() != $wgRequest->getVal('token')) {
			wfProfileOut( __METHOD__ );
			return array('status' => false);
		}

		NodeApiClient::setChatters($wgRequest->getArray('users'));

		wfProfileOut( __METHOD__ );
		return array('status' => $wgRequest->getArray('users') );
	}

	/**
	 * Ajax endpoint for createing / accessing  private rooms
	 */

	static public function getPrivateRoomID() {
		global $wgRequest;
		wfProfileIn( __METHOD__ );

		// TODO: change this
		$roomName = 'private room name';
		$roomTopic = 'private room topic';

		$users = explode( ',', $wgRequest->getVal('users'));
		$roomId = NodeApiClient::getDefaultRoomId($roomName, $roomTopic, 'private', $users );

		wfProfileOut( __METHOD__ );
		return array("id" => $roomId);
	}

	/**
 	 * Ajax endpoint for blocking privata chat with user.
	 */

	static public function blockOrBanChat(){
		global $wgRequest, $wgUser, $wgMemc;
		wfProfileIn( __METHOD__ );

		$kickingUser = $wgUser;

		$retVal = array();
		$userToBan = $wgRequest->getVal('userToBan');
		$userToBanId = $wgRequest->getVal('userToBanId', 0);

		if(!empty($userToBanId)) {
			$userToBan = User::newFromId($userToBanId);
			if(!empty($userToBanId)) {
				$userToBan = $userToBan->getName();
			}
		}

		$mode = $wgRequest->getVal('mode', 'private');

		if(empty($userToBan)){
			$retVal["error"] = wfMsg('chat-missing-required-parameter', 'usertoBan');
		} else {
			$dir = $wgRequest->getVal('dir', 'add');
			if($mode == 'private') {
				$result = Chat::blockPrivate($userToBan, $dir, $kickingUser);
			} else if($mode == 'global') {
				$time = (int)  $wgRequest->getVal('time', 0);
				$result = Chat::banUser($userToBan, $kickingUser, $time, $wgRequest->getVal('reason') );
			}
			if($result === true){
				$retVal["success"] = true;
			} else {
				$retVal["error"] = $result;
			}
		}

		wfProfileOut( __METHOD__ );
		return $retVal;
	} // end kickBan()


	static public function getListOfBlockedPrivate() {
		return Chat::getListOfBlockedPrivate();
	}

	/**
	 * Ajax endpoint to set a user as a chat moderator (ie: add them to the 'chatmoderator' group).
	 *
	 * Returns an associative array.  On success, returns "success" => true, on failure,
	 * returns "error" => [error message].
	 */
	static public function giveChatMod() {
		global $wgRequest, $wgUser, $wgMemc;
		wfProfileIn( __METHOD__ );

		$promottingUser = $wgUser;

		$retVal = array();
		$PARAM_NAME = "userToPromote";
		$userToPromote = $wgRequest->getVal( $PARAM_NAME );
		if(empty($userToPromote)){
			$retVal["error"] = wfMsg('chat-missing-required-parameter', $PARAM_NAME);
		} else {
			$result = Chat::promoteChatModerator($userToPromote, $promottingUser);
			if($result === true){
				$retVal["success"] = true;
			} else {
				$retVal["error"] = $result;
			}
		}

		wfProfileOut( __METHOD__ );
		return $retVal;
	} // end addChatMod()


	function BanModal( ) {
		global $wgRequest, $wgCityId, $wgLang;
		wfProfileIn( __METHOD__ );
		$tmpl = new EasyTemplate(dirname(__FILE__).'/templates/');

		$userId = $wgRequest->getVal('userId', 0);

		$isChangeBan = false;
		$isoTime = "";
		$fmtTime = "";

		if(!empty($userId) && $user = User::newFromID($userId)) {
			 $ban = Chat::getBanInformation($wgCityId, $user);
			 if($ban !== false)  {
			 	$isChangeBan = true;
			 	$isoTime = wfTimestamp( TS_ISO_8601, $ban->end_date );
				$fmtTime = $wgLang->timeanddate( wfTimestamp( TS_MW, $ban->end_date ), true );
			 }
		}

		$tmpl->set_vars(array(
				'options' => Chat::GetBanOptions(),
				'isChangeBan' => $isChangeBan,
				'isoTime' => $isoTime,
				'fmtTime' => $fmtTime
			)
		);
		$retVal = array();
		$retVal['template'] = $tmpl->render("banModal");
		$retVal['isChangeBan'] = $isChangeBan;
		wfProfileOut( __METHOD__ );
		return $retVal;
	}


} // end class ChatAjax
