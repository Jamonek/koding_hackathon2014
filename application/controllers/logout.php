<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Logout extends CI_Controller {
  
  public function index(){
  	if($this->session->userdata('loggedin'))
  	{
	  	$this->session->sess_destroy();
	  	redirect('/');
  	} else {
	  	redirect('/login');
  	}
  }
}