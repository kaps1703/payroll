<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
	}
	public function signinsuccess()
	{
		$this->load->view('admin/pages/welcome');
	}
	
	public function checklogin()
	{
			extract($_POST);
		
			$data=$this->db->get_where("user",array("user_login_id"=>$userid,"user_password"=>$password,"status"=>'Active'))->row_array();
			
			  if(count($data)==0)
		  		{
				
			  		$this->session->set_flashdata('user','Incorrect credentials.');
			 		redirect(base_url().'admin');
				}
				else
				{
				
					 $role_id=$data['role_id'];
					 $role_nameArr = $this->db->query("select * from role_master where role_id='".$role_id."'")->result_array();
					 $this->session->set_userdata('Role_name',$role_nameArr[0]['role_name']);
					
					 $role_data=$this->db->query("select permission_master.permission 
												 from role_permission,permission_master
												 where permission_master.permission_id=role_permission.permission_id
												 and role_permission.role_id='$role_id'")->result_array();
												 
						
						$role_array[] = array();
						foreach($role_data as $role_row)
						{
							$role_array[]=strtolower($role_row['permission']);
						}

						
					//echo '<pre>';print_r($role_array);die;
					   $this->session->set_userdata('adminid',$data['user_id']);
					   $this->session->set_userdata('adminusername',$data['user_name']);
					   $this->session->set_userdata('adminuserid',$data['user_login_id']);
					 
					   $this->session->set_userdata('tabs_allowed',$role_array);
						
						$this->load->model('adminmodel'); 
						
						$login_history = $this->adminmodel->add_login_history($data['user_id']);
						//echo $login_history;die;
						$this->session->set_userdata('user_history_id',$login_history);
					    
					    $this->session->set_userdata('adminrole',$data['role_id']);
				//	    $this->session->set_userdata('controller_allowed',$data['controller_allowed']);
					 //  $this->session->set_userdata("secret_key",md5($this->session->userdata("adminid").secret_key));
					  
		               redirect(base_url().'home');
					
				}
	}
	public function signout()
	{
		$this->session->unset_userdata('adminid',"");
		$this->session->unset_userdata('adminusername',"");
		$this->session->unset_userdata('adminuserid',"");
			$this->session->unset_userdata('tabs_allowed',"");
			$this->session->set_flashdata('user','Your logged out successfully.');
	
		 redirect(base_url().'admin/pages/login');
	}	
	public function forget_password()
	{
		
		$this->load->view('admin/pages/forget_password');
		
	}
	public function sendemail()
	{

		extract($_POST);

		 $data=$this->db->query("select * from user where email='$email'")->result_array(); 

		 $id=$data[0]['user_login_id'];
		 $password=$data[0]['user_password'];
       
        $mail="User ID : $id\n\nPassword: $password";

		    $this->email->from('humbad972@gmail.com');
                $this->email->to('humbad972@gmail.com');               
                $this->email->subject('Forget Password');
                $this->email->message($mail); 
                $this->email->send();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */