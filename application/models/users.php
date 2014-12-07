<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model {
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    
    function register($username, $email, $password)
    {
    	// error checking
    	$username_check = empty($username) ? true : false;
    	$email_check = empty($email) ? true : false;
    	$password_check = empty($password) ? true : false;
    	
    	// if all good, continue
    	if(!$username_check && !$email_check && !$password_check)
    	{
	    	
	    	// check if username/email already exist
	    	if($this->username_exist($username))
	    		return array('status' => false, 'message' => 'Username exists');
	    		
	    	if($this->email_exist($email))
	    		return array('status' => false, 'message' => 'Email exists');
	    	
	    	// is this school allowed to sign up?
	    	if(!$this->checkSchoolAllowed($email))
	    		return array('status' => false, 'message' => 'School not allowed');
	    		
	    	// hash password
	    	$hashed_password = $this->hash($password);
	    	
	    	// escape data
	    	$clean_email = $this->db->escape($email);
	    	$clean_username = $this->db->escape($username);
	    	$clean_password = $this->db->escape($password);
	    	
	    	// prepare to insert
	    	$query = 'INSERT INTO `users` (`username`, `email`, `password`, `create_login`) VALUES('.$clean_username.', '.$clean_email.', '.$clean_password.', "'.time().'")';
	    	
	    	$register_query = $this->db->query($query);
	    	if($register_query)
	    	{
	    		// store info in session
	    		$this->session->set_userdata('loggedin', true);
	    		$this->session->set_userdata('user_id', $username);
	    		return array('status' => true, 'message' => 'User created');
	    	} else {
		    	return array('status' => false, 'message' => 'Database error');
	    	}
    	} else {
	    	return array('status' => false, 'message' => 'Input missing');
    	}
	    
    }
    
    function login($email, $password)
    {
	    
    }
    
    function checkSchoolAllowed($email)
    {
	    $split = explode('@', $email);
	    
	    // $split[1] contains host
	    
	    // clean before contacting database
	    $clean_host = $this->db->escape($split[1]);
	    
	    $query = 'SELECT `id` FROM `schools` WHERE `school_email` = '.$clean_host;
	    
	    $do = $this->db->query($query);
	    
	    if($do->num_rows() > 0)
	    {
	    	// true if the school exists
		    return true;
	    } else {
		    return false;
	    }
    }
    
    function loggedIn()
    {
	    $loggedin = $this->session->userdata('loggedin');
	    if($loggedin)
	    {
		    return true;
	    } else {
		    return false;
	    }
    }
    
    function username_exist($name)
    {
    	// escape
    	$clean_name = $this->db->escape($name);
    	
	    // query database
	    $query = 'SELECT `u_id` FROM `users` WHERE `username` = '.$clean_name;
	    
	    $do = $this->db->query($query);
	    
	    if($do->num_rows() > 0)
	    {
		    return true;
	    } else {
		    return false;
	    }
    }
    
    function email_exist($email)
    {
	    // escape
	    $clean_email = $this->db->escape($email);
	    
	    // query database
	    $query = 'SELECT `u_id` FROM `users` WHERE `email` = '.$clean_email;
	    
	    $do = $this->db->query($query);
	    
	    if($do->num_rows() > 0)
	    {
		    return true;
	    } else {
		    return false;
	    }
    }
    
    function hash($code)
    {
	    return hash('sha256', $code);
    }
}