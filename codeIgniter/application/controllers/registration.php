<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class registration extends CI_Controller {
	
   public function __construct() {
        parent::__construct();
        $this->load->model('registration_model');        
	}
 
   public function index() 
   {
	   $data['groups'] = $this->registration_model->getProfile();
	   $data['religion'] = $this->registration_model->getReligion();
	   $data['mtongue'] = $this->registration_model->getMtongue();
	   $data['living'] = $this->registration_model->getLiving();

            //$data['title'] = "Dashboard";
            //$this->load->helper(array('form','html'));                 
	  $this->load->library('form_validation');
	  $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	  // field name, error message, validation rules
	  $this->form_validation->set_rules('fullname','FullName','trim|required|min_length[4]|xss_clean');
	  $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[user_registration.email]');
	  $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
      $this->form_validation->set_rules('profile','profile','trim|required|callback_profile_check');
	  $this->form_validation->set_rules('gender','gender','trim|required');
	  $this->form_validation->set_rules('date','date','trim|required|date');
      $this->form_validation->set_rules('religion','religion','trim|required|callback_religion_check');
	  $this->form_validation->set_rules('mother-tongue','mother-tongue','trim|required|callback_tongue_check');
	  $this->form_validation->set_rules('living-in','living-in','trim|required|callback_living_check');
      $this->form_validation->set_rules('mobile','mobile no.','trim|required|numeric|min_length[7]');
	  
	  if($this->form_validation->run() == FALSE)
	  {
		$this->load->view('registration',$data); 		 
	  }
	  else
	  {	    
	   $this->registration_model->add_user();	   
	  }
   
   
   }
   
   public function profile_check()
    {
		if($this->input->post('profile') === '0')  
		{
            $this->form_validation->set_message('profile_check', 'Please choose your profile.');
            return FALSE;
        }
        else 
        {
            return TRUE;
        }
    }
    
    public function religion_check()
    {
		if($this->input->post('religion') === '0')  
		{
            $this->form_validation->set_message('religion_check', 'Please choose your religion.');
            return FALSE;
        }
        else 
        {
            return TRUE;
        }
    }
    
     public function tongue_check()
    {
		if($this->input->post('mother-tongue') === '0')  
		{
            $this->form_validation->set_message('tongue_check', 'Please choose your mother tongue.');
            return FALSE;
        }
        else 
        {
            return TRUE;
        }
    }
    
    public function living_check()
    {
		if($this->input->post('living-in') === '0')  
		{
            $this->form_validation->set_message('living_check', 'Please choose your Country where you live.');
            return FALSE;
        }
        else 
        {
            return TRUE;
        }
    }
   
   public function numeric_wcomma($str)
   {
		return preg_match('/^[0-9,]+$/', $str);
   }
   
   

}
/* End of file c_home.php */
/* Location: ./application/controllers/c_home.php */
