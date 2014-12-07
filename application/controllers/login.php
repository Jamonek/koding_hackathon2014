<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
  public function index(){
    $this->load->view('includes/header');
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
