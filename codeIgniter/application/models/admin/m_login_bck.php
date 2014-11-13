<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  
class M_login extends CI_Model {
 
    function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }
 
    function login($username, $password) 
    {
        $this->db->select('id_admin, name_admin, password');
        $this->db->from('admin');
        $this->db->where('name_admin', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);
         
     
        $query = $this->db->get();
        if($query->num_rows() == 1) { 
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }
    
    function getprofile()
	{
			
		$query = $this->db->query('select * from admin where id_admin = 1 ') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();
	}
	
	public function edit_profile()
	{				  
		  
		   
		   if($this->input->post('cpassword') != '')
		   {
			   $editdata = array(
			   'firstname'=>$this->input->post('firstname'),
		       'lastname'=>$this->input->post('lastname'),
		       'email'=>$this->input->post('email'),
		       'name_admin' => $this->input->post('username'), 
			   'password' => md5($this->input->post('cpassword'))
			   );
		   }
		   else
		   {
			 $editdata = array(   
		    'firstname'=>$this->input->post('firstname'),
		    'lastname'=>$this->input->post('lastname'),
		     'email'=>$this->input->post('email'),
		    'name_admin' => $this->input->post('username')   
		   );
			   
		   }
		  
		  $this->db->where('id_admin', 1);
		  
		  $this->db->update('admin',$editdata);		 
	}
	
	public function show_profile()
	{		
		
	   $query = $this->db->query('select * from admin where id_admin = 1 ') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();	 
	}
    
	
	function getAdmin()
	{
		$query = $this->db->query('select * from admin where id_admin != 1') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();
	}
	
	function getAdminview($aid)
	{	
		$query = $this->db->query('select * from admin where id_admin = "'.$aid.'"') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();
	}
	
	function getDeleteview($did)
	{
		$query = $this->db->query('delete from admin where id_admin = "'.$did.'"') or die(mysql_error());	
		if($query)
			return true;
		else
			return false;
	}
	
	public function getadd()
	{		
		
		  $datsa=array(
		    'firstname'=>$this->input->post('firstname'),
		    'lastname'=>$this->input->post('lastname'),
		     'email'=>$this->input->post('email'),
		    'name_admin' => $this->input->post('username'), 
			'password'=>md5($this->input->post('password'))   
		   );
		  
		  
		  $this->db->insert('admin',$datsa) ;		 
	}
	
	public function edit_admin($sid)
	{				  
		  
		   
		   if($this->input->post('cpassword') != '')
		   {
			   $editdata = array(
			   'firstname'=>$this->input->post('firstname'),
		       'lastname'=>$this->input->post('lastname'),
		       'email'=>$this->input->post('email'),
		       'name_admin' => $this->input->post('username'), 
			   'password' => md5($this->input->post('cpassword'))
			   );
		   }
		   else
		   {
			 $editdata = array(   
		    'firstname'=>$this->input->post('firstname'),
		    'lastname'=>$this->input->post('lastname'),
		     'email'=>$this->input->post('email'),
		    'name_admin' => $this->input->post('username')   
		   );
			   
		   }
		  
		  $this->db->where('id_admin', $sid);
		  
		  $this->db->update('admin',$editdata);		 
	}
	
	public function show_admin($sid)
	{		
		
	   $query = $this->db->query('select * from admin where id_admin = "'.$sid.'"') or die(mysql_error());
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return array();	 
	}
	
	
	
	
}
  
