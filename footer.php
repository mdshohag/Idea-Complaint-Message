				<footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2017. Designed &amp; Crafted by <a href="#">MonyPlus LTD</a></p>
				</div>
			</footer>
		</div>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
	<script src="assets/js/plugins/chartist/chartist.min.js"></script>
	<script src="assets/js/klorofil.min.js"></script>
	
	
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
	
	
	<script src="alert/alertify.min.js"></script>
	<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
	<script>
    $(document).ready(function() {
        $('#dataTables-inbox').DataTable({
            responsive: true
        });
    });
    </script>
	<script type="text/javascript">
		$(function(){
			
			$("#adduser").submit(function(e){
				e.preventDefault();
				
				var username = $('[name="username"]').val();
				var password = $('[name="password"]').val();
				var repassword = $('[name="repassword"]').val();
				var usertype = $('[name="usertype"]').val();
				var fullname = $('[name="fullname"]').val();
				
				
				if(username == ""){
						alertify.error('Please Enter User id');
						return false;
					}
					
					if(password == ""){
						alertify.error('Please Enter password');
						return false;
					}
					if(repassword == ""){
						alertify.error('Please Enter repassword');
						return false;
					}
					if(usertype == ""){
						alertify.error('Please Select User Type');
						return false;
					}	
					if(fullname == ""){
						alertify.error('Please Enter User Full Name');
						return false;
					}
					
					if(password != repassword) {
						alertify.error("Password and Retype password do not match"); 
						return false;
					}
				$.ajax({
					type:"post",
					url:"post_registration.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						
						if(res == 1){
							alertify.success('Success');
							
							location.href='adduser.php';
							
						}else{
							alertify.error('Not inserted');
						}
					
					  
					},error:function(){
						alert('Error on Ajax');
					}     
				})
			});
		})
	</script>
	<script>
	$("#edituser").submit(function(e){
		e.preventDefault();
		
		//var update_reg = $('[name="customer_id"]').val();
		//alert(update_reg);
		//return false;
		var username = $('[name="username"]').val();
		var fullname = $('[name="fullname"]').val();
		
		if(username == ""){
				alertify.error('Username field is empty');
				return false;
			}
		if(fullname == ""){
				alertify.error('Enter Full Name');
				return false;
			}
			
		$.ajax({
			type:"post",   
			url:"post_edituser.php",
			data:new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			success: function(res){
				//alert(res);
				//return false;
				
				if(res == 1){
					alertify.success("Successfully");
					location.href='allusers.php';
				}else{
					alertify.error("user not updated !!");
				}
			},error: function(){
				alertify.error("Error on Ajax !!");
			}          
		})		
		
	})
	</script>
	<script type="text/javascript"> 
		$(".user_delete").click(function(){
			var root_user_id=$(this).attr('user_id');
			//alert(root_id);
			//return false;
			var confirm = alertify.confirm('Are you sure want to delete User.').set('onok', function(closeEvent){  
				//alertify.alert(root_id);
			 var dataString ='user='+root_user_id;
			 
			 $.ajax({
			  type:"post",
			  url:"user_delete.php",
			  data:dataString,
			  success:function(res){
				location.href='allusers.php';
			  }
			  ,error:function(){
			   alert('Error on Ajax');
			  }
			  	  
			 });

		   });
			 confirm.set({'title':'User'});
		});
	</script>
	<script>
	
	$(function(){
		$("#editprofile").submit(function(e){
			e.preventDefault();
			
			var fullname = $('[name="fullname"]').val();
			var old_password = $('[name="old_password"]').val();
			var new_password = $('[name="new_password"]').val();
			var retype_pass = $('[name="retype_pass"]').val();

			
			if(fullname == ""){
				alertify.error('full Name field is empty');
				return false;
			}	
		if(old_password == ""){
				alertify.error('old password field is empty');
				return false;
			}	
			
			
			
			if(new_password == ""){
				alertify.error('New password field is empty');
				return false;
			}
			if(retype_pass == ""){
				alertify.error('retype password field is empty');
				return false;
			}
			if(new_password != retype_pass) {
						alertify.error("New Password and Retype password do not match"); 
						return false;
					}
			
			$.ajax({
					type:"post",
					url:"post_profile_change.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						if(res==1){

							$('[name="old_password"]').val("");
							$('[name="new_password"]').val("");
							$('[name="retype_pass"]').val("");

							alertify.success("Successfully");
						//	window.location.reload();


						//location.href='customer/myaccount.php';
					}else{
							$('[name="old_password"]').val("");
							$('[name="new_password"]').val("");
							$('[name="retype_pass"]').val("");
							alertify.error('old Password does not match !!');

							//return false;
					}
				}
			})
			
		});
	});
	</script>
	
	<script>
	$(function(){
		$("#signouts").click(function(e){
			e.preventDefault();
			//alert('ok');
			$.ajax({
				type:'post',
				url:'signout.php',
				success:function(res){
					//alert(res);
					if(res == '1'){
						location.href='index.php';
					}else{
						alertify.error('Error on Logout');
					}
				}
			})
		});
	})
	</script>
	<script type="text/javascript">
		$(function(){
			$("#idea").submit(function(e){
				e.preventDefault();
				//alert('ok');
				var title = $('[name="title"]').val();
				
				var subject = $('[name="subject"]').val();
				
				if(title == ""){
						alertify.error('Please Select Type');
						
						return false;
					}
				
				if(subject == ""){
						alertify.error('Please Enter  Subject');
						return false;
					}
						
				
				$.ajax({
					type:"post",
					url:"post_idea.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						
						//alert('ok');
						
						if(res == 1){
							
							alertify.success('Success');
							
							location.href='message.php';
						}
					else{
							alertify.error('Not inserted');
							//alertify.success('Success');
							
							//location.href='idea.php';
						}
					  
					},error:function(){
						alertify.error('Error on Ajax');
					}     
				})
			});
		})
	</script>
	<script type="text/javascript"> 
		$(".message_delete").click(function(){
			var root_id=$(this).attr('message_id');
			//alert(root_id);
			//return false;
			var confirm = alertify.confirm('Are you sure want to delete.').set('onok', function(closeEvent){  
				//alertify.alert(root_id);
			 var dataString ='message='+root_id;
			 
			 $.ajax({
			  type:"post",
			  url:"message_delete.php",
			  data:dataString,
			  success:function(res){
				location.href='inbox.php';
			  }
			  ,error:function(){
			   alert('Error on Ajax');
			  }
			  	  
			 });

		   });
			 confirm.set({'title':'Message'});
		});
	</script>
	<script>
	$("#admincommit").submit(function(e){
		e.preventDefault();
		
		var commenttype = $('[name="commenttype"]').val();
		
		if(commenttype == ""){
				alertify.error('Select Comment Type');
				return false;
			}
			
		$.ajax({
			type:"post",   
			url:"post_comment.php",
			data:new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			success: function(res){
				//alert(res);
				//return false;
				
				if(res == 1){
					alertify.success("Successfully");
					location.href='inbox.php';
				}else{
					alertify.error("user not updated !!");
				}
			},error: function(){
				alertify.error("Error on Ajax !!");
			}          
		})		
		
	})
	</script>
</body>

</html>