<?php include('header.php'); 

 $user_id = $_GET['user_id'];
 $one_user_view = $cls_usermanage->one_user_view($user_id);
 
 $dataview = $one_user_view->fetch_assoc();
 

?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Edit User </h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<form class="form-horizontal" id="edituser" method="post" enctype="multipart/form-data" >
									 <div class="form-group">
										<label for="inputUser" class="col-sm-3 control-label">User Id</label>
										<div class="col-sm-9">
										<input type="hidden" value="<?php echo $user_id; ?>" name="user_id">
										  <input type="text" class="form-control" value="<?php echo $dataview['username']; ?>" id="inputuserid" name="username" placeholder="User Id">
										</div>
									  </div>
									  
									 <div class="form-group">
										<label for="inputUsertype3" class="col-sm-3 control-label">User Type</label>
										<div class="col-sm-9">
											<select class="form-control" name="usertype">
											  <option value="<?php echo $dataview['type']; ?>"><?php echo $dataview['type']; ?></option>
											  <option value="Admin">Admin</option>
											  <option value="Employee">Employee</option>
											</select>
										</div>
									  </div>
									  <div class="form-group">
										<label for="inputUser" class="col-sm-3 control-label">User Full Name</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="inputusername" value="<?php echo $dataview['name']; ?>" name="fullname" placeholder="Full Name">
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
										  <button type="submit" class="btn btn-success">Update</button>
										</div>
									  </div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
<?php include('footer.php'); ?>