<?php
/**
 * A class which represents a user wall. A Wall is a replacement for the main part of the User_talk page.
 * A Wall consists of "Bricks" which are each a single topic/thread/conversation.
 * In typical use, a Wall will only load a subset of Bricks because there will be a TON of bricks as time goes on.
 */

class WallBaseController extends ArticleCommentsController {
	const WALL_MESSAGE_RELATIVE_TIMESTAMP = 604800; // relative message timestampt for 7 days (improvement 20178)
	protected $helper;
	public function __construct() {
		$this->app = F::App();
		$this->helper = F::build('WallHelper', array());
	}
	
	protected function index() {
		$title = $this->request->getVal('title', $this->app->wg->Title);
		$page = $this->request->getVal('page', 1);
		
		$wallMessagesPerPage = 20;
		if( !empty($this->app->wg->WallMessagesPerPage) ){
			$wallMessagesPerPage = $this->app->wg->WallMessagesPerPage;
		};
		
		$filterid = $this->request->getVal('filterid', null);
		if( !empty($filterid) ) {
			$this->getThread($filterid);
		} else {
			$this->getThreads($title, $page, $wallMessagesPerPage);
		}
		
		if( !empty($filterid) ) {
			$this->response->setVal('showNewMessage', false);
			$this->response->setVal('type', 'Thread');
			$this->response->setVal('condenseMessage', false);
			$this->response->setVal('showDeleteOrRemoveInfo', true);
			
			if( count($this->threads) > 0 ) {
				$wn = F::build('WallNotifications', array());
				foreach($this->threads as $key => $val ){
					$all = $wn->markRead( $this->wg->User->getId(), $this->wg->CityId, $key );
					break;
				}
			}
			
			$this->response->setVal('renderUserTalkArchiveAnchor', false);
			$this->response->setVal('greeting', '');
			
			$title = F::build('Title', array($filterid), 'newFromId' );
			if(!empty($title) && $title->exists() && $title->getNamespace() == NS_USER_WALL_MESSAGE ) {
				$wallMessage = F::build('WallMessage', array($title), 'newFromTitle' );
				$wallMessage->load();
				$this->app->wg->Out->setPageTitle( $wallMessage->getMetaTitle() );
			}
			
		} else {
			$this->response->setVal('type', 'Board');
			$this->response->setVal('showDeleteOrRemoveInfo', false);
			$this->response->setVal('showNewMessage', true);
			$this->response->setVal('condenseMessage', true);
			
			$this->response->setVal('renderUserTalkArchiveAnchor', $this->request->getVal('dontRenderUserTalkArchiveAnchor', false) != true);
			
			$greeting = F::build('Title', array($title->getText(), NS_USER_WALL_MESSAGE_GREETING), 'newFromText' );
			
			if(!empty($greeting) && $greeting->exists() ) {
				$article = F::build( 'Article', array($greeting));
				$article->getParserOptions();
				$article->mParserOptions->setIsPreview(true); //create parser option
				$article->mParserOptions->setEditSection(false);
				$this->response->setVal('greeting', $article->getParserOutput()->getText());
			} else {
				$this->response->setVal('greeting', '');
			}
		}
		$this->response->setVal('sortingOptions', $this->getSortingOptions());
		$this->response->setVal('sortingSelected', $this->getSortingSelectedText());
		$this->response->setVal('title', $title);
		$this->response->setVal('totalItems', $this->countComments );
		$this->response->setVal('itemsPerPage', $wallMessagesPerPage);
		$this->response->setVal('showPager', ($this->countComments > $wallMessagesPerPage) );
		$this->response->setVal('currentPage', $page );

		if($this->wg->User->getId() > 0 && empty($filterid) ) {
			//THIS hack will be removed after runing script with will clear all notification copy
			$dbw = wfGetDB( DB_SLAVE, array() );
			$row = $dbw->selectRow( array( 'watchlist' ),
				array( 'count(wl_user) as cnt' ),
				array(
					'wl_title' => array( $title->getDbKey() ),
					'wl_namespace' => array(NS_USER_WALL, NS_USER_WALL_MESSAGE),
					'wl_wikia_addedtimestamp < "2012-01-31" '  
				), __METHOD__
			);
			
			if($row->cnt > 0) {
				$this->wg->User->removeWatch($this->wg->Title);
			}
		}
	}
	
