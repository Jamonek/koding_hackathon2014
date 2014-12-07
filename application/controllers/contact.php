<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact extends CI_Controller {
  public function index(){
    $this->load->view('includes/header');
    $this->load->view('contact.php');
    $this->load->view('includes/footer');
  }
  public function send(){
    if($this->input->post()){
      $email = $this->input->post('email'); 
      $message = $this->input->post('msg');
      // send email to team account
      //
    }
  }
}
