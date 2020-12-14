<?php include('header.php'); ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">All Users</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<table class="table">
										<tr>
											<th>Full Name</th>
											<th>User Id</th>
											<th>User Create By</th>
											<th>Status</th>
											<th style="text-align:center">Action</th>
										</tr>
										<?php
										
										while($allusers = $show_alluser->fetch_assoc()){
										
										?>
										
										<tr>
											<td><?php echo $allusers['name']; ?></td>
											<td><?php echo $allusers['username']; ?></td>
											<td><?php echo $allusers['admin_id']; ?></td>
											<td><?php echo $allusers['type']; ?></td>
											<td style="text-align:center">
											<a href="edit_user.php?user_id=<?php echo $allusers['id']; ?>" class="btn btn-info">Edit User</a> 
											<button user_id="<?php echo $allusers['id']; ?>" class="btn btn-danger user_delete">Delete User</button>
											</td>
										</tr>
										<?php
											}
										?>
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