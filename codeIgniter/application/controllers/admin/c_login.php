<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_login extends CI_Controller {
	 function __construct() 
	{
        parent::__construct();
        //load session and connect to database
			if (!$this->input->post('remember_me')) {
                $this->session->sess_expiration = 7200;
                $this->session->sess_expire_on_close = TRUE;
            }            
    }
    	
    function index() {
        $this->load->helper(array('form','html'));       
        $data['title'] = "Admin Login";
        $data['page_title'] = "Admin Login";
        $this->load->view('admin/header',$data);
        $this->load->view('admin/login_form',$data);
        //$this->load->view('admin/footer');        
    }
}
/* End of file c_login.php */
/* Location: ./application/controllers/c_login.php */
