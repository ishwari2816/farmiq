<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
		if ($this->session->userdata('type') == 'Farmer') {
			redirect('admin_panel/farmer_dashboard');
		}elseif ($this->session->userdata('type') == 'Buyer') {
			redirect('admin_panel/buyer_dashboard');
		}elseif ($this->session->userdata('type') == 'Customer'){
			redirect('admin_panel/customer/dashboard');
		}elseif ($this->session->userdata('type') == 'admin'){
			$this->admin_dashboard();
		}
		$data['count_today'] = $this->User_model->getCountToday();
		$this->Visitor_model->increment_count();
		$count = $this->Visitor_model->get_count();
		$data['visitor_count'] = $count;
		// print_r($data);die('pp');
		$this->load->view('backend/header');
		$this->load->view('backend/index', $data);
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
	public function admin_dashboard()
	{
		$data['count_today'] = $this->User_model->getCountToday();
		$this->Visitor_model->increment_count();
		$count = $this->Visitor_model->get_count();
		$data['visitor_count'] = $count;
		// print_r($data);die('pp');
		$this->load->view('backend/header');
		$this->load->view('backend/index', $data);
		$this->load->view('backend/footer');
	}
}
