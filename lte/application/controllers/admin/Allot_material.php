<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Allot_material extends CI_Controller 
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
        $data2=$this->db->query("select * from designation")->result_array();
        $data3=$this->db->query("select * from employee")->result_array();
        $data4=$this->db->query("select * from material")->result_array();
		 $this->load->view('admin/allot_material',array('data1'=>$data1,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4));		
	}
    

    public function save()
	{
		 extract($_POST);
      $data=array(
         "c_id"=>$company,
         "d_id"=>$designation_type,
         "emp_id"=>$employee,
         "mat_from_date"=>$mat_from_date,
         "mat_to_date"=>$mat_to_date,
         "m_id"=>$material,
         "mat_size"=>$size,
         "deduction_month"=>$deduction_month,
         "deduction_status"=>$deduction_status
      
      );

      $this->db->insert('allot_material',$data);
	 
		
	redirect(base_url().'admin/Allot_material');
	}

	public function list()
	{
	 $data['allot_material']=$this->db->query("select * from allot_material")->result_array();
		
		 $this->load->view('admin/allot_material_list',$data);		
	}
     public function edit($id)
	{
        $data1=$this->db->query("select * from c_company_reg")->result_array();
        $data2=$this->db->query("select * from designation")->result_array();
        $data3=$this->db->query("select * from employee")->result_array();
        $data4=$this->db->query("select * from material")->result_array();
		$data=$this->db->query("select * from allot_material left join c_company_reg on c_company_reg.c_id=allot_material.c_id left join designation on designation.d_id=allot_material.d_id left join employee on employee.emp_id=allot_material.emp_id left join material on material.m_id=allot_material.m_id where md5(mat_id)='$id'")->result_array();


		$data=$this->db->query("select * from allot_material where md5(mat_id)='$id'")->result_array();
		 $this->load->view('admin/edit_allot_material',array('data'=>$data,'data1'=>$data1,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4));		
	}


	public function edit_save()
	{
		extract($_POST);	
		$data=array(
         "c_id"=>$company,
         "d_id"=>$designation_type,
         "emp_id"=>$employee,
         "mat_from_date"=>$mat_from_date,
         "mat_to_date"=>$mat_to_date,
         "m_id"=>$material,
         "mat_size"=>$size,
         "deduction_month"=>$deduction_month,
         "deduction_status"=>$deduction_status
      
      );

	   $this->db->where('mat_id',$id);
	 $this->db->update('allot_material',$data);
	
	redirect(base_url().'admin/Allot_material/list');	
	}

		public function delete($id)
	{


		$data=$this->db->query("delete from allot_material where md5(id)='$id'");
	
		redirect(base_url().'admin/Allot_material');	
	}

	
}//End of Controller Login
?>