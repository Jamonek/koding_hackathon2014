<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class About extends CI_Controller {
    public function index()
    {
    	$data['site_sub_page'] = 'About';
    	$data['active_nav'] = 'about';
    	
     	$this->load->view('includes/header', $data);
     	$this->load->view('about.php');
     	$this->load->view('includes/footer');
    }
  }
