<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

public class Signup extends CI_Controller {

	public function index()
	{
	
		$this->load->view('includes/header');
		$this->load->view('signup.php');
		$this->load->view('includes/footer');
		
	}
	
	public function push()
	{
		if($this->input->post())
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
			// check if user exist
			
			// 
		}
	}
}