<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Work extends CI_Controller {

public function index()
	{
		// only for logged in users
		$data['site_sub_page'] = 'Work';
		$data['active_nav'] = 'my_work';
		$this->load->view('includes/header');
		$this->load->view('work');
		$this->load->view('includes/footer');
	}
}