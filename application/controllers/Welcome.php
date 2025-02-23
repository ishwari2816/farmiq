<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Visitor_model');
		$this->load->model('User_model');
		$this->load->model('Main_model');
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
		$this->load->view('frontend/index1',$data);
		$this->load->view('frontend/api');
		$this->load->view('frontend/index2',$result);
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
}
