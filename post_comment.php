<?php
	session_start();
	
	require_once('cls_dbconfig.php');
	function __autoload($classname){
	  require_once("$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_meassage = new cls_meassage();
	
	
	//$admin_id = $_SESSION['customer_id'];
	
	$admin_id = $_SESSION['customer_name'];
	
	$commenttype = "$_POST[commenttype]";
	$adminmess = "$_POST[adminmess]";
	
	$id = "$_POST[tblmseid]";
	
	echo $cls_meassage->update_comment($admin_id,$commenttype,$adminmess,$id);
	
?>