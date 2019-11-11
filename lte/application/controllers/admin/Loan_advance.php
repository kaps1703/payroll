<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Loan_advance extends CI_Controller 
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
	 $data1=$this->db->query("select * from c_company_reg")->result_array();
		$this->load->view('admin/loan_advance',array('data1'=>$data1));	
	}

	public function save()
	{
		 extract($_POST);
      $data=array(
         "emp_id"=>$employee,
         "advance_date"=>$advance_date,
         "amount"=>$amount,
         "purpose"=>$purpose,
         "no_of_insta"=>$installments
      
      );

      $this->db->insert('loan_advance',$data);
	 
		
	redirect(base_url().'admin/Loan_advance');
	}

	public function edit($id)
	{
        $data1=$this->db->query("select * from c_company_reg")->result_array();
		$data['abc']=$this->db->query("select * from loan_advance left join employee on employee.emp_id=loan_advance.emp_id  where md5(adv_id)='$id'")->result_array();

		// $data=$this->db->query("select * from loan_advance where md5(adv_id)='$id'")->result_array();
		 $this->load->view('admin/edit_loan_advance',$data);		
	}

	public function edit_save()
	{
		extract($_POST);	

	  	$data=array(

		 "emp_id"=>$employee,
         "advance_date"=>$advance_date,
         "amount"=>$amount,
         "purpose"=>$purpose,
         "no_of_insta"=>$installments
      
		);

	   $this->db->where('adv_id',$id);
	 $this->db->update('loan_advance',$data);
	
	redirect(base_url().'admin/Loan_advance/list');	
	}

	public function delete($id)
	{


		$data=$this->db->query("delete from loan_advance where md5(id)='$id'");
	

		redirect(base_url().'admin/Loan_advance');	
	}

    



	
}//End of Controller Login
?>