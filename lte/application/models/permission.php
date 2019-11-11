<?php 
class permission extends CI_Model
{ 
	function __construct()
   {
        parent::__construct();
   }
    
	
	//Function to add school class.
	function permissionSubmit($data)
	{
		//echo '<pre>';print_r($data);die;
		
		$qryaddclass = $this->db->query("INSERT INTO `permission_master`(`permission`) VALUES ('".$data[0]."')");
		
	 }
	 
	 function getPermissionList()
	 {
	  $querypermission = $this->db->query("SELECT * FROM `permission_master`");
	  return $querypermission->result_array();
	 }
	 
	 function getpermissioneditdata($id)
	 {
	 	 $querypermissionedit = $this->db->query("SELECT * FROM `permission_master` where permission_id = '".$id."' ");
	     return $querypermissionedit->result_array();
	 }
	 
	 function permissionUpdate($data)
	 {
	 //echo '<pre>';print_r($data);die;
		$qryaddclass = $this->db->query("UPDATE `permission_master` SET `permission`='".$data[0]."' WHERE `permission_id`='".$data[1]."'");
	 }
	 
	 function deletepermission($id)
	 {
	 	 $querypermissiondelete = $this->db->query("DELETE FROM `permission_master` WHERE `permission_id` = '".$id."'");
	 }
	
	
	function roleSubmit($data)
	{
	// echo '<pre>';print_r($data);die;
		$qryaddclass = $this->db->query("INSERT INTO `role_master`(`role_name`, `role_desc`, `role_status`) VALUES ('".$data[0]."','".$data[1]."','".$data[2]."')");
	}
	
	
	function rolelist()
	{
	// echo '<pre>';print_r($data);die;
		$query = $this->db->query("select r.* from role_master as r");
		 return $query->result_array();
	}
	
	function getroleListedit($id)
	{
	 $query = $this->db->query("select * from role_master where role_id = '".$id."'");
	 return $query->result_array();
	}
	
	function rolePermissionSubmit($value,$role_id)
	{
		$qryaddclass = $this->db->query("INSERT INTO `role_permission`(`role_id`, `permission_id`) VALUES ('".$role_id."','".$value."')");
	}
	
	function rolepermissionlist()
	{
		$query = $this->db->query("select c.*,p.*,s.* from role_permission c inner join role_master s on s.role_id = c.role_id inner join permission_master p on p.permission_id = c.permission_id group by c.role_id");
	 return $query->result_array();
	}
	
	function deleterole_permission($id)	
	{
	  $querypermissiondelete = $this->db->query("DELETE FROM `role_permission` WHERE md5(role_permission_id) = '".$id."'");
	}
	
	function deleterole($id)	
	{
	  $querypermissiondelete = $this->db->query("DELETE FROM `role_master` WHERE md5(role_id) = '".$id."'");
	}
	
	function permission_role_edit_list($id)
	{
	$query = $this->db->query("select c.*,p.*,s.* from role_permission c inner join role_master s on s.role_id = c.role_id inner join permission_master p on p.permission_id = c.permission_id  WHERE md5(c.role_id) = '".$id."' group by c.permission_id");
	 return $query->result_array();
	}
	
	function rolePermissionUpdate($data)
	{
		
		$qryaddclass = $this->db->query("UPDATE `role_permission` SET `role_id`='".$data[1]."',`permission_id`='".$data[0]."' WHERE `role_permission_id`='".$data[2]."'");
	}
	
	function roleSubmitupdate($data)
	{
		//echo '<pre>';print_r($data);die;
		$qryaddclass = $this->db->query("UPDATE `role_master` SET `role_name`='".$data[0]."',`role_desc`='".$data[1]."',`role_status`='".$data[2]."' WHERE `role_id`='".$data[3]."'");
	}
	
	// this is the code for get permission list for role
	public function getAllPermsForRole($role_id)
	{
	     $query = $this->db->query("select permission from role_permission c inner join permission_master p on p.permission_id = c.permission_id where role_id = '".$role_id."'");
	     return $query->result_array(); 
	}
	public function deleteFromBmsRolePermission($role_id)
	{
	    $querypermissiondelete = $this->db->query("DELETE FROM `role_permission` WHERE `role_id` = '".$role_id."'");
	}
}