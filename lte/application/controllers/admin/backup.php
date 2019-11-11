<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backup extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct()
	{
		parent::__construct();
		$this->adminmodel->validate_login();
	}
	
	public function index()
	{
$this->load->dbutil();		
		$prefs = array(
                'tables'      => array(),  // Array of tables to backup.
                'ignore'      => array(),           // List of tables to omit from the backup
                'format'      => 'txt',             // gzip, zip, txt
                'filename'    => 'mybackup.sql',    // File name - NEEDED ONLY WITH ZIP FILES
                'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file
                'add_insert'  => TRUE,              // Whether to add INSERT data to backup file
                'newline'     => "\n"               // Newline character used in backup file
              );

$backup =$this->dbutil->backup($prefs); 
		// Load the DB utility class


// Backup your entire database and assign it to a variable
//$backup =& $this->dbutil->backup();

// Load the file helper and write the file to your server
$today = date("Y_M_d");   
$str="backup_mould_".$today.".sql";

$this->load->helper('file');
write_file($str, $backup);

// Load the download helper and send the file to your desktop
$this->load->helper('download');
force_download($str, $backup); 
	}
	
	
	
	public function restore()
	{
		  
			$this->load->view('admin/pages/upload_backup');		   
			 
	}
	
	public function restore_save()
	{
		extract($_FILES);
		
		  set_time_limit(0); // For running the script with no time limit
		  $sql_statements = file_get_contents ($_FILES['userfile']['name']);
		  $arr_sql = preg_split('/;[\n\r]+/',$sql_statements); // Parsing the file content by preg_split
		  reset($arr_sql);
		  $error = '';
		  while (list($key,$value)=each($arr_sql)) {
		  if (trim($value)!="") {
		  $this->db->query($value);
		  
		  }
		  }
		
		echo "Backup restored successfully";	
			
			 
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */