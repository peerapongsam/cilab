<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->library(array('form_validation'));
		$this->load->model('user_model');
	}

	public function index() {
		$data = array();

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_dash|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[20]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');

		if ($this->form_validation->run() === false) {
			$data['validation_errors'] = validation_errors();
			$this->load->view('member/register_view', $data);
		} else {
			if ($this->user_model->insert_user()) {
				$this->load->view('member/register_success_view');
			} else {
				$data['validation_errors'] = 'Unable create account';
				$this->load->view('member/register_view', $data);
			}
		}

	}

	public function email_check($email) {
		if ($this->user_model->get_user_by_email($email) != null) {
			$this->form_validation->set_message('email_check', 'The {field} field must contain a unique value.');
			return false;
		} else {
			return true;
		}
	}
}
