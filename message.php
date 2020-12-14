<?php include('header.php'); ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Your Idea/Complaint Submit</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<form class="form-horizontal" id="idea" method="post" enctype="multipart/form-data" >
									  <div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Type</label>
										<div class="col-sm-10">
											<select class="form-control" name="title">
											  <option value="">Select Idea/Complaint</option>
											  <option value="idea">Idea</option>
											  <option value="complaint">Complaint</option>
											</select>
										</div>
									  </div>
									  <div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Subject</label>
										<div class="col-sm-10">
										 
										  <input type="text" class="form-control" id="inputsubject" name="subject" placeholder="Subject">
										</div>
									  </div>
									  <div class="form-group">
										<label for="inputtextarea" class="col-sm-2 control-label">Description</label>
										<div class="col-sm-10">
										  <textarea class="form-control" rows="9" name="description"></textarea>
										</div>
									  </div>
									  <div class="form-group">
										<label for="file" class="col-sm-2 control-label">Upload File</label>
										<div class="col-sm-10">
										 <input type="file" name="file"/>
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
										  <button type="submit" class="btn btn-success">Send</button>
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