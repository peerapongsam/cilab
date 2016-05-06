<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('message_model');
	}

	public function index() {
		if ($this->is_logged_in()) {
			$data['messages'] = $this->message_model->get_all();
			$this->load->view('message/message_view', $data);
		}
	}

	public function new_message() {
		if ($this->is_logged_in()) {
			$this->form_validation->set_rules('topic', 'Topic', 'trim|required');
			$this->form_validation->set_rules('desc', 'Desc', 'trim|required');

			if ($this->form_validation->run() === false) {
				$data['validation_errors'] = validation_errors();
				$this->load->view('message/new_message_view', $data);
			} else {
				$this->session->set_userdata($data);
				if ($this->message_model->insert_message()) {
					redirect('/message');
				} else {
					$data['validation_errors'] = 'Unable create message';
					$this->load->view('message/new_message_view', $data);
				}
			};
		}
	}

	public function edit($id) {
		if ($this->is_logged_in()) {
			$message = $this->message_model->get_message_by_id($id);
			if ($message->username === $this->session->userdata('username')) {
				$data['message'] = $message;
				$this->form_validation->set_rules('topic', 'Topic', 'trim|required');
				$this->form_validation->set_rules('desc', 'Desc', 'trim|required');

				if ($this->form_validation->run() === false) {
					$data['validation_errors'] = validation_errors();
					$this->load->view('message/edit_message_view', $data);
				} else {
					$this->session->set_userdata($data);
					if ($this->message_model->update_message_by_id($id)) {
						redirect('/message');
					} else {
						$data['validation_errors'] = 'Unable create message';
						$this->load->view('message/edit_message_view', $data);
					}
				};
			} else {
				$this->load->view('login_error_view');
			}
		}
	}

	private function is_logged_in() {
		$is_logged_in = $this->session->userdata('is_logged_in');
		if ($is_logged_in != true) {
			$this->load->view('login_error_view');
			return false;
		}
		return true;
	}
}
