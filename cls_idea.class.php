<?php
	class cls_idea{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		public function ideapost($customer_id,$title,$subject,$description,$file){
			
			$date_time = date("F j, Y, g:i a");
			
			
            $result = $this->con()->query("	insert into tbl_message (count_message, post_id, title, subject, description, upfile,date_time,status) values ('1', '$customer_id','$title', '$subject', '$description', '$file', '$date_time','Pending')");
			return $result;
		}
		
	}
?>