<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {
	
    function __construct() {
        parent::__construct();
        $this->load->model('admin/m_login','',TRUE);
        $this->load->helper('url');
        $this->load->library(array('form_validation','session'));
    }
 
    function index() {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['name_admin'];
            $data['id'] = $session_data['id_admin'];          
            $this->load->view('admin/error', $data);
            
        } else {
        //If no session, redirect to login page
            redirect('admin/c_login', 'refresh');
        }
    }
 
    function logout() {
         //remove all session data
         $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         redirect(base_url('c_login'), 'refresh');
     }
 
}
/* End of file c_home.php */
/* Location: ./application/controllers/c_home.php */
