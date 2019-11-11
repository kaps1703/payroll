<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class UserController extends CI_Controller 
{
    public function __construct()
    {
		parent::__construct();	
		$this->load->helper('cookie');	
		$this->load->helper(array('form','url'));
		$this->load->helper('url_helper'); 
		$this->load->library('session');	
		$this->adminmodel->validate_login();
		
    }
	
	public function index()
	{
	 
		 $this->load->model('permission'); 
	     $data2 = $this->permission->rolelist();
	  
		 $this->load->view('admin/company_registration',array('data2'=>$data2));		
	}


	
}//End of Controller Login
?>