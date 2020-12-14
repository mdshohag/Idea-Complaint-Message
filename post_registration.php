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
	$password = md5($_REQUEST['password']);
	$usertype = "$_POST[usertype]";
	$fullname = "$_POST[fullname]";
	
	
	
	echo $cls_usermanage->adduser($admin_id,$username,$password,$usertype,$fullname);
	
	
	
?>