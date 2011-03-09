<?php
 
/**
 * Chat
 *
 * Live chat for MediaWiki
 *
 * @author Christian Williams <christian@wikia-inc.com>, Sean Colombo <sean@wikia-inc.com>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @package MediaWiki
 *
 */

$dir = dirname(__FILE__);

// rights
$wgAvailableRights[] = 'chatmoderator';
$wgGroupPermissions['*']['chatmoderator'] = false;
$wgGroupPermissions['sysop']['chatmoderator'] = true;
$wgGroupPermissions['staff']['chatmoderator'] = true;

$wgAvailableRights[] = 'chat';
$wgGroupPermissions['*']['chat'] = true;
$wgGroupPermissions['bannedfromchat']['chat'] = false;

// Attempt to do the permissions the other way (adding restriction instead of subtracting permission).
$wgAvailableRights[] = 'bannedfromchat';
$wgGroupPermissions['*']['bannedfromchat'] = false;
$wgGroupPermissions['bannedfromchat']['bannedfromchat'] = true;

// autoloaded classes
$wgAutoloadClasses['Chat'] = "$dir/Chat.class.php";
$wgAutoloadClasses['ChatAjax'] = "$dir/ChatAjax.class.php";
$wgAutoloadClasses['ChatHelper'] = "$dir/ChatHelper.php";
$wgAutoloadClasses['ChatModule'] = "$dir/ChatModule.class.php";
$wgAutoloadClasses['ChatRailModule'] = "$dir/ChatRailModule.class.php";
$wgAutoloadClasses['SpecialChat'] = "$dir/SpecialChat.class.php";

// special pages
$wgSpecialPages['Chat'] = 'SpecialChat';

// i18n
$wgExtensionMessagesFiles['Chat'] = $dir.'/Chat.i18n.php';

// hooks
$wgHooks[ 'GetRailModuleList' ][] = 'ChatHelper::onGetRailModuleList';

// ajax
$wgAjaxExportList[] = 'ChatAjax';
function ChatAjax() {
	global $wgRequest;
	$method = $wgRequest->getVal('method', false);

	if (method_exists('ChatAjax', $method)) {
		wfProfileIn(__METHOD__);

		wfLoadExtensionMessages('Chat');
		$data = ChatAjax::$method();

		// send array as JSON
		$json = Wikia::json_encode($data);
		$response = new AjaxResponse($json);
		$response->setContentType('application/json; charset=utf-8');

		wfProfileOut(__METHOD__);
		return $response;
	}
}
