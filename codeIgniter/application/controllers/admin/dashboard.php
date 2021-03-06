<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
    function __construct() {
        parent::__construct();
		$this->load->model('admin/m_login','',TRUE);
       // $this->load->model(array('admin/m_login','admin/zip_model','admin/designation_model','admin/contact_model','admin/city_model'));
        $this->load->helper('url');
        $this->load->library(array('form_validation','session'));
    }
 
    function index() {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
            $data['title'] = "Dashboard";
     //       $data['count_contact'] = $this->contact_model->count_contact();
        //    $data['count_city'] = $this->city_model->count_city();
        //    $data['count_designation'] = $this->designation_model->count_designation();
         //   $data['count_zipcodes'] = $this->zip_model->count_zipcodes();         
            $this->load->view('admin/header', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('admin/leftsidebar', $data);            
            $this->load->view('admin/dashboard', $data);
            $this->load->view('admin/footer', $data);
        } else {
        //If no session, redirect to login page
            redirect('admin/c_login', 'refresh');
        }
    }
 
 
}
/* End of file c_home.php */
/* Location: ./application/controllers/c_home.php */
