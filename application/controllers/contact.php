<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

public class Contact extends CI_Controller {
  
  public function index()
  {
   
    $this->load->view('includes/header');
    $this->load->view('contact');
    $this->load->view('includes/footer');
  
  }
  
  public function push()
  {
	  if($this->input->post('submit'))
	  {
	  	  // Check if our email and msg input contain data
		  $email = empty($this->input->post('email')) ? false : $this->input->post('email');
		  $msg = empty($this->input->post('msg')) ? false : $this->input->post('msg'); 
		  
		  $data['email_error'] = false;
		  $data['msg_error'] = false;
		  
		  // no check yet on email validation.. will add later
		  
		  if(!$email || !$msg)
		  {
			  // one of the fields failed..
			  if($email == false)
			  	$data['email_error'] = true;
			  	
			  if($msg == false)
			  	$data['msg_error'] = true;
			  	
			  
			  // redirect to contact with errors
			  if(!$email && !$msg)
			  	redirect('contact?error=1');
			  elseif(!$email && $msg != false)
			  	redirect('contact?error=2');
			  elseif($email != false && !$msg)
			  	redirect('contact?error=3');
			  	
		  } else {
			  // insert information into the database after sanitization
			  $query = "INSERT INTO `contact` (`email`, `message`) VALUES('".$this->db->escape($email)."', '".$this->db->escape($msg)."')";
			  
			  if($this->db->query($query))
			  {
				  $this->load->view('includes/header');
				  $this->load->view('success');
				  $this->load->view('includes/footer');
			  }
			  
			  
		  }
	  }
  }
}
