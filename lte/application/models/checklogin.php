<?php 
class Checklogin extends CI_Model
{ 
	function __construct()
   {
        parent::__construct();
   }
    
	
	public function validate()
	{
		if($this->session->userdata('userid')=='')
		{
			redirect(base_url().'admin');
		}
		else
		{
			return true;
		}
	} 
	
}