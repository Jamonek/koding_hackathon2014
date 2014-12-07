<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact extends CI_Controller {
  public function index(){
    $this->load->view('includes/header');
    $this->load->view('contact.php');
    $this->load->view('includes/footer');
  }
  public function send(){
    function send(){
		$this->load->library('form_validation');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('msg', 'Message', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('contact.php');
		}else{
			$this->load->view('success.php');
		}
	}
  }
}
