<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Employee_reg extends CI_Controller 
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
	 
		
		 $this->load->view('admin/employee_reg');		
	}
	

	public function save()
	{
		extract($_POST);
		$data=array(

			//	"emp_unique_id"=>$null,
				"cc_id"=>$companysearch,
				"oc_id"=>$ownercompany,
				"ag_id"=>$agreement,
				"e_id"=>$employee_id,
				"designation"=>$designation,
				"branch"=>$branch,
				"emp_name"=>$employee_name,
				"emp_father_name"=>$employee_father_name,
				"emp_mother_name"=>$employee_mother_name,
				"emp_temp_address"=>$employee_temp_add,
				"emp_temp_state"=>$temp_state,
				"emp_perm_address"=>$employee_perm_add,
				"emp_state"=>$state,
				"emp_contact"=>$mobile,
				"emp_alter_contact"=>$alter_mobile,
				"emp_emailid"=>$email,
				"emp_gender"=>$gender,
				"emp_dob"=>$date_of_birth,
				"emp_doj"=>$joining_date,
				"emp_reside_proof"=>$residential_proof,
				"emp_id_proof"=>$id_proof,
				"emp_birth_proof"=>$birth_proof,
				"emp_education"=>$education,
				"emp_school"=>$college_name,
				"emp_maritial_status"=>$married,
				"emp_nominee_name"=>$nominee_name,
				"emp_relation_nominee"=>$nominee_relation,
				"emp_nom_dob"=>$nominee_date,
				"emp_ref_name_one"=>$refer_per_name_one,
				"emp_ref_addre_one"=>$ref_per_add_one,
				"emp_ref_conta_one"=>$refer_per_mobile_one,
				"emp_ref_name_two"=>$refer_per_name_two,
				"emp_ref_addre_two"=>$ref_per_add_two,
				"emp_ref_conta_two"=>$refer_per_mobile_two,
				"emp_referd_name"=>$refer_by_name,
				"emp_pcc_date"=>$pcc_date,
				"emp_remark"=>$refer_remark,
				"emp_bank_name"=>$refer_bank_name,
				"emp_bank_account"=>$refer_bank_number,
				"emp_pan_no"=>$refer_pan_no,
				"emp_ifsc_no"=>$refer_ifsc_number,
				"emp_uan"=>$refer_uan_number,
				"emp_pf_acount"=>$refer_pf_number,
				"emp_esic_no"=>$refer_esic_number,
				"emp_wcp_no"=>$refer_wcp_number
		);

		$this->db->insert('employee',$data);
	 
		
		redirect(base_url().'admin/Employee_reg');		
	}
	public function list()
	{
	 $data['employee']=$this->db->query("select * from employee")->result_array();
		
		 $this->load->view('admin/employee_reg_list',$data);		
	}
    
    public function edit($id)
	{


		$data=$this->db->query("select * from employee where md5(emp_id)='$id'")->result_array();
		 $this->load->view('admin/edit_employee',array('data'=>$data));		
	}

	public function edit_save()
	{
		extract($_POST);	

	  	$data=array(

			//	"emp_unique_id"=>$null,
				"cc_id"=>$companysearch,
				"oc_id"=>$ownercompany,
				"ag_id"=>$agreement,
				"e_id"=>$employee_id,
				"designation"=>$designation,
				"branch"=>$branch,
				"emp_name"=>$employee_name,
				"emp_father_name"=>$employee_father_name,
				"emp_mother_name"=>$employee_mother_name,
				"emp_temp_address"=>$employee_temp_add,
				"emp_temp_state"=>$temp_state,
				"emp_perm_address"=>$employee_perm_add,
				"emp_state"=>$state,
				"emp_contact"=>$mobile,
				"emp_alter_contact"=>$alter_mobile,
				"emp_emailid"=>$email,
				"emp_gender"=>$gender,
				"emp_dob"=>$date_of_birth,
				"emp_doj"=>$joining_date,
				"emp_reside_proof"=>$residential_proof,
				"emp_id_proof"=>$id_proof,
				"emp_birth_proof"=>$birth_proof,
				"emp_education"=>$education,
				"emp_school"=>$college_name,
				"emp_maritial_status"=>$married,
				"emp_nominee_name"=>$nominee_name,
				"emp_relation_nominee"=>$nominee_relation,
				"emp_nom_dob"=>$nominee_date,
				"emp_ref_name_one"=>$refer_per_name_one,
				"emp_ref_addre_one"=>$ref_per_add_one,
				"emp_ref_conta_one"=>$refer_per_mobile_one,
				"emp_ref_name_two"=>$refer_per_name_two,
				"emp_ref_addre_two"=>$ref_per_add_two,
				"emp_ref_conta_two"=>$refer_per_mobile_two,
				"emp_referd_name"=>$refer_by_name,
				"emp_pcc_date"=>$pcc_date,
				"emp_remark"=>$refer_remark,
				"emp_bank_name"=>$refer_bank_name,
				"emp_bank_account"=>$refer_bank_number,
				"emp_pan_no"=>$refer_pan_no,
				"emp_ifsc_no"=>$refer_ifsc_number,
				"emp_uan"=>$refer_uan_number,
				"emp_pf_acount"=>$refer_pf_number,
				"emp_esic_no"=>$refer_esic_number,
				"emp_wcp_no"=>$refer_wcp_number
		);

	   $this->db->where('emp_id',$id);
	 $this->db->update('employee',$data);
	
	redirect(base_url().'admin/Employee_reg/list');	
	}

		public function delete($id)
	{


		$data=$this->db->query("delete from employee where md5(id)='$id'");
	

		redirect(base_url().'admin/Employee_reg');	
	}



	
}//End of Controller Login
?>