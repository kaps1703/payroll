<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Fine extends CI_Controller 
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
	 
		$data['fine']=$this->db->query("select * from fine")->result_array();
		 $this->load->view('admin/fine',$data);		
	}
    

    public function save()
	{
		 extract($_POST);
      $data=array(
         "emp_id"=>$employee,
         "final_date"=>$final_date,
         "act"=>$act,
         "amount"=>$amount,
         "wrokman_show"=>$workman,
         "name_per"=>$name_person,   
         "remark"=>$remarks
      );

      $this->db->insert('fine',$data);
	 
		
	redirect(base_url().'admin/Fine');
	}

	
}//End of Controller Login
?>