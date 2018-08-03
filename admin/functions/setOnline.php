<?php
include '../../DataBase/DB.php';
include '../../functions/Login.php'; 
LoggedIn::isLoggedIN();
$params = WhoIsLoggedIn::whoislogged();
$user_id = $params[0];

class OnlineUsers 
{
	public static function onUsers()
	{
		$user_id = Login::isLoggedIn();
		$onlineDate = date('Y-m-d h:i:s');
		$params = array(':user_online'=>$onlineDate, ':user_id'=>$user_id);
		DB::query('UPDATE gps_users SET user_online=:user_online WHERE user_id=:user_id', $params);
	}
}

OnlineUsers::onUsers();
?>
