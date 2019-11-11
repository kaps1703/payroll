<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class change_password extends CI_Controller 
{
    public function __construct()
    {
		parent::__construct();
		//$this->load->helper('lang_translate_helper');
		
		//$this->load->helper('session_check_helper');
		//$this->output->enable_profiler(TRUE);
		$this->load->helper('cookie');
		//session_check();
		//$this->load->library('session'); 
		 $this->load->helper(array('form','url'));
		 $this->load->helper('url_helper');
        $this->load->library('form_validation');
		$this->load->library('encrypt');
		//$this->load->library('ReportingLibrary');
		$this->load->library('session');
		
		$this->adminmodel->validate_login();
			
		/*if($this->session->userdata('adminid'))
		{
		
		}	
		*/
    }
	
	public function index()
	{
		$this->load->view('admin/admin_password_change');
	}
	
	public function submitnewpassword()
	{
		//echo '<pre>'; print_r($_POST); die;
		$adminid = $this->session->userdata('adminid');
			//echo $adminid; die;
			$this->load->helper('url');
			$old_pass= $_POST['old_pass'];
			$old_pass_md = md5($old_pass);
			$new_pass= $_POST['new_pass'];
			//echo $old_pass; die;
			$q = $this->db->query("SELECT * FROM `user` WHERE `user_id` = '".$adminid."' ");
			//echo $this->last_query();die;
			if ($q->num_rows > 0) 
			{
				$r = $q->result();
				$user=$r[0];
				//echo $user->user_password; die;
				if ($user->user_password == $old_pass_md)
				{
					//echo $adminid;die;
					$this->db->where('user_id', $user->user_id);
			      $this->db->update('user',array('user_password'=>MD5($new_pass))); 
					$this->session->unset_userdata('adminid',"");
		$this->session->set_flashdata('admin_success','Your Password changed successfully.');
		 redirect(base_url().'admin/change_password');
						
				}
				else
				{
					$error = "Error";
					$this->load->view('admin/admin_password_change',array('error'=>$error));
				}
				
			}
	}
	
	  public function chekpassword()
		{ 
			$adminid = $this->session->userdata('adminid');
			//echo $adminid; die;
			$this->load->helper('url');
			$old_pass= $_POST['old_pass'];
			$old_pass_md = md5($old_pass);
			//echo $old_pass; die;
			$q = $this->db->query("SELECT * FROM `user` WHERE `user_id` = '".$adminid."' ");
			//echo $this->last_query();die;
			if ($q->num_rows > 0) 
			{
				$r = $q->result();
				$user=$r[0];
				//echo $user->user_password; die;
				if ($user->user_password == $old_pass_md)
				{
					echo "present"; die;
				}
				else 
				{
					echo "notpresent"; die;
				}
				
			}
		
		} 
	
	
	
}//End of Controller Login
?>