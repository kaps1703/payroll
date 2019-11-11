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
	     // echo '<pre>'; print_r($data);die;
		 $qryaddclass = $this->db->query("INSERT INTO `user`(`email`,`role_id`, `status`, `user_name`, `user_login_id`, `user_password`, `date_add`, `date_upd`) VALUES ('".$data[6]."','".$data[1]."','".$data[4]."','".$data[0]."','".$data[2]."','".$data[3]."','".date('Y-m-d H:i:s')."','".date('Y-m-d H:i:s')."')");
	}
	
	// this is the function for display listing of the vendor 
	
	public function userlisting()
	{
        $querylist = $this->db->query("select user.email,role_master.role_name,role_master.role_id,user.user_name,user.user_id,role_master.role_name,user.user_password,user.user_login_id from user left join role_master on user.role_id = role_master.role_id");
		return $querylist->result_array();
     }
	
	 // this is the function for add ven dor address done by samidha on date 19 nov 2013
	 
	 public function useredit($id)
	 {
	     $querylist = $this->db->query("select user.email,role_master.role_name,role_master.role_id,user.status,user.user_name,user.user_id,role_master.role_name,user.user_password,user.user_login_id from user left join role_master on user.role_id = role_master.role_id WHERE md5(user.user_id) = '".$id."'");
		 return $querylist->result_array();
	 }
	 
       function get_type_name_by_id($type, $type_id = '', $field = 'contact_person') {

   
        return $this->db->get_where($type, array($type . '_id' => $type_id))->row()->$field;
    }
      function  get_type_name_cat_id($type, $type_id = '', $field = 'name')
      {
      	 return $this->db->get_where($type, array('cat_id' => $type_id))->row()->$field;
      }

	 public function userSubmitUpdate($data)
	 {
	 	// echo '<pre>'; print_r($data);die;
		$qryaddclass = $this->db->query("UPDATE `user` SET `role_id`='".$data[1]."',`status`='".$data[3]."',`user_name`='".$data[0]."',`user_login_id`='".$data[2]."',`date_upd`='".date('Y-m-d H:i:s')."' WHERE md5(user_id)='".$data[4]."'");
		
		
		
	//echo $this->db->last_query();die;
	 }
	 
	 public function delete($id)
	 {
	    $querylist = $this->db->query("DELETE FROM `user` WHERE md5(user_id)='".$id."'");
	 }
	 
	
}