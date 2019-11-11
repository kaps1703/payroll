<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Allot_employee extends CI_Controller 
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
        $data2=$this->db->query("select * from designationtype")->result_array();
        $data3=$this->db->query("select * from designation")->result_array();
        $data4=$this->db->query("select * from employee")->result_array();
         $data5=$this->db->query("select * from department")->result_array();
		 $this->load->view('admin/allot_employee',array('data1'=>$data1,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4,'data5'=>$data5));		
	}

	public function save()
	{
	
      extract($_POST);
      $data=array(
      	"c_id"=>$company,
      	"dt_id"=>$designation_type,
      	"d_id"=>$designation,
      	"e_id"=>$employee,
      	"dept_id"=>$department,
      	"status"=>$status_emp,
      	"allot_date_from"=>$allot_date_from,
        "allot_date_to"=>$allot_date_to
      );

      $this->db->insert('allot_employee',$data);
	 
		
		redirect(base_url().'admin/Allot_employee');

	}

    public function list()
	{
	 $data['allot_employee']=$this->db->query("select * from allot_employee")->result_array();
		 
		 $this->load->view('admin/allot_employee_list',$data);		
	}

	public function edit($id)
	{

        $data1=$this->db->query("select * from c_company_reg")->result_array();
        $data2=$this->db->query("select * from designationtype")->result_array();
        $data3=$this->db->query("select * from designation")->result_array();
        $data4=$this->db->query("select * from employee")->result_array();
        $data5=$this->db->query("select * from department")->result_array();
		$data=$this->db->query("select * from allot_employee left join c_company_reg on c_company_reg.c_id=allot_employee.c_id left join designationtype on designationtype.dt_id=allot_employee.dt_id left join designation on designation.d_id=allot_employee.d_id left join employee on employee.emp_id=allot_employee.e_id left join department on department.dept_id=allot_employee.dept_id where md5(allot_id)='$id'")->result_array();


		 $this->load->view('admin/edit_allot_employee',array('data'=>$data,'data1'=>$data1,'data2'=>$data2, 'data3'=>$data3,'data4'=>$data4,'data5'=>$data5));		
	}

	public function edit_save()
	{
		extract($_POST);	
		$data=array(
      	"c_id"=>$company,
      	"dt_id"=>$designation_type,
      	"d_id"=>$designation,
      	"e_id"=>$employee,
      	"dept_id"=>$department,
      	"status"=>$status_emp,
      	"allot_date_from"=>$allot_date_from,
        "allot_date_to"=>$allot_date_to
      );

	   $this->db->where('allot_id',$id);
	 $this->db->update('allot_employee',$data);
	
	redirect(base_url().'admin/Allot_employee/list');	
	}

		public function delete($id)
	{


		$data=$this->db->query("delete from allot_employee where md5(id)='$id'");
	
		redirect(base_url().'admin/Allot_employee');	
	}
	


	
}//End of Controller Login
?>