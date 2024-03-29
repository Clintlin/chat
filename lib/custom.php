<?php
/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license GNU Affero General Public License
 * @link https://blueimp.net/ajax/
 * 
 * phpBB2 integration:
 * http://www.phpbb.com/
 */

// phpBB initialization:		
define ('IN_PHPBB', true);
$phpbb_root_path = AJAX_CHAT_PATH.'../';
require($phpbb_root_path.'extension.inc');
require($phpbb_root_path.'common.'.$phpEx);

// phpBB session management:
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);
?>