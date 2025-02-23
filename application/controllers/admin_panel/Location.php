<?php
class Location extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Location_model');
        $this->load->library('form_validation');
		$this->load->library('pagination');
        if (null === $this->session->userdata('username')) {
			redirect('admin_panel/auth/login');
		}
    }

    public function index($page = 1)
    {
        $config = [
            'base_url' => site_url('admin_panel/location/index'),
            'total_rows' => $this->Location_model->count_all_items(),
            'per_page' => 10,
            'uri_segment' => 4,
			'use_page_numbers' => TRUE,
			'page_query_string' => FALSE,
			'first_url' => site_url('admin_panel/location/index/1'),
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
        $data['locations'] = $this->Location_model->get_locations($config['per_page'], $offset);
        $data['pagination'] = $this->pagination->create_links();
		$start = ($page - 1) * $config['per_page'] + 1;
		$data['current_page'] = $page;
		$data['items_per_page'] = $config['per_page'];
		$data['start'] = $start;
        $this->load->view('backend/header');
        $this->load->view('backend/location/location_list', $data);
        $this->load->view('backend/footer');
    }

    public function add()
    {
        $data['states'] = $this->Location_model->get_all_states();
        // $data['districts'] = $this->Location_model->get_all_districts();
        $data['districts'] = [];
        $this->load->view('backend/header');
        $this->load->view('backend/location/location_form',$data);
        $this->load->view('backend/footer');
    }

    public function edit($id)
    {
        $data['states'] = $this->Location_model->get_all_states();
        $data['location'] = $this->Location_model->get_location_by_id($id);
        $data['state'] = $this->Location_model->getStatebyID($data['location']->state);
        $data['district'] = $this->Location_model->getDistrictbyID($data['location']->district);
        $this->load->view('backend/header');
        $this->load->view('backend/location/location_form_edit', $data);
        $this->load->view('backend/footer');
    }

    public function save()
    {
        $state = $this->input->post('state');
        $district = $this->input->post('district');
        $taluka = $this->input->post('taluka');
        $market = $this->input->post('market');

        $data = array(
            'state' => $state,
            'district' => $district,
            'taluka' => $taluka,
            'market' => $market
        );

        if ($this->input->post('id')) {
            // Update existing location
            $this->Location_model->update_location($this->input->post('id'), $data);
        } else {
            // Insert new location
            $this->Location_model->insert_location($data);
        }

        redirect('admin_panel/location');
    }

    public function delete($id)
    {
        $this->Location_model->delete_location($id);
        redirect('admin_panel/location');
    }

    public function getDistricts() {
        if ($this->input->is_ajax_request()) {
            $stateId = $this->input->get('state_id');
            $districts = $this->Location_model->getDistrictsByState($stateId);  // Fetch districts by state
            echo json_encode($districts);
        }
    }
}
