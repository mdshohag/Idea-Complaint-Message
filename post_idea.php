<?php
	session_start();
	
	require_once('cls_dbconfig.php');
	function __autoload($classname){
	  require_once("$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_idea = new cls_idea();
	

	
	$customer_id = $_SESSION['customer_id'];
	
	$title = "$_POST[title]";
	$subject = "$_POST[subject]";
	
	
	$description = $db->connection()->real_escape_string("$_POST[description]");
	
	$target_path = "document/";

	$ext = pathinfo(basename($_FILES['file']['name']), PATHINFO_EXTENSION);
	$file = $_FILES['file']['name'];

	//$target_path = $target_path . $_FILES['uploadedfile']['name'];

	$target_path = $target_path . $file;

	move_uploaded_file($_FILES['file']['tmp_name'], $target_path);	
		
	echo $cls_idea->ideapost($customer_id,$title,$subject,$description,$file);

	
		
		
	
?>