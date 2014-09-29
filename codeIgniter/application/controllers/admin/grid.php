<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grid extends CI_Controller {
	
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
            $data['title'] = "Grid";
            $this->load->view('admin/header', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('admin/leftsidebar', $data);            
            $this->load->view('admin/grid', $data);
            $this->load->view('admin/footer', $data);
        } else {
        //If no session, redirect to login page
            redirect('admin/c_login', 'refresh');
        }
    }
 
   
}
/* End of file c_home.php */
/* Location: ./application/controllers/c_home.php */
