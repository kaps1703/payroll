<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Damage extends CI_Controller 
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
	 
		$data['damage']=$this->db->query("select * from damage")->result_array();
		 $this->load->view('admin/damage',$data);		
	}

	public function save()
	{
		 extract($_POST);
      $data=array(
         "emp_id"=>$employee,
         "damage_date"=>$damage_date,
         "amount"=>$amount,
         "damage_particulars"=>$damage_parti,
         "wrokman_show"=>$workman,
         "name_per"=>$name_person,
         "no_of_insta"=>$installments,
         "remark"=>$remarks
      );

      $this->db->insert('damage',$data);
	 
		
	redirect(base_url().'admin/Damage');
	}


	
}//End of Controller Login
?>