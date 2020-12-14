<?php
	class cls_meassage{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		public function all_show_meassge_notifaction(){
			$result = $this->con()->query("SELECT * FROM tbl_message where status = 'Pending'");
			return $result;
		}
		public function show_meassge_notifaction($messagestatus){
			$result = $this->con()->query("select sum(count_message) from tbl_message where status = '$messagestatus'");
			return $result;
		}
		public function show_meassge_notifaction_status(){
			$result = $this->con()->query("select * from tbl_message where status = 'Pending' order by id desc");
			return $result;
		}
		public function show_meassge_status(){
			$result = $this->con()->query("select tbl_message.*, user.name from tbl_message JOIN user ON tbl_message.post_id=user.id order by tbl_message.id desc");
			return $result;
		}
		public function view_full_message($userid){
			$result = $this->con()->query("select tbl_message.*, user.name from tbl_message JOIN user ON tbl_message.post_id=user.id where tbl_message.id='$userid'");
			return $result;
		}
		public function view_singl_message($userviewid){
			$result = $this->con()->query("select tbl_message.*, user.name from tbl_message JOIN user ON tbl_message.post_id=user.id where tbl_message.id='$userviewid'");
			return $result;
		}
		
		
		public function messag_delete($message_id){
			$result = $this->con()->query("DELETE FROM tbl_message Where id='$message_id'");
			return $result;
		}
		
		public function get_file($message_id){
			$result = $this->con()->query("select upfile from tbl_message where id = '$message_id'");
			$row = $result->fetch_assoc();
			return "$row[upfile]";
		}
		
		public function send_status($sendid){
			$result = $this->con()->query("select * from tbl_message where post_id = '$sendid'");
			return $result;
		}
		
		public function view_mess_id(){
			$result = $this->con()->query("SELECT * FROM user");
			return $result;
		}
		
		public function view_idea(){
			$result = $this->con()->query("SELECT * FROM tbl_message where title = 'idea'");
			return $result;
		}
		public function view_complaint(){
			$result = $this->con()->query("SELECT * FROM tbl_message where title = 'complaint'");
			return $result;
		}
		
		public function viw_user_message_count($ide_title,$com_title,$p_id){
			$result = $this->con()->query("select post_id, name, (select count(id) from tbl_message where title='$ide_title' and post_id='$p_id') as idea, (select count(id) from tbl_message where title='$com_title' and post_id='$p_id') as complaint from tbl_message as ms inner join user as us where ms.post_id=us.id and post_id='$p_id' group by post_id");
			return $result;
		}
		
		
		public function update_comment($admin_id,$commenttype,$adminmess,$id){
			
			$date_time = date("F j, Y, g:i a");
			
			$update = $this->con()->query("update tbl_message set update_admin = '$admin_id', comment_type='$commenttype', comment='$adminmess', up_date='$date_time' where id = '$id'");
			return $update;
		
		}	
		
		//'select post_id count(id) from tbl_message group by post_id';
	}
?>