<?php include('header.php'); ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<table class="table" id="dataTables-inbox">
										<thead>
											<tr>
												<th><center>Sender</center></th>
												<th><center>Type</center></th>
												<th><center>Subject</center></th>
												<th><center>DateTime</center></th>
												<th><center>Status</center></th>
												<th><center>Priority</center></th>
												<th><center>Action</center></th>
											</tr>
										</thead>
										<tbody>
									<?php

									function getcolour($catc) { 
											switch($catc) 
											{ 
											case Seen: 
												return 'btndefault'; 
												break;

												case Pending: 
												return 'btnwarning'; 
												break; 
											
											default: 
												return 'btn-info'; 
												break; 
											} 
										} 




									while($messageview = $message_view->fetch_assoc()){

									$catc = $messageview["status"];
					
									?>
									
									
									
									<tr class="<?php echo getcolour($catc); ?>">
									
										<td><center><a href="messageview.php?userid=<?php echo $messageview['id']; ?>" style="color:#000;"> <?php echo $messageview['name']; ?></a></center></td>
										<td><center><a href="messageview.php?userid=<?php echo $messageview['id']; ?>" style="color:#000;">  <?php echo $messageview['title']; ?></a></center></td>
										<td><center><a href="messageview.php?userid=<?php echo $messageview['id']; ?>" style="color:#000;">  <?php echo $messageview['subject']; ?></a></center></td>
										<td><center><a href="messageview.php?userid=<?php echo $messageview['id']; ?>" style="color:#000;">  <?php echo $messageview['date_time']; ?></a></center></td>
									
										<td><center><a href="messageview.php?userid=<?php echo $messageview['id']; ?>" style="color:#000;"><?php echo $messageview['status']; ?></a></center></td>
										<td><center><a href="messageview.php?userid=<?php echo $messageview['id']; ?>" style="color:#000;"><?php echo $messageview['comment_type']; ?></a></center></td>
										<!--<td>
											<li><a href="messageview.php?userid=<?php //echo $messageview['id']; ?>"><span style="font-size:22px;"><?php //echo $messageview['title']; ?>   &nbsp;</span> <span style="font-size:19px;"> </span> <?php $rr = $messageview['description']; //echo substr($rr,0,20); ?>  <?php //echo $messageview['upfile']; ?></a></li>
									  </td>-->
									  
										<td><center><button message_id="<?php echo $messageview['id']; ?>" class="btn btn-info message_delete">Delete</button></center></td>
									  
									  </tr>
									
									<?php } ?>
									</tbody>
									</table>
									
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
<?php include('footer.php'); ?>