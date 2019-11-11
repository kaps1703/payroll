<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Add_monthly_salary extends CI_Controller 
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
	 
		
		 $this->load->view('admin/add_monthly_salary');		
	}

	public function save()
	{
		 extract($_POST);
      $data=array(
          "salary_date"=>$salary_date,
          "c_id"=>$company
      );

      $this->db->insert('add_monthly_sal',$data);
	 
		
	redirect(base_url().'admin/Add_monthly_salary');
	}


	
}//End of Controller Login
?>