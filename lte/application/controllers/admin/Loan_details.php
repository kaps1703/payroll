<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Loan_details extends CI_Controller 
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
	 
		
		 $this->load->view('admin/loan_details');		
	}
    

    public function save()
	{
		 extract($_POST);
      $data=array(
         "emp_id"=>$employee,
         "loan_date"=>$loan_taken_date,
         "purpose"=>$purpose,
         "amount"=>$amount,
         "interest_rate"=>$interest_rate,
         "months"=>$no_months,
         "emi"=>$emi,
         "inte_rate_year"=>$interest_rate_yearly,
         "inte_rate_month"=>$interest_rate_monthly,
         "year_inte_amount"=>$amount_yearly,
         "total_inte_amount"=>$total_amount,
         "remarks"=>$remarks
      );

      $this->db->insert('loan_details',$data);
	 
		
	redirect(base_url().'admin/Loan_details');
	}
    

    public function list()
	{
	 $data['loan_details']=$this->db->query("select * from loan_details")->result_array();
		
		 $this->load->view('admin/loan_details_list',$data);		
	}
	
}//End of Controller Login
?>