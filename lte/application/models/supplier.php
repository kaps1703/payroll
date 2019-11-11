<?php 
class user extends CI_Model
{ 
	function __construct()
   {
        parent::__construct();
   }
    
	
	// this is the function for submit data of vendor on date 14 nov 2013
	public function userSubmit($data)
	{
	     //echo '<pre>'; print_r($data);die;
		 $qryaddclass = $this->db->query("INSERT INTO `user`(`role_id`, `status`, `user_name`, `user_login_id`, `user_password`, `date_add`, `date_upd`) VALUES ('".$data[1]."','".$data[4]."','".$data[0]."','".$data[2]."','".md5($data[3])."','".date('Y-m-d H:i:s')."','".date('Y-m-d H:i:s')."')");
	}
	
	// this is the function for display listing of the vendor 
	
	public function userlisting()
	{
        $querylist = $this->db->query("select c.*,p.* from user p inner join role_master c on p.role_id = c.role_id");
		return $querylist->result_array();
     }
	
	
	 
	 // this is the function for add ven dor address done by samidha on date 19 nov 2013
	 
	 public function useredit($id)
	 {
	     $querylist = $this->db->query("select c.*,p.* from user p inner join role_master c on p.role_id = c.role_id WHERE p.user_id = '".$id."'");
		 return $querylist->result_array();
	 }
	 
   
	 public function userSubmitUpdate($data)
	 {
	 	// echo '<pre>'; print_r($data);die;
		$qryaddclass = $this->db->query("UPDATE `user` SET `role_id`='".$data[1]."',`status`='".$data[3]."',`user_name`='".$data[0]."',`user_login_id`='".$data[2]."',`date_upd`='".date('Y-m-d H:i:s')."' WHERE `user_id`='".$data[4]."'");
		
		
		
	//echo $this->db->last_query();die;
	 }
	 
	 public function delete($id)
	 {
	    $querylist = $this->db->query("DELETE FROM `user` WHERE `user_id`='".$id."'");
	 }
	 
	
}