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
    	
	    
    }
    
    function login($email, $password)
    {
	    
    }
    
    function loggedIn()
    {
	    
    }
}