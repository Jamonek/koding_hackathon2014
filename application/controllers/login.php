<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
  public function index(){
  	$data['site_sub_page'] = 'Login';
  	$data['active_nav'] = 'login';
    $this->load->view('includes/header', $data);
    $this->load->view('login.php');
    $this->load->view('includes/footer');
  }
  public function push(){
    if($this->input->post()){
      $email = $this->input->get('username');
      $password = $this->input->get('password');
      // check if user info exist
      //
    }
  }
}
