<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Reports_index extends CI_Controller 
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
	 
		
		 $this->load->view('admin/reports_index');		
	}

	 public function save()
	{
		 extract($_POST);
      $data=array(
         "c_id"=>$company,
          "month"=>$month,
          "year"=>$year
      );

      $this->db->insert('report_index',$data);
	 
		
	redirect(base_url().'admin/Report_index');
	}


	
}//End of Controller Login
?>