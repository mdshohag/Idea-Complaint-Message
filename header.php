<?php
 session_start();
	if(!isset($_SESSION['customer_id'])){
		
		echo "<script>location.href='login.php';</script>";
	}
	require_once('cls_dbconfig.php');
	function __autoload($classname){
	  require_once("$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$db = $cls_dbconfig->connection();
	
	$cls_idea = new cls_idea();
	$cls_meassage = new cls_meassage();
	$cls_usermanage = new cls_usermanage();
	
	$all_message = $cls_meassage->all_show_meassge_notifaction();
	$all_data = $all_message->fetch_assoc();
	
	$messagestatus = $all_data['status'];
	
	
	$notification =  $cls_meassage->show_meassge_notifaction($messagestatus);
	$notification_count = $notification->fetch_array();
	
	$count_message = $notification_count[0];
	
	
	$message_noview = $cls_meassage->show_meassge_notifaction_status();
	
	$message_view = $cls_meassage->show_meassge_status();
	
	
	$sendid = $_SESSION['customer_id'];
	
	$statusid = $cls_meassage->send_status($sendid);
	
	
	
	$show_alluser = $cls_usermanage->all_user_view();
	
	$mess_id_data = $cls_meassage->view_mess_id();
	
	
	$mes_idea = $cls_meassage->view_idea();	
	$idea_data = $mes_idea->fetch_assoc();	
	$ide_title = $idea_data['title'];
	
	$mes_complaint = $cls_meassage->view_complaint();
	$complaint = $mes_complaint->fetch_assoc();
	$com_title = $complaint['title'];
	
	
	
	error_reporting(0);
	
	
?>



<!doctype html>
<html lang="en">

<head>
	<title>Ejadah Training and Consultancy Group</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="assets/css/main.min.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<link rel="stylesheet" href="alert/alertify.min.css">
   <link rel="stylesheet" href="alert/default.min.css">
   
   
  <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

     
   
   
   
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
		<div class="sidebar">
			<div class="brand">
				<a href="index.php"><img src="assets/img/EjadahTCL.png" alt="EjadahTCL Logo" class="img-responsive logo"></a>
			</div>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard </span></a></li>
						<?php
						
						if($_SESSION['customer_type']=='Admin'){
													
						?>
						<li><a href="inbox.php" class=""><i class="fa fa-envelope"></i> <span>Inbox <?php echo $count_message; ?> </span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cog"></i>  <span>User Management</span><i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="adduser.php" class="">Add User</a></li>
									<li><a href="allusers.php" class="">All Users</a></li>
								</ul>
							</div>
							
						</li>
						<li>
							<a href="edit_admin.php?userdataid=<?php echo $_SESSION['customer_id'];?>"><i class="lnr lnr-cog"></i>  <span>Change Password</span></a>							
						</li>
						
						<?php
						} else{
						?>
						<li><a href="message.php" class=""><i class="lnr lnr-pencil"></i> <span>Add New Message</span></a></li>
						<!--<li><a href="complaint.php" class=""><i class="lnr lnr-pencil"></i> <span>Complaint</span></a></li>-->
						
						<li>
							<a href="edit_profile.php?userdataid=<?php echo $_SESSION['customer_id'];?>"><i class="lnr lnr-cog"></i>  <span>Change Password</span></a>							
						</li>
						
						<?php
						}
						?>
						<!--
						<li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Elements</span></a></li>
						<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
						
						
						--->
						
					</ul>
				</nav>
			</div>
			
		</div>
		<!-- END SIDEBAR -->
		
		
		
		<!-- MAIN -->
		<div class="main">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
							<span class="sr-only">Toggle Navigation</span>
							<i class="fa fa-bars icon-nav"></i>
						</button>
					</div>
					<div id="navbar-menu" class="navbar-collapse collapse">
					<form class="navbar-form navbar-left hidden-xs">
							
							<?php echo $_SESSION['customer_type'];?>
							
						</form>
						
						<ul class="nav navbar-nav navbar-right">
						
						<?php
						
						if($_SESSION['customer_type']=='Admin'){
													
						?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="lnr lnr-alarm"></i>
									<span class="badge bg-danger"> <?php if(!empty($count_message)) { ?><?php echo $count_message; ?><?php } else { ?>0<?php } ?>  </span>
								</a>
								<ul class="dropdown-menu notifications">
								
								<?php while($showmessage = $message_noview->fetch_assoc()){ ?>
								
									<li><a href="messageview.php?userid=<?php echo $showmessage['id']; ?>" class="notification-item"><span class="dot bg-danger"></span><?php echo $showmessage['subject']; ?></a></li>
									
								<?php } ?>
									<!--<li><a href="#" class="more">See all notifications</a></li>-->
									
									
									
								</ul>
							</li>
							<?php
						} else{
						?>
							<!--<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#">Basic Use</a></li>
									<li><a href="#">Working With Data</a></li>
									<li><a href="#">Security</a></li>
									<li><a href="#">Troubleshooting</a></li>
								</ul>
							</li>-->
							<?php
						}
						?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><!--<img src="assets/img/user.png" class="img-circle" alt="Avatar"> --><span><?php echo $_SESSION['customer_name'];?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<!--<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
									<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
									<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>-->
									<li><a href="#" id="signouts"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
								</ul>
							</li>
						
						</ul>
					</div>
				</div>
			</nav>