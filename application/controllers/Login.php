<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->library(array('parser'));
    $this->load->helper(array('form','url'));
  }

  public function index() {
    $data = array(
      'title'=>'Login'
    );

    $this->parser->parse('member/login_view', $data);
  }
  
}
