<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {



	public function index()
	{

	

		date_default_timezone_set('Asia/kolkata');	
	
		if($this->session->userdata('adminid')!='')
		{
											  
			$this->load->view('admin/pages/home');
		}
		else
		{
			$this->load->view('admin/pages/login');
		}
		
	}
		
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */