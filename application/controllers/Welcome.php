<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->model('Visitor_model');
		$this->load->model('User_model');
		$this->load->model('Main_model');
		$this->load->model('Item_model');
		$this->load->model('Location_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');
	}

	// public function index()
	// {
	// 	$this->Visitor_model->increment_count();
	// 	$this->load->view('frontend/welcome');
	// }
	public function index()
	{
		$data['market_content'] = $this->Main_model->get_all_main_all();
		$result['agri_shops'] = $this->Main_model->get_agri_shops();
		$result['ferti_shops'] = $this->Main_model->get_agri_fertilizer_shops();
		$result['soil_labs'] = $this->Main_model->get_agri_soil_labs();
		$result['cold_storages'] = $this->Main_model->get_agri_cold_storages();
		$this->Visitor_model->increment_count();
		// $this->User_model->get_market_data();
		$this->load->view('frontend/includes/header');
		// echo "<pre>";print_r($result);die;
		$this->load->view('frontend/index1', $data);
		$this->load->view('frontend/api');
		$this->load->view('frontend/index2', $result);
		// $this->load->view('frontend/chatboat');
		$this->load->view('frontend/includes/footer');
	}
	public function view()
	{
		$this->Visitor_model->increment_count();
		$this->load->view('frontend/includes/header');
		$this->load->view('frontend/indexed');
		$this->load->view('frontend/includes/footer');
	}
	public function pesticide()
	{
		$this->Visitor_model->increment_count();
		$this->load->view('frontend/includes/header');
		$this->load->view('frontend/pesticide');
		$this->load->view('frontend/includes/footer');
	}
	public function pest_disease()
	{
		$this->Visitor_model->increment_count();
		$this->load->view('frontend/includes/header');
		$this->load->view('frontend/pest_disease');
		$this->load->view('frontend/includes/footer');
	}
	public function about_us()
	{
		$this->Visitor_model->increment_count();
		$this->load->view('frontend/includes/header');
		$this->load->view('frontend/about_us');
		$this->load->view('frontend/includes/footer');
	}
	public function farmer_login()
	{
		$this->Visitor_model->increment_count();
		$this->load->view('frontend/includes/header');
		$this->load->view('frontend/farmer_registration');
		$this->load->view('frontend/includes/footer');
	}
	public function farmer_list()
	{
		$this->Visitor_model->increment_count();
		$this->load->view('frontend/includes/header');
		$this->load->view('frontend/farmer_list');
		$this->load->view('frontend/includes/footer');
	}

	public function view_rates($page = 1)
	{
		$config = [
			'base_url' => site_url('welcome/view_rates'),
			'total_rows' => $this->Main_model->count_all_items(),
			'per_page' => 10,
			'uri_segment' => 4,
			'use_page_numbers' => TRUE,
			'page_query_string' => FALSE,
			'first_url' => site_url('welcome/view_rates/1'),
		];
		$config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';
        $config['num_tag_open'] = '<span class="page-btn">';
        $config['num_tag_close'] = '</span>';
        $config['cur_tag_open'] = '<span class="page-btn current">';
        $config['cur_tag_close'] = '</span>';
        $config['prev_tag_open'] = '<span class="page-btn prev">';
        $config['prev_tag_close'] = '</span>';
        $config['next_tag_open'] = '<span class="page-btn next">';
        $config['next_tag_close'] = '</span>';

		$this->pagination->initialize($config);
		$offset = ($page - 1) * $config['per_page'];
		$data['market_content'] = $this->Main_model->get_all_main($config['per_page'], $offset);
		$data['pagination'] = $this->pagination->create_links();
		$start = ($page - 1) * $config['per_page'] + 1;
		$data['current_page'] = $page;
		$data['items_per_page'] = $config['per_page'];
		$data['start'] = $start;
		$this->load->view('frontend/includes/header');
		$this->load->view('frontend/farmer_index_list',$data);
		$this->load->view('frontend/includes/footer');

	}
}
