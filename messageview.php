<?php include('header.php'); 

 $userid = $_GET['userid'];
 
 $userviewid = $_GET['userviewid'];

$db->query("update tbl_message set status = 'Seen' where id = '$userid'");
 
 $message_p = $cls_meassage->view_full_message($userid);
 $message = $message_p->fetch_assoc();
 $message_user = $cls_meassage->view_singl_message($userviewid);
 $messageuser = $message_user->fetch_assoc();
 
?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
								
								<?php if($_SESSION['customer_type']=='Admin'){
													
										?>
									<table class="tables">
										
										<tr>
											<td>
												<div class="titles" style="">
													<h2><?php echo ucfirst($message['title']); ?></h2>
												</div>
											</td>
										</tr>
										<tr>
											<td>
											<label style="padding-top:20px;font-size:18px;" for="Subject">Subject</label>
												<div class="subject">
													<?php echo $message['subject']; ?>
												</div>
											</td>
										</tr>
										<tr>
											<td>
											<label style="padding-top:29px;font-size:18px;" for="Description">Description</label>
												<div class="description">
													<h4><?php echo $message['description']; ?></h4>
													<a href="<?php echo "http://moneyplusltd.com/idea/document/$message[upfile]";?>" target="_blank"><?php echo "$message[upfile]";?></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label style="padding-top:29px;font-size:18px;" for="By">By</label>
												<div class="regard"><?php echo $message['name']; ?></div>
											</td>
										</tr>
									
									</table>
									
									<div class="commentbox">
										<form id="admincommit" method="post" enctype="multipart/form-data" >
										 <div class="form-group">
											<label style="font-size:18px;" for="exampleInputComment">Comment Type</label>
											<input type="hidden" value="<?php echo $userid; ?>" name="tblmseid">										
											<select class="form-control" name="commenttype">
											  <option value="">Select</option>
											  <option value="Urgent">Urgent</option>
											  <option value="Regular">Regular</option>
											  <option value="Later">Later</option>
											</select>
										  </div>
									  
									  
									  <div class="form-group">
										<label style="font-size:18px;" for="exampleInputComment">Comment </label>
										
										  <textarea rows="4" class="form-control" name="adminmess"></textarea>
										
									  </div>
									  <button type="submit" class="btn btn-success">Submit</button>
									</form>
								</div>
									<?php
									} else{
									?>
									
									
									<table class="tables">
										
										<tr>
											<td>
												
												<h2><?php echo ucfirst($messageuser['title']); ?></h2>
											
											</td>
										</tr>
										<tr>
											<td>
											<label style="padding-top:20px;font-size:18px;" for="Subject">Subject</label>
												<div class="subject"><?php echo $messageuser['subject']; ?>
												</div>
											</td>
										</tr>
										<tr>
											<td>
											<label style="padding-top:29px;font-size:18px;" for="Description">Description</label>
											<div class="description">
												<h4 style="text-align: justify;text-justify: inter-word;line-height:28px;"><?php echo $messageuser['description']; ?></h4>
												<a href="<?php echo "http://moneyplusltd.com/idea/document/$messageuser[upfile]";?>" target="_blank"><?php echo "$messageuser[upfile]";?></a>
											</div>
											</td>
										</tr>
									</table>
									
									<?php } ?>
									
									
								
								</div>
								
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				
			</div>
			<!-- END MAIN CONTENT -->
<?php include('footer.php'); ?>