	public function reply() {
		$this->response->setVal('username', $this->wg->User->getName() );
		$this->response->setVal('showReplyForm', $this->request->getVal('showReplyForm', true) );
		$this->checkAndSetAnonsEditing();
		$this->checkAndSetUserBlockedStatus( $this->helper->getUser() );
	}
	
	public function messageButtons() {
		$wallMessage = $this->getWallMessage();
		$this->response->setVal( 'canEdit', $wallMessage->canEdit($this->wg->User) );
		$this->response->setVal( 'canDelete', $wallMessage->canDelete($this->wg->User));
		$this->response->setVal( 'canAdminDelete', $wallMessage->canAdminDelete($this->wg->User)  && $wallMessage->isRemove()  );
		$this->response->setVal( 'canRemove', $wallMessage->canRemove($this->wg->User)  && !$wallMessage->isRemove());
		$this->response->setVal( 'showViewSource', $this->wg->User->getOption('wallshowsource', false) );
		$this->response->setVal( 'threadHistoryLink', $wallMessage->getMessagePageUrl(true).'?action=history' );
		$this->response->setVal( 'wgBlankImgUrl', $this->wg->BlankImgUrl );
		$this->response->setVal( 'isRemoved', $wallMessage->isRemove() );
		$this->response->setVal( 'isAnon', $this->wg->User->isAnon() );
		$this->response->setVal( 'notifyeveryone', $wallMessage->canNotifyeveryone() );
		$this->response->setVal( 'unnotifyeveryone', $wallMessage->canUnnotifyeveryone() );
	}
	
