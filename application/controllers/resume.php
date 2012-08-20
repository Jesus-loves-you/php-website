<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resume extends CI_Controller {

  public function index()
  {
    log_message("error","Resume");

    $this->load->helper('url');
    $this->load->view('blog');
  }
}


