<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->library(array('form_validation'));
		$this->load->model('user_model');
	}

	public function index() {
		$data = array();

		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_dash|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[20]|callback_password_check');

		if ($this->form_validation->run() === false) {
			$data['validation_errors'] = validation_errors();
			$this->load->view('member/login_view', $data);
		} else {
			$data = array(
				'username'		=> $this->input->post('username'),
				'is_logged_in'	=> true
			);
			$this->session->set_userdata($data);
			redirect('/message');
		}
	}

	public function username_check($username)
	{
		if ($this->user_model->get_user_by_username($username) == null) {
			$this->form_validation->set_message('username_check', 'Username not exists.');
			return false;
		} else {
			return true;
		}
	}

	public function password_check($password) {
		$username = $this->input->post('username');
		if ($this->user_model->verify_login($username, $password) === false) {
			$this->form_validation->set_message('password_check', 'Passwords incorrect.');
			return false;
		} else {
			return true;
		}
	}
}
