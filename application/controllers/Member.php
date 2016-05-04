<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->library(array('parser'));
    $this->load->helper('form');
  }

  public function login() {
    $data = array(
      'title'=>'Login'
    );

    $this->parser->parse('member/login_view', $data);
  }
}
