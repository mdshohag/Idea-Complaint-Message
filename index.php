<?php include('header.php'); ?>
			<!-- END NAVBAR -->
			<!-- MAIN CONTENT -->
			 <div class="main-content">
				<div class="container-fluid">
					
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Dashboard</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<?php if($_SESSION['customer_type']=='Admin'){
													
										?>
									<div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>User's Name</th>
										<th>Ideas</th>
										<th>Complaints</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php

									
									while($idpost = $mess_id_data->fetch_assoc()){
											$p_id = $idpost['id'];
									$view_count = $cls_meassage->viw_user_message_count($ide_title,$com_title,$p_id);
									while($view_i_c = $view_count->fetch_assoc()){
										
										
					
									?>
									
									
									
									<tr>
									
									
										<td><?php echo $view_i_c['name']; ?></td>
										<td><?php echo $view_i_c['idea']; ?></td>
										<td><?php echo $view_i_c['complaint']; ?></td>
								
									  
									  </tr>
									
									<?php } } ?>
                                </tbody>
                            </table>
                           
                        </div>

									<?php
									} else{
									?>
									
																		
										<table class="table" width="60%">
											<tr>
												<td><center>Type</center></td>
												<td><center>Subject</center></td>
												<td><center>Priority</center></td>
												<td><center>Status</center></td>
											</tr>
											<?php 
											
											function gettextchange($cout) { 
											switch($cout) 
											{ 
											case Seen: 
												return 'Seen By Management'; 
												break;

											case Pending: 
												return 'Pending'; 
												break; 
											
											default: 
												return 'Error'; 
												break; 
											} 
										}
											
											
											
											
											while($statusview = $statusid->fetch_assoc()){ 
												
												$cout = $statusview['status'];
												
											?>
											<tr>
												<td><center><a href="messageview.php?userviewid=<?php echo $statusview['id']; ?>" ><?php echo $statusview['title']; ?></a></center></td>
												<td><center><a href="messageview.php?userviewid=<?php echo $statusview['id']; ?>" ><?php echo $statusview['subject']; ?></a></center></td>
												<td><center><a href="messageview.php?userviewid=<?php echo $statusview['id']; ?>" ><?php echo $statusview['comment_type']; ?></a></center></td>
												<td><center><a href="messageview.php?userviewid=<?php echo $statusview['id']; ?>" ><?php echo gettextchange($cout); ?></a></center></td>
											</tr>
											<?php } ?>
										</table>									
									<?php
										}
									?>
							
									
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>
			<!-- END MAIN CONTENT -->
			
<?php include('footer.php'); ?>