<?php
class adminmodel extends CI_Model
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
				$this->load->helper('cookie');
		//session_check();
		//$this->load->library('session'); 
		 $this->load->helper(array('form','url'));
		 $this->load->helper('url_helper');
        $this->load->library('form_validation');
		$this->load->library('encrypt');
		//$this->load->library('ReportingLibrary');
		$this->load->library('session');
    }
	function validate_login()
	{
		if($this->session->userdata("adminid")=="")
		{
					redirect(base_url().'admin/');
	    }
	    else
			{
			
	
			return true;
			/*
				if($controller_name!='home' || $controller_name!='welcome' )
				{
					$controller_allowed = $this->session->userdata('controller_allowed');
					$controller_allowed = explode(',',$controller_allowed);
					if(in_array($controller_name,$controller_allowed) || $controller_name!='home' || $controller_name!='welcome')
					{
							
					}
					else
					{
						$this->session->set_flashdata('adminflash','You are not authorized user...');	
				  		redirect(base_url()."admin_panel/");
					}
				}*/
			}
	}
	
	// this is the function for add login history of mars user
	
   public function add_login_history($user_id)
   {
	   $qryaddclass = $this->db->query("INSERT INTO `user_login_history`(`user_id`, `login_date`, `module_visited`, `actions_performed`) VALUES ('".$user_id."','".date("Y-m-d")."','','')");
	   return $this->db->insert_id();
   }
	
	// this is the function to update login history
	
	public function update_login_history($user_id,$module,$action)
	{
	    $qryaddclass = $this->db->query("UPDATE `user_login_history` SET `module_visited`='".$module."',`actions_performed`='".$action."' WHERE user_history_id ='".$user_id."'");
	}
	
	// this is the function to get history of the user
	
	public function gethistoryofuser($user_id)
	{
	    $queryProdedit = $this->db->query("select * from user_login_history where user_history_id='".$user_id."'");
    	return $queryProdedit->result_array();
	}

}
?>