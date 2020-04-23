<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dynamic_dependent_model');
    }

    public function index()
    {
        $this->load->view('option/header');
        $this->load->view('contact');
        $this->load->view('option/footer');
    }

    public function contact_add()
    {
        $data = array(
            'first_name'    => $this->input->post('first_name'),
            'last_name'     => $this->input->post('last_name'),
            'email'         => $this->input->post('email'),
            'tel'           => $this->input->post('tel'),
            'subject'       => $this->input->post('subject'),
            'message'       => $this->input->post('message'),
            'created_at'    => date("Y-m-d H:i:s"),
            'updated_at'    => date("Y-m-d H:i:s"),
        );

        $success = $this->db->insert('tbl_contact', $data);

        if ($success > 0) {
            $result['successfully'] = true;
            $result['message'] = 'send contact success';
            echo json_encode($result);
        }else{
            $result['successfully'] = false;
            $result['message'] = 'send contact error';
            echo json_encode($result);
        }
    }
}
