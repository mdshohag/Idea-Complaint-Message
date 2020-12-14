<?php
	session_start();
	
	require_once('cls_dbconfig.php');
	function __autoload($classname){
	  require_once("$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_usermanage = new cls_usermanage();
	
	
	//$admin_id = $_SESSION['customer_id'];
	
	$admin_id = $_SESSION['customer_name'];
	
	$username = "$_POST[username]";
	$usertype = "$_POST[usertype]";
	$fullname = "$_POST[fullname]";
	
	$id = "$_POST[user_id]";
	
	echo $cls_usermanage->update_user($admin_id,$username,$usertype,$fullname,$id);
	
?>