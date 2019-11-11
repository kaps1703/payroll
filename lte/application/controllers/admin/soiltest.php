<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Soiltest extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->adminmodel->validate_login();
	    $this->load->model('user');
		
	}
	public function index()
	{
	
		
	  	$data['soiltest']=$this->db->query("select * from soiltest order by id DESC")->result_array();	
	  
		
		$this->load->view('admin/pages/soiltest_list',$data);
		
	}
	
}




/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */