<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('User_model');
	}

	public function register()
	{
		$this->load->view('backend/login/index'); 
	}
	public function registerPro()
	{
		$user_data = array(
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'full_name' => $this->input->post('fullname'),
			'mobile' =>   $this->input->post('mobile'),
			'type' => $this->input->post('type')
		);

		$inserted = $this->User_model->insert_user($user_data);

		if ($inserted) {
			$this->session->set_flashdata('message', "User successfully inserted with ID: " . $inserted);
			redirect($this->login());
		} else {
			$this->session->set_flashdata('message', "Error inserting user");
			redirect($this->login());
		}
	}
	public function login()
	{
		$this->load->view('backend/login/loginPage');
	}
	public function login_process()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->User_model->get_user_by_username($username);
		if ($user) {
			if (password_verify($password, $user['password'])) {
				$this->session->set_userdata('user_id', $user['id']);
				$this->session->set_userdata('username', $user['username']);
				$this->session->set_userdata('fullname', $user['full_name']);
				$this->session->set_userdata('type', $user['type']);
				redirect('admin_panel/dashboard');
			} else {
				$this->session->set_flashdata('message', 'Invalid password!');
				redirect('admin_panel/auth/login');
			}
		} else {
			$this->session->set_flashdata('message', 'Username not found!');
			redirect('admin_panel/auth/login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin_panel/auth/login');
	}
}
