<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Git extends CI_Controller {

	public function index()
	{
		`git pull`;
	}
}