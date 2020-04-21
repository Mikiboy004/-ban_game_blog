<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blacklist_ctr extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
      $data['banner'] = $this->db->get('tbl_banner')->result_array();
      $this->load->view('option/header');
      $this->load->view('blacklist',$data);
      $this->load->view('option/footer');
  }

}
