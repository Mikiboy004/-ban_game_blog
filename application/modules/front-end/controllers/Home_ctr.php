<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dynamic_dependent_model');
    }

    public function index()
    {
        $data['post'] = $this->db->order_by('id','DESC')->get_where('tbl_post',['status' => 1])->result_array();
        $this->load->view('option/header');
        $this->load->view('home',$data);
        $this->load->view('option/footer');    
    }
  
}
