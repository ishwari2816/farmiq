<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farm extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('frontend/welcome');
		$this->load->view('includes/footer');
	}
	public function api()
	{
		$this->load->view('includes/header');
		$this->load->view('frontend/api');
		$this->load->view('includes/footer');
	}
}  
