<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Work2 extends CI_Controller {
  public function index(){
  // guest users
  $data['site_sub_page'] = 'Work2';
  $data['active_nav'] = 'my_work';
  $this->load->view('includes/header', $data);
  $this->load->view('work2');
  $this->load->view('includes/footer');
  }
}