	public function message() {
		wfProfileIn( __METHOD__ );
		$wallMessage = $this->getWallMessage(); 
		
		if( !($wallMessage instanceof WallMessage) ) {
			$this->forward(__CLASS__, 'message_error');
			return true;
		}
		
		$this->response->setVal( 'comment', $wallMessage);
		$this->response->setVal( 'hide',  false);
		
		$this->response->setVal( 'showReplyForm', false);
		$this->response->setVal( 'showDeleteOrRemoveInfo', false);
		$this->response->setVal( 'removedOrDeletedMessage', false);
		$this->response->setVal( 'showRemovedBox', false);
		
		if($this->request->getVal( 'showDeleteOrRemoveInfo', false )) {
			if( $wallMessage->isRemove() || $wallMessage->isAdminDelete() ) {
				$info = $wallMessage->getLastActionReason();
				
				if(empty($info)) {
					$showDeleteOrRemoveInfo = false;
					$this->response->setVal( 'showDeleteOrRemoveInfo', false);
				} else {
					$info['fmttime'] = $this->wg->Lang->timeanddate( $info['mwtime'] );
	
					$this->response->setVal( 'deleteOrRemoveInfo', $info );
					$this->response->setVal( 'showDeleteOrRemoveInfo', true);
				}
			}
			
			$this->response->setVal( 'showDeleteOrRemoveInfo', true);
			
			if($wallMessage->isRemove() && !$wallMessage->isMain()) {
				$this->response->setVal( 'removedOrDeletedMessage', true);	
				$this->response->setVal( 'showRemovedBox', true);
			}
		}
		
		if( !$this->getVal('isreply', false) ) {
			$this->response->setVal('feedtitle', htmlspecialchars($wallMessage->getMetaTitle()) );
			$this->response->setVal('body', $wallMessage->getText() );
			$this->response->setVal('isreply', false ); 
			
			$wallMaxReplies = 4;
			if( !empty($this->app->wg->WallMaxReplies) ) {
				$wallMaxReplies = $this->app->wg->WallMaxReplies;
			}
			
			$replies = $this->getVal('replies', array());
			$repliesCount = count($replies);
			$this->response->setVal('repliesNumber', $repliesCount); 
			$this->response->setVal('showRepliesNumber', $repliesCount);
			$this->response->setVal('showLoadMore', false );
			
			if($this->request->getVal('condense', true) && $repliesCount > $wallMaxReplies) {
				$this->response->setVal('showRepliesNumber', $wallMaxReplies - 2 );	
				$this->response->setVal('showLoadMore', true );
			}
			$this->response->setVal('isWatched', $wallMessage->isWatched($this->wg->User) || $this->request->getVal('new', false));
			$this->response->setVal('replies', $replies ); 
			
			$this->response->setVal('linkid', '1');
			
			$this->response->setVal( 'showReplyForm', (!$wallMessage->isRemove() && !$wallMessage->isAdminDelete())); 
		} else {
			$showFrom = $this->request->getVal('repliesNumber', 0) - $this->request->getVal('showRepliesNumber', 0);
			//$current = $this->request->getVal('current', false);
			if($showFrom > $this->request->getVal('current') ){
				$this->response->setVal('hide',  true);
			}
			
			$this->response->setVal('body', $wallMessage->getText() );
			$this->response->setVal('isreply', true );
			$this->response->setVal('replies', false );
			
			$this->response->setVal('linkid', $wallMessage->getPageUrlPostFix() );
		}

		// even though $data['author'] is a User object already
		// it's a cached object, and we need to make sure that we are
		// using newest RealName
		// cache invalidation in this case would require too many queries
		$authorUser = User::newFromName($wallMessage->getUser()->getName());
		if($authorUser) {
			$realname = "";
			$name = $authorUser->getName();
			$isStaff = $authorUser->isAllowed('wallshowwikiaemblem');
		} else {
			$realname = '';
			$name = $wallMessage->getUser()->getName();
			$isStaff = false;
		}
		$this->response->setVal( 'isStaff', $isStaff );
	
		$this->response->setVal( 'id', $wallMessage->getTitle()->getArticleID());
		$this->response->setVal( 'username', $name );
		$this->response->setVal( 'realname', $realname );
		
		if($wallMessage->isEdited()) {
			if (time() - $wallMessage->getEditTime(TS_UNIX) < self::WALL_MESSAGE_RELATIVE_TIMESTAMP) {
				$this->response->setVal( 'iso_timestamp',  $wallMessage->getEditTime(TS_ISO_8601) );
			} else {
				$this->response->setVal( 'iso_timestamp', null);
			}
			$this->response->setVal( 'fmt_timestamp',  $this->wg->Lang->timeanddate( $wallMessage->getEditTime(TS_MW) ));			
			$this->response->setVal( 'showEditedTS',  true );
			$editorName = $wallMessage->getEditor()->getName();
			$this->response->setVal( 'editorName', $editorName );			
			$editorUrl = F::build( 'Title', array( $editorName, NS_USER_WALL ), 'newFromText' )->getFullUrl();
			$this->response->setVal( 'editorUrl',  $editorUrl );
			$this->response->setVal( 'isEdited',  true);
			
			$query = array(
				'diff' => 'prev',
				'oldid' => $wallMessage->getTitle()->getLatestRevID(),
			);
					
			$this->response->setVal( 'historyUrl', $wallMessage->getTitle()->getFullUrl( $query ) );
		} else {
			$this->response->setVal( 'showEditedTS',  false );
			if (time() - $wallMessage->getEditTime(TS_UNIX) < self::WALL_MESSAGE_RELATIVE_TIMESTAMP) {
				$this->response->setVal( 'iso_timestamp',  $wallMessage->getCreatTime(TS_ISO_8601) );
			} else {
				$this->response->setVal( 'iso_timestamp', null);
			}
			$this->response->setVal( 'fmt_timestamp',  $this->wg->Lang->timeanddate( $wallMessage->getCreatTime(TS_MW) ));
			$this->response->setVal( 'isEdited',  false);
		}
		
		$this->response->setVal( 'fullpageurl', $wallMessage->getMessagePageUrl() );
		$this->response->setVal( 'wgBlankImgUrl', $this->wg->BlankImgUrl );
		
		$this->response->setVal( 'id', $wallMessage->getId() );

		if($this->wg->User->getId() > 0 && !$wallMessage->isWallOwner($this->wg->User) ) {
			$this->response->setVal( 'showFollowButton', true );
		} else {
			$this->response->setVal( 'showFollowButton', false );
		}
		
		$displayname  = $realname;
		$displayname2 = $name;
		
		if( empty($displayname) ) {
			$displayname = $name;
			$displayname2 = '';
		}

		$url = F::build( 'Title', array( $name, NS_USER_WALL ), 'newFromText' )->getFullUrl();
		
		if($wallMessage->getUser()->getId() == 0) { // anynymous contributor
			$url = Skin::makeSpecialUrl('Contributions').'/'.$wallMessage->getUser()->getName();
			
			$displayname = wfMsg('oasis-anon-user');
			$displayname2 = $wallMessage->getUser()->getName();
		}

		
		$this->response->setVal('canRestore', $wallMessage->canRestore
		($this->app->wg->User) );
		
		$this->response->setVal('fastrestore', $wallMessage->canFastrestore($this->app->wg->User) );
				
		$this->response->setVal( 'displayname',  $displayname );
		$this->response->setVal( 'displayname2', $displayname2 );
		
		$this->response->setVal('votes', $wallMessage->getVoteCount() );
		$this->response->setVal('isVoted', $wallMessage->isVoted() );
		
		$this->response->setVal('isVoted', $wallMessage->isVoted() );
		
		$this->response->setVal('showVotes', $wallMessage->showVotes() );
		
		$this->response->setVal('canVotes', $wallMessage->canVotes($this->wg->User) || !$this->wg->User->isLoggedIn() );
		
		
		$this->response->setVal( 'user_author_url',  $url );

		$this->response->setCacheValidity(0, 0, array(WikiaResponse::CACHE_TARGET_BROWSER));
		
		wfProfileOut( __METHOD__ );
	}
	
