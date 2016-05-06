<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function insert_user()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
        );
        return $this->db->insert('users', $data);
    }

    public function verify_login($username, $password)
    {
        $this->db->select('password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $hash = $this->db->get()->row('password');
        return password_verify($password, $hash);
    }

    public function get_user_by_email($email)
    {
        $this->db->select('username');
		$this->db->from('users');
		$this->db->where('email', $email);
		return $this->db->get()->row('username');
    }

    public function get_user_by_username($username)
    {
        $this->db->select('username');
		$this->db->from('users');
		$this->db->where('username', $username);
		return $this->db->get()->row('username');
    }
}
