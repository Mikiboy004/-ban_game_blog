<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order_controller extends CI_Controller
{

    public function list_order()
    {
        $admin = $this->db->get_where('tbl_admin', ['username' => $this->session->userdata('username'), 'status' => 1])->row_array();
        $data['admin'] = $admin;
        if ($admin == true) {
            $data['post'] = $this->db->get('tbl_post')->result_array();
            $this->load->view('list_order',$data);
        } else {
            $this->session->set_flashdata('dont_click', TRUE);
            redirect('Login');
        }
    }


    public function  delete_Post()
    {
        $id = $this->input->get('id');
       

        $this->db->where('id', $id);
        $resultsedit = $this->db->delete('tbl_post', ['id' => $id]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully ลบ โพสที่ไม่เหมาะ information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully ลบ โพสที่ไม่เหมาะ information');
        }
        return redirect('List-Order');
    }

    public function  delete_comment()
    {
        $id = $this->input->get('id');
       

        $this->db->where('id', $id);
        $resultsedit = $this->db->delete('tbl_comment', ['id' => $id]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully ลบ คอมเม้นที่ไม่เหมาะ information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully ลบ คอมเม้นที่ไม่เหมาะ information');
        }
        return redirect('List-Order');
    }


    



    






    
}
