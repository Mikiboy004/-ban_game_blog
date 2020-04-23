<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post_controller extends CI_Controller
{

    public function list_post()
    {
        $admin = $this->db->get_where('tbl_admin', ['username' => $this->session->userdata('username'), 'status' => 1])->row_array();
        $data['admin'] = $admin;
        if ($admin == true) {
            $data['post'] = $this->db->order_by('id', 'DESC')->get('tbl_post')->result_array();
            $this->load->view('list_post', $data);
        } else {
            $this->session->set_flashdata('dont_click', TRUE);
            redirect('Login');
        }
    }

    public function change_statusPost()
    {
        $admin = $this->db->get_where('tbl_admin', ['username' => $this->session->userdata('username'), 'status' => 1])->row_array();
        $data['admin'] = $admin;
        if ($admin == true) {
            $this->db->where('id', $this->input->get('id'));
            $success = $this->db->update('tbl_post', ['status' => $this->input->get('status')]);
            if ($success > 0) {
                $this->session->set_flashdata('changeStatus', TRUE);
            } else {
                $this->session->set_flashdata('changeStatusFail', TRUE);
            }
            redirect('List-Post');
        } else {
            $this->session->set_flashdata('dont_click', TRUE);
            redirect('Login');
        }
    }

    public function deletePost()
    {
        $admin = $this->db->get_where('tbl_admin', ['username' => $this->session->userdata('username'), 'status' => 1])->row_array();
        $data['admin'] = $admin;
        if ($admin == true) {
            $this->db->where('id', $this->input->get('id'));
            $success = $this->db->update('tbl_post', ['status' => $this->input->get('status')]);
            if ($success > 0) {
                $this->session->set_flashdata('changeStatus', TRUE);
            } else {
                $this->session->set_flashdata('changeStatusFail', TRUE);
            }
            redirect('List-Post');
        } else {
            $this->session->set_flashdata('dont_click', TRUE);
            redirect('Login');
        }
    }
}
