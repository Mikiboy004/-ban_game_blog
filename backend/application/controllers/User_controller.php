<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_controller extends CI_Controller
{

    public function list_user()
    {
       
        $admin = $this->db->get_where('tbl_admin', ['username' => $this->session->userdata('username'), 'status' => 1])->row_array();
        $data['admin'] = $admin;
        if ($admin == true) {
            $data['user'] = $this->db->get('tbl_user')->result_array();
            $this->load->view('list_user', $data);
        } else {
            $this->session->set_flashdata('dont_click', TRUE);
            redirect('Dashboard');
        }
    }






    
}