	protected function getWallMessage() {
		$comment = $this->request->getVal('comment');
		if(($comment instanceof ArticleComment)) {
			$wallMessage = F::build('WallMessage', array($comment), 'newFromArticleComment' );	
		} else {
			$wallMessage = $comment;
		}
		if($wallMessage instanceof WallMessage) {
			$wallMessage->load();
			return $wallMessage;
		}		
	}
	
	public function getThreads($title, $page, $perPage = null) {
		wfProfileIn(__METHOD__);

		$wall = F::build('Wall', array(($title)), 'newFromTitle');
				
		if(!empty($perPage)) {
			$wall->setMaxPerPage($perPage);
		}
		
		$wall->setSorting($this->getSortingSelected() );
		
		$this->threads = $wall->getThreads($page);
		
		$this->countComments = $wall->getThreadCount();
		
		$this->title = $this->wg->Title;
		
		wfProfileOut(__METHOD__);
	}	
	
	protected function getSortingOptions() {
		$title = $this->request->getVal('title', $this->app->wg->Title);
		
		$output = array();
		$selected = $this->getSortingSelected();
		
		//$id's are names of DOM elements' classes
		//which are needed to click tracking
		//if you change them here, do so in Wall.js file, please
		foreach($this->getSortingOptionsText() as $id => $option) {
			if( $this->sortingType === 'history' ) {
				$href = $title->getFullURL(array('action' => 'history', 'sort' => $id));
			} else {
				$href = $title->getFullURL(array('sort' => $id));
			}
			
			if( $id == $selected ) {
				$output[] = array('id' => $id, 'text' => $option, 'href' => $href, 'selected' => true);
			} else {
				$output[] = array('id' => $id, 'text' => $option, 'href' => $href);
			}
		}
		
		return $output;
	}
	
