<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller {
	
   public function __construct() {
        parent::__construct();
	}
 
   public function index() 
   {
	   $data['test']  = "Comming Soon";
	   $this->load->view('test',$data); 		 
   }
   
 }
