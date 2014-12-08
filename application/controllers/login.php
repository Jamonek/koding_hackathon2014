<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
  
  public function index(){
  	if($this->users->loggedIn())
  		redirect('work');
  		
  	$data['site_sub_page'] = 'Login';
  	$data['active_nav'] = 'login';
    $this->load->view('includes/header', $data);
    $this->load->view('login');
    $this->load->view('includes/footer');
  }
  
  public function push(){
  	if($this->users->loggedIn())
  		redirect('work');
  		
    if($this->input->post()){
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      
      $login = $this->users->login($email, $password);
      
      if($login['status'])
      {
	      // user logged in
	      redirect('work');
	      exit;
      } else {
	      // display form with errors
	     $data['site_sub_page'] = 'Login';
	     $data['active_nav'] = 'login';
	     $this->load->view('includes/header', $data);
	     $this->load->view('login', $register);
	     $this->load->view('includes/footer');
      }
    }
  }
}
