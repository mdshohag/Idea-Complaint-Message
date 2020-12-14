<?php

		require_once('cls_dbconfig.php');
	function __autoload($classname){
	  require_once("$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_usermanage = new cls_usermanage();
	
	$uid = "$_POST[userdataid]";
	$fullname = "$_POST[fullname]";
	
	$old_password = md5($_REQUEST['old_password']);
	$new_password = md5($_REQUEST['new_password']);
	$retype_pass = md5($_REQUEST['retype_pass']);
	
	$q7 = $cls_usermanage->check_password($uid);
	
		$r7 = $q7->fetch_assoc();
		$password = $r7['password'];
		//print_r($password);
	    //die();
	
		if($old_password == $password)
	{
		$cls_usermanage->update_password($new_password,$fullname,$uid);
	echo '1';

	} else {
			echo '0';
		}
	
	
?>