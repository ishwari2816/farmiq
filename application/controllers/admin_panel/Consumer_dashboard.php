<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buyer_Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('User_model');
		$this->load->model('Visitor_model');
		if (null === $this->session->userdata('username')) {
			redirect('admin_panel/auth/login');
		}
	} 

	public function index()
	{
        $data['count_today'] = $this->User_model->getCountToday();
        $this->Visitor_model->increment_count();
        $count = $this->Visitor_model->get_count();
        $data['visitor_count'] = $count;
        $this->load->view('backend/header');
        $this->load->view('backend/consumer_index', $data);
		$this->load->view('backend/footer');
	}

	public function update_count()
	{
		$this->Visitor_model->increment_count();
	}

	public function get_count()
	{
		$count = $this->Visitor_model->get_count();
		echo "Visitor Count: " . $count;
	}
}