	protected function getSortingSelected() {
		$selected = $this->wg->request->getVal('sort');
		
		if( empty($selected) ) {
			$selected = $this->app->wg->User->getOption('wall_sort_'.$this->sortingType);
		} else {
			$selectedDB = $this->app->wg->User->getOption('wall_sort_'.$this->sortingType);

			if( $selectedDB != $selected ) {
				$this->app->wg->User->setOption('wall_sort_'.$this->sortingType, $selected );
				$this->app->wg->User->saveSettings();
			}
		}
		
		if( empty($selected) || !array_key_exists($selected, $this->getSortingOptionsText()) ) {
			$selected = ($this->sortingType === 'history') ? 'of' : 'nt';
		}
		
		return $selected;
	}
	
	protected function getSortingOptionsText() {
		switch($this->sortingType) {
			case 'history':
				//keys of sorting array are names of DOM elements' classes
				//which are needed to click tracking
				//if you change those keys here, do so in Wall.js file, please
				$options = array(
					'nf' => $this->app->wf->Msg('wall-history-sorting-newest-first'),
					'of' => $this->app->wf->Msg('wall-history-sorting-oldest-first'),
				);
				break;
			case 'index':
			default:
				$options = array(
					'nt' => $this->app->wf->Msg('wall-sorting-newest-threads'),
					'ot' => $this->app->wf->Msg('wall-sorting-oldest-threads'),
					'nr' => $this->app->wf->Msg('wall-sorting-newest-replies'),
					//'ma' => $this->app->wf->Msg('wall-sorting-most-active'),
					//'a' => $this->app->wf->Msg('wall-sorting-archived')
				);
				break;
		}
		
		return $options;
	}
	
	protected function getSortingSelectedText() {
		$selected = $this->getSortingSelected();
		$options = $this->getSortingOptionsText();
		return $options[$selected];
	}
	
	public function brickHeader() {
		
		$this->wg->SuppressPageTitle = true;
		
		$this->response->setVal( 'isRemoved', false );
		$this->response->setVal( 'isAdminDeleted', false );

		$this->response->setVal( 'isNotifyeveryone', false );

		$path = array();
		$this->response->setVal( 'path', $path);
		
		$title = F::build('Title', array($this->request->getVal('id')), 'newFromId' );
		if(empty($title)) {
			$title = F::build('Title', array($this->request->getVal('id'), Title::GAID_FOR_UPDATE), 'newFromId' );
		}
		
		if(!empty($title) && $title->isTalkPage() ) {
			$wallMessage = F::build('WallMessage', array($title), 'newFromTitle' );
			
			$wallMessageParent = $wallMessage->getTopParentObj();
			if(!empty($wallMessageParent)) {
				$wallMessage = $wallMessageParent;
			}
			
			$wallMessage->load();
			
			if( $wallMessage->getWallOwner()->getId() == $this->wg->User->getId() ) {
				$wallName = wfMsg('wall-message-mywall');
			} else {
				
				$wallOwner = $wallMessage->getWallOwner()->getName();
				
				$wallName = wfMsgExt('wall-message-elseswall', array('parsemag'), $wallOwner); 
			}

			$wallUrl = $wallMessage->getWallUrl();
			 
			$messageTitle = htmlspecialchars($wallMessage->getMetaTitle());
			$isRemoved = $wallMessage->isRemove();
			$isDeleted = $wallMessage->isAdminDelete();
			$this->response->setVal( 'isRemoved', $isRemoved );
			$this->response->setVal( 'isAdminDeleted', $isDeleted );
				
			$this->response->setVal( 'isNotifyeveryone', $wallMessage->getNotifyeveryone() );

			
			if( $isRemoved || $isDeleted ) {
				$this->wg->Out->setRobotPolicy( "noindex,nofollow" );
			}
			
			$user = $this->app->wg->User;
			// remove admin notification for it if Admin just checked it
			if( in_array( 'sysop', $user->getEffectiveGroups() ) ||
				in_array( 'staff', $user->getEffectiveGroups() ) ) {
				$wna = new WallNotificationsAdmin;
				$wna->removeForThread( $this->app->wg->CityId, $wallMessage->getId() );
			}

			$wno = new WallNotificationsOwner;
			$wno->removeForThread( $this->app->wg->CityId, $user->getId(), $wallMessage->getId() );
			
			$path[] = array( 
				'title' => $wallName,
				'url' => $wallUrl
			);
			
			$path[] = array( 
				'title' => $messageTitle
			);
			
			wfRunHooks('WallThreadHeader', array($title, $wallMessage, &$path, &$this->response, &$this->request));
		} else {
			wfRunHooks('WallHeader', array($this->wg->Title, &$path, &$this->response, &$this->request));
		}
		$this->response->setVal( 'path', $path);
	}
	
