<?php
	require_once('cls_dbconfig.php');
	function __autoload($classname){
	  require_once("$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_meassage = new cls_meassage();
	 
	$message_id = "$_POST[message]";
	
	 $filename = $cls_meassage->get_file($message_id);
	 
	 $cls_meassage->messag_delete($message_id);
	
	unlink('document/'. $filename);
?>