<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Add_basic_salary extends CI_Controller 
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
	 
		
		 $this->load->view('admin/add_basic_salary_employee');		
	}
    

     public function save()
	{
		 extract($_POST);
      $data=array(
         "dt_id"=>$designation_type,
          "d_id"=>$designation_name,
          "emp_id"=>$employee_name,
           "basic_sal"=>$basic_salary,
           "da"=>$da,
           "total"=>$total_basic,
           "city"=>$allowance,
           "other"=>$deduction,
           "lwf"=>$lwf_value,
           "hra"=>$hra_value,
           "gross_salary"=>$gross_salary,
           "pf_value"=>$pf_value,
           "esic_value"=>$esic_value,
           "prof_tax"=>$profession_tax,
           "total_dedu"=>$total_deduction,
           "total_net"=>$net_pay,
           "ctc"=>$ctc_per_date,
           "from_date"=>$from_date,
           "to_date"=>$to_date


      );

      $this->db->insert('add_basic_sal_emp',$data);
	 
		
	redirect(base_url().'admin/Add_basic_salary');
	}

  public function list()
  {
   $data['bas_salary']=$this->db->query("select * from add_basic_sal_emp")->result_array();
    
     $this->load->view('admin/add_basic_salary_emp_list',$data);    
  }

	
}//End of Controller Login
?>