	public function newMessage() {
		$wall_username = $this->helper->getUser()->getName();
		
		// only use realname if user made edits (use logic from masthead)
		$userStatsService = F::build('UserStatsService', array($this->helper->getUser()->getID()));
		$userStats = $userStatsService->getStats();
		if(empty($userStats['edits']) || $userStats['edits'] == 0) {
			$wall_username = $this->helper->getUser()->getName();
		}
		
		$username = $this->wg->User->getName();
		$this->response->setVal('username', $username);
		$this->response->setVal('wall_username', $wall_username);

		wfRunHooks( 'WallNewMessage', array($this->wg->Title, &$this->response) );

		$notifyEveryone = $this->helper->isAllowedNotifyEveryone($this->wg->Title->getNamespace(), $this->wg->User);
		
		$this->response->setVal( 'notify_everyone', $notifyEveryone );

		$wall_message = $this->response->getVal('wall_message');
		if ( empty($wall_message) ) {
			$wall_message = User::isIP($wall_username) ? $this->wf->Msg('wall-placeholder-message-anon') : $this->wf->Msg('wall-placeholder-message', $wall_username);
			$this->response->setVal('wall_message', $wall_message);
		}

		$this->checkAndSetAnonsEditing();
		$this->checkAndSetUserBlockedStatus( $this->helper->getUser() );
	}
	
	/**
	 * @brief Checks if $wgDisableAnonymousEditing is not empty and and if user is logged-in
	 * 
	 * @desc If $wgDisableAnonymousEditing is not empty and user is not logged-in it sets two vars and passes it to the templates
	 */
	protected function checkAndSetAnonsEditing() {
		if( !empty($this->app->wg->DisableAnonymousEditing) && !$this->app->wg->User->isLoggedIn() ) {
			$this->response->setVal('loginToEditProtectedPage', true);
			$this->response->setVal('ajaxLoginUrl', $this->app->wg->Title->getLocalUrl());
		} else {
			$this->response->setVal('loginToEditProtectedPage', false);
		}
	}
	

	protected function checkAndSetUserBlockedStatus($wallOwner = null) {
		$user = $this->app->wg->User;
		
		if( $user->isBlocked() || $user->isBlockedGlobally() ) {
			if(	!empty($wallOwner) &&
				$wallOwner->getName() == $this->wg->User->getName() &&
				!(empty($user->mAllowUsertalk)) ) {
					
				// user is blocked, but this is his wall and he was not blocked
				// from user talk page	
				$this->response->setVal('userBlocked', false);
			} else {
				$this->response->setVal('userBlocked', true);
			}
		} else {
			$this->response->setVal('userBlocked', false);
		}
		
	}
	
	public function getThread($filterid) {
		wfProfileIn(__METHOD__);

		$wallthread = F::build('WallThread', array($filterid), 'newFromId');
		$wallthread->loadIfCached();
				
		$this->threads = array( $filterid => $wallthread );
		
		$this->title = $this->wg->Title;
		
		wfProfileOut(__METHOD__);
	}
	
	public function message_error() {

	}
	
} // end class Wall
