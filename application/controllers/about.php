<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class About extends CI_Controller {
    public function index(){
      $this->load->view('includes/header');
      $this->load->view('about.php');
      $this->load->view('includes/footer');
    }
  }
