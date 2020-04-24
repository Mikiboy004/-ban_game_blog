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
      $data['post'] = $this->db->order_by('id','DESC')->get_where('tbl_post',['status' => 1])->result_array();
      $this->load->view('option/header');
      $this->load->view('blacklist',$data);
      $this->load->view('option/footer');
  }

  public function search_blacklist()
  {
      $search_blacklist = $this->input->post('search_blacklist');
      $this->db->like('cheat' , $search_blacklist);
      $this->db->where('status' , 1);
      $data['post'] = $this->db->order_by('id','DESC')->get('tbl_post')->result_array();
      $this->load->view('option/header');
      $this->load->view('search_blacklist',$data);
      $this->load->view('option/footer');
  }

}
