<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masters extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Item_model');
		$this->load->model('User_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		if (null === $this->session->userdata('username')) {
			redirect('admin_panel/auth/login');
		}
	} 

	public function index($page = 1)
	{
		$config = [
			'base_url' => site_url('admin_panel/masters/index'),
			'total_rows' => $this->Item_model->count_all_items(),
			'per_page' => 10,
			'uri_segment' => 4,
			'use_page_numbers' => TRUE,
			'page_query_string' => FALSE,
			'first_url' => site_url('admin_panel/masters/index/1'),
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
		$data['items'] = $this->Item_model->get_items($config['per_page'], $offset);
		$data['pagination'] = $this->pagination->create_links();
		$start = ($page - 1) * $config['per_page'] + 1;
		$data['current_page'] = $page;
		$data['items_per_page'] = $config['per_page'];
		$data['start'] = $start;
		$this->load->view('backend/header');
		$this->load->view('backend/masters/itemMaster', $data);
		$this->load->view('backend/footer');
	}


	public function create()
	{
		$this->load->view('backend/header');
		$this->load->view('backend/masters/createMaster');
		$this->load->view('backend/footer');
	}

	public function createPro()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('category', 'category', 'required');

		if ($this->form_validation->run() === FALSE) {
			redirect('admin_panel/masters/create');
		} else {
			$data = [
				'name' => $this->input->post('name'),
				'category' => $this->input->post('category')
			];
			$this->Item_model->insert_item($data);
			redirect('admin_panel/masters');
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
}
