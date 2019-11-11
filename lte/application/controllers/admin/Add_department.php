<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Add_department extends CI_Controller 
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
	 
		
		 $this->load->view('admin/add_department');		
	}


	
}//End of Controller Login
?>