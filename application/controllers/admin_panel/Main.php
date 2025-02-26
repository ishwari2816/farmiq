<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Item_model');
		$this->load->model('Main_model');
		$this->load->model('Location_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->library('session');
		if (null === $this->session->userdata('username')) {
			redirect('admin_panel/auth/login');
		}
	}  


	public function index($page = 1)
	{
		$config = [
			'base_url' => site_url('admin_panel/main/index'),
			'total_rows' => $this->Main_model->count_all_items(),
			'per_page' => 10,
			'uri_segment' => 4,
			'use_page_numbers' => TRUE,
			'page_query_string' => FALSE,
			'first_url' => site_url('admin_panel/main/index/1'),
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
		$this->load->view('backend/header');
		$this->load->view('backend/main/index_list', $data);
		$this->load->view('backend/footer');
	}


	public function add()
	{
		if ($this->session->userdata('data') != null) {
			redirect('admin_panel/main/create');
		}
		$data['states'] = $this->Location_model->get_all_states();
		$data['districts'] = [];
		$this->load->view('backend/header');
		$this->load->view('backend/main/add_form', $data);
		$this->load->view('backend/footer');
	}


	public function save()
	{
		$state = $this->Main_model->getAState($this->input->post('state'));
		$district = $this->Main_model->getADistrict($this->input->post('district'));
		$taluka = $this->input->post('taluka');
		$market = $this->input->post('market');

		$data = array(
			'state' => $state[0]->state_name,
			'district' => $district[0]->district_name,
			'taluka' => $taluka,
			'market' => $market
		);
		$this->session->set_userdata('data', $data);
		redirect('admin_panel/main/create');
	}

	public function create()
	{
		$data['commodities'] = $this->Main_model->get_all_commodities();
		$this->load->view('backend/header');
		$this->load->view('backend/main/createMaster', $data);
		$this->load->view('backend/footer');
	}

	public function createPro()
	{
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('district', 'district', 'required');
		$this->form_validation->set_rules('taluka', 'Taluka', 'required');
		$this->form_validation->set_rules('market', 'Market', 'required');
		$this->form_validation->set_rules('commodity', 'Commodity', 'required');
		$this->form_validation->set_rules('variety', 'variety', 'required');
		$this->form_validation->set_rules('min_price', 'min_price', 'required');
		$this->form_validation->set_rules('max_price', 'max_price', 'required');
		$this->form_validation->set_rules('avg_price', 'avg_price', 'required');
		$this->form_validation->set_rules('date', 'date', 'required');

		if ($this->form_validation->run() === FALSE) {
			redirect('admin_panel/main/create');
		} else {
			$data = [
				'state' => $this->input->post('state'),
				'district' => $this->input->post('district'),
				'taluka' => $this->input->post('taluka'),
				'market' => $this->input->post('market'),
				'commodity' => $this->input->post('commodity'),
				'variety' => $this->input->post('variety'),
				'min_price' => $this->input->post('min_price'),
				'max_price' => $this->input->post('max_price'),
				'avg_price' => $this->input->post('avg_price'),
				'date' => $this->input->post('date'),
				'flag' => 0
			];
			// echo "<pre>";print_r($data);die('-0-0');
			$this->Main_model->insert_update($data);
			redirect('admin_panel/main');
		}
	}

	public function edit($id)
	{
		$data['item'] = $this->Item_model->get_item_by_id($id);
		$this->load->view('backend/header');
		$this->load->view('backend/masters/editMaster', $data);
		$this->load->view('backend/footer');
	}

	public function editPro($id)
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('category', 'category', 'required');

		$data['item'] = $this->Item_model->get_item_by_id($id);

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('items/edit', $data);
		} else {
			$updated_data = [
				'name' => $this->input->post('name'),
				'category' => $this->input->post('category')
			];
			$this->Item_model->update_item($id, $updated_data);
			redirect('admin_panel/masters');
		}
	}

	public function delete($id)
	{
		$this->Item_model->delete_item($id);
		redirect('admin_panel/masters');
	}
	
	public function getTalukas()
	{
		if ($this->input->is_ajax_request()) {
			$districtId = $this->input->get('district_id');
			
			$talukas = $this->Main_model->getTalukasByDistrict($districtId);
			
			echo json_encode($talukas);
		}
	}
	
	public function fetch_markets_by_taluka()
	{
		$taluka_name = $this->input->post('taluka_name');
		$markets = $this->Main_model->get_markets_by_taluka($taluka_name);
		echo json_encode(['markets' => $markets]);
	}
	public function delete_session_data()
	{
		$this->session->unset_userdata('data');
		redirect('admin_panel/main/add');
	}
}
