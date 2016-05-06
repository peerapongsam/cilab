<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function insert_message()
    {
        $data = array(
            'topic' => $this->input->post('topic'),
            'desc' => $this->input->post('desc'),
            'username' => $this->session->userdata('username'),
            'create_time' => date('Y-m-d H:i:s')
        );
        return $this->db->insert('messages', $data);
    }

    public function get_all()
    {
        $query =$this->db->get('messages');
        return $query->result();
    }

    public function get_message_by_id($id)
    {
        $query =$this->db->get_where('messages', array('id' => $id));
        return $query->row();
    }

    public function update_message_by_id($id)
    {
        $data = array(
            'topic' => $this->input->post('topic'),
            'desc' => $this->input->post('desc'),
            'username' => $this->session->userdata('username'),
            'update_time' => date('Y-m-d H:i:s')
        );
        return $this->db->update('messages', $data, array('id' => $id));
    }
}
