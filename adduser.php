<?php include('header.php'); ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Add User</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<form class="form-horizontal" id="adduser" method="post" enctype="multipart/form-data" >
									 <div class="form-group">
										<label for="inputUser" class="col-sm-3 control-label">User Id</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="inputuserid" name="username" placeholder="User Id">
										</div>
									  </div>
									  <div class="form-group">
										<label for="inputUser" class="col-sm-3 control-label">Password</label>
										<div class="col-sm-9">
										  <input type="password" class="form-control" id="inputpasswor" name="password" placeholder="Password ">
										</div>
									  </div> 
									  <div class="form-group">
										<label for="inputUser" class="col-sm-3 control-label">Confirm Password </label>
										<div class="col-sm-9">
										  <input class="form-control" type="password" name="repassword" id="repassword" placeholder="Retype Password">
										</div>
									  </div>
									 <div class="form-group">
										<label for="inputUsertype3" class="col-sm-3 control-label">User Type</label>
										<div class="col-sm-9">
											<select class="form-control" name="usertype">
											  <option value="">Select</option>
											  <option value="Admin">Admin</option>
											  <option value="Employee">Employee</option>
											</select>
										</div>
									  </div>
									  <div class="form-group">
										<label for="inputUser" class="col-sm-3 control-label">User Full Name</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="inputusername" name="fullname" placeholder="Full Name">
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
										  <button type="submit" class="btn btn-success">Save</button>
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