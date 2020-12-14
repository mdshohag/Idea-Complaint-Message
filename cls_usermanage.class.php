<?php
	class cls_usermanage{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		public function adduser($admin_id,$username,$password,$usertype,$fullname){
			
            $result = $this->con()->query("	insert into user (admin_id, username, password, name, type) values ('$admin_id', '$username','$password', '$fullname', '$usertype')");
			return $result;
		}
		
		public function all_user_view(){
			$show = $this->con()->query("SELECT * FROM user where type='Employee'");
			return $show;
		
		}
		
		public function one_user_view($user_id){
			$show = $this->con()->query("SELECT * FROM user where id='$user_id'");
			return $show;
		
		}
		
		public function update_user($admin_id,$username,$usertype,$fullname,$id){
		
			$update = $this->con()->query("update user set admin_id = '$admin_id', username='$username', name='$fullname', type='$usertype' where id = '$id'");
			return $update;
		
		}		
		
			public function user_delete($user_id){
			$result = $this->con()->query("DELETE FROM user Where id='$user_id'");
			return $result;
		}
		
		public function user_data_id($userdataid){
			$show = $this->con()->query("SELECT * FROM user where id='$userdataid'");
			return $show;
		
		}
		public function check_password($userdataid){
			$q = $this->con()->query("select password from user where id = '$userdataid'");
			return $q;
		
		}
		public function update_password($new_password,$fullname,$uid){
			$pass = $this->con()->query("update user set password = '$new_password', name='$fullname' where id = '$uid'");
			return $pass;
		}
		
	}
?>