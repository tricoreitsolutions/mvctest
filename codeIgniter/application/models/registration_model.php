<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class registration_model extends CI_Model 
	{
	 
		 public function __construct()
		 {
		  parent::__construct();
		 } 
		 
		 public function add_user()
		 {		  
		  $data=array(
			'email'=>$this->input->post('email'),
			'password'=>md5($this->input->post('password')),
		    'profile'=>$this->input->post('profile'),
		    'fullname'=>$this->input->post('fullname'),
		    'gender'=>$this->input->post('gender'),
		    'dob'=>$this->input->post('date'),
		    'religion'=>$this->input->post('religion'),
		    'mtongue'=>$this->input->post('mother-tongue'),
		    'livingin'=>$this->input->post('living-in'),
		    'mobileno'=>$this->input->post('mobile')
		  );
		  
		  $this->db->insert('user_registration',$data);		 
		 }
		 
		 function getProfile()
		{
		$query = $this->db->query('select * from profile') or die(mysql_error());
		return $query->result();
		}
		
		function getReligion()
		{
		$query = $this->db->query('select * from religion') or die(mysql_error());
		return $query->result();
		}
		
		function getMtongue()
		{
		$query = $this->db->query('select * from mothertongue') or die(mysql_error());
		return $query->result();
		}
		
		function getLiving()
		{
		$query = $this->db->query('select * from living') or die(mysql_error());
		return $query->result();
		}
			 
	}
?>
