<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$data['site_sub_page'] = 'Sign Up';
		$data['active_nav'] = 'signup';
		$this->load->view('includes/header', $data);
		$this->load->view('signup.php');
		$this->load->view('includes/footer');
		
	}
	
	public function push()
	{
		if($this->input->post())
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$username = $this->input->post('username');
			
			// pass data to user model to do heavy lifting
			$register = $this->users->register($username, $email, $password);
			if($register['status'])
			{
				// registration successful, redirect user to work page
				redirect('work?reg=1');
				exit;
			} else {
				// display form with errors
			}
		}
	}
}