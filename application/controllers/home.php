<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

public function index()
	{
		$this->load->view('includes/header');
		$this->load->library('jquery-2.1.1.min');//would that work?
		$this->load->view('home_view');
		$this->load->view('includes/footer');
	}
}