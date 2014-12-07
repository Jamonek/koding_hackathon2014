<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Work extends CI_Controller {

public function index()
	{
		// only for logged in users
		if(!$this->users->loggedIn())
  			redirect('login');
  		
		$data['site_sub_page'] = 'Work';
		$data['active_nav'] = 'my_work';
		$this->load->view('includes/header', $data);
		$this->load->view('work');
		$this->load->view('includes/footer');
	}
}