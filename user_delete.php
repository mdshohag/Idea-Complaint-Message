<?php
	require_once('cls_dbconfig.php');
	function __autoload($classname){
	  require_once("$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_usermanage = new cls_usermanage();
	 
	$user_id = "$_POST[user]";
	
	
	 $cls_usermanage->user_delete($user_id);
?>