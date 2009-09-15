<?php

$wgExtensionFunctions[] = 'wfSpecialTopFansByStat';


function wfSpecialTopFansByStat(){
	global $wgUser,$IP;
	include_once("includes/SpecialPage.php");


	class TopFansByStat extends UnlistedSpecialPage {
	
		function TopFansByStat(){
			parent::__construct("TopFansByStatistic");
		}
		
		function execute(){
			global $IP, $wgRequest, $wgUser, $wgOut, $wgStyleVersion, $wgMessageCache, $wgMemc, $wgUserStatsTrackWeekly, 
			       $wgUserStatsTrackMonthly, $wgUserLevels, $wgOut, $wgUploadPath; 
			
			//read in localisation messages
			require_once ( "$IP/extensions/wikia/UserStats/UserStats.i18n.php" );
			foreach( efWikiaUserStats() as $lang => $messages ){
				$wgMessageCache->addMessages( $messages, $lang );
			}
			
			//load css
			$wgOut->addScript("<link rel='stylesheet' type='text/css' href=\"/extensions/wikia/UserStats/TopList.css?{$wgStyleVersion}\"/>\n");
			
			
			$statistic = $wgRequest->getVal("stat");
			$column = "stats_{$statistic}";
			$stat_name_friendly = wfMsg("top_fans_stats_{$statistic}");
			
			$dbr =& wfGetDB( DB_SLAVE );
		
			//Error if the querystring value does not match our stat column
			if( !$dbr->fieldExists( "user_stats" , $column ) ){
				$wgOut->setPagetitle( wfMsg("top_fans_bad_field_title") );
				$wgOut->addHTML( wfMsg("top_fans_bad_field_message") );
				return false;
			}
			
			//set page title
			$wgOut->setPagetitle( wfMsg( "top_fans_by_category_title" ,  $stat_name_friendly  ) );
			
			$count = 50;
			
			$user_list = array();
			
			//get list of users
			//try cache
			$key = wfMemcKey( 'user_stats', 'top', $statistic, $count );
			$data = $wgMemc->get( $key );
			if( $data != ""){
				wfDebug("Got top users by {$statistic} ({$count}) from cache\n");
				$user_list = $data;
			}else{
				wfDebug("Got top users by {$statistic} ({$count}) from db\n");
			
				$params['ORDER BY'] = "{$column} DESC";
				$params['LIMIT'] = $count;
				
				$dbr =& wfGetDB( DB_SLAVE );
				$res = $dbr->select( 'user_stats', 
					array('stats_user_id','stats_user_name',$column), 
					array('stats_user_id <> 0', "{$column} > 0" ), __METHOD__, 
					$params
				);
				while( $row = $dbr->fetchObject($res) ){
					$user_list[] = array(  
							"user_id" => $row->stats_user_id,
							"user_name" => $row->stats_user_name,
							"stat" => $row->$column
							);
				}
				$wgMemc->set( $key, $user_list, 60 * 5);
			}
	
			//top nav bar
			
			$top_title = Title::makeTitle( NS_SPECIAL  , "TopUsers"  );
			$recent_title = Title::makeTitle( NS_SPECIAL  ,  "TopUsersRecent"  );
			
			$out = "<div class=\"top-fan-nav\">
				<h1>" . wfMsg("top_fans_by_points_nav_header") . "</h1>
				<p><a href=\"{$top_title->escapeFullURL()}\">" . wfMsg("top_fans_total_points_link") . "</a></p>";
				
			if($wgUserStatsTrackWeekly){
				$out .= "<p><a href=\"" . $recent_title->escapeFullURL("period=monthly") . "\">" . wfMsg("top_fans_monthly_points_link") . "</a><p>";
			}
			if($wgUserStatsTrackMonthly){
				$out .= "<p><a href=\"" . $recent_title->escapeFullURL("period=weekly") . "\">" . wfMsg("top_fans_weekly_points_link") . "</a></p>";
			}
			
			//Build Nav of Stats by Category based on Mediawiki:topfans_by_category
			
			$out .= "<h1 style=\"margin-top:15px !important;\">" . wfMsg("top_fans_by_category_nav_header") . "</h1>";
			
			$by_category_title = Title::makeTitle( NS_SPECIAL, "TopFansByStatistic");
			$nav = array();
			
			$lines = explode( "\n", wfMsgForContent( 'topfans_by_category' ) );
			foreach ($lines as $line) {
				if (strpos($line, '*') !== 0){
					continue;
				}else{
					$line = explode( '|' , trim($line, '* '), 2 );
					$stat = $line[0];
					$link_text = $line[1];
					$out .= "<p> <a href=\"" . $by_category_title->escapeFullURL("stat={$stat}") . "\">{$link_text}</a></p>";
				}
			}
			$out .= "</div>";
			
			$x = 1;
			$out .= "<div class=\"top-users\">";
			
			foreach( $user_list as $user ){
				$user_name = ( $user["user_name"] == substr( $user["user_name"] , 0, 22) ) ? $user["user_name"] : ( substr( $user["user_name"] , 0, 22) . "...");
				$user_title = Title::makeTitle( NS_USER  , $user["user_name"]  );
				$avatar = new wAvatar( $user["user_id"] ,"m");
				$CommentIcon = $avatar->getAvatarImage();
				
				//stats row
				//TODO: opinion_average isn't currently working, so its not enabled in menus
				if ($statistic == "opinion_average") {
					$statistics_row = number_format($row->opinion_average, 2);
					$lowercase_statistics_name = "percent";
				} else {
					$statistics_row = number_format( $user["stat"] );
					$lowercase_statistics_name = strtolower( wfMsgExt( "top_fans_stats_{$statistic}", "parsemag", $user["stat"] ) );		
				}
				
				$out .= "<div class=\"top-fan-row\">
					<span class=\"top-fan-num\">{$x}.</span><span class=\"top-fan\">
					<img src='{$wgUploadPath}/avatars/" . $CommentIcon . "' alt='' border=''> <a href='" . $user_title->escapeFullURL() . "' >{$user_name}</a>
					</span>
					<span class=\"top-fan-points\"><b>" . $statistics_row . "</b> {$lowercase_statistics_name}</span>";
				$out .= "<div class=\"cleared\"></div>";
				$out .= "</div>";
				$x++;
			}
			$out .= "</div><div class=\"cleared\"></div>";
			$wgOut->addHTML($out);
		}
	
	}
	
	SpecialPage::addPage( new TopFansByStat );
}

?>
