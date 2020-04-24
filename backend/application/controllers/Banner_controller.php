<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner_controller extends CI_Controller
{

    public function list_banner()
    {
        $admin = $this->db->get_where('tbl_admin', ['username' => $this->session->userdata('username'), 'status' => 1])->row_array();
        $data['admin'] = $admin;
        if ($admin == true) {
            $data['banner'] = $this->db->get('tbl_banner')->result_array();
            $this->load->view('list_banner', $data);
        } else {
            $this->session->set_flashdata('dont_click', TRUE);
            redirect('Login');
        }
    }

    public function banner_add_com()
    {

        $this->load->library('upload');

        // |xlsx|pdf|docx
        $config['upload_path'] = '../uploads/banner';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '200480';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $name_file = "banner-" . time();
        $config['file_name'] = $name_file;

        $this->upload->initialize($config);

        $data = array();

        if ($_FILES['file_name']['name']) {
            if ($this->upload->do_upload('file_name')) {

                $gamber     = $this->upload->data();
                $data = array(

                    'link'           => $this->input->post('link'),
                    'file_name'     => $gamber['file_name'] ,
                    'created_at'     => date('Y-m-d H:i:s') ,
                  
                );
                $resultsedit = $this->db->insert('tbl_banner', $data);
                if ($resultsedit > 0) {
                    $this->session->set_flashdata('save_ss2', 'Successfully Add post information !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully Add post information');
                }
            } 
            
           return redirect('list_banner');
        }
       
    
    }

    public function  banner_edit_com()
    {

         $id =  $this->input->post('id');

        $this->load->library('upload');

        // |xlsx|pdf|docx
        $config['upload_path'] = '../uploads/banner';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '200480';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $name_file = "banner-" . time();
        $config['file_name'] = $name_file;

        $this->upload->initialize($config);

        $data = array();
      
       
        if ($_FILES['file_name']['name']) {
            if ($this->upload->do_upload('file_name')) {

                $gamber     = $this->upload->data();
                $data = array(


                    'link'           => $this->input->post('link'),
                    'file_name'     => $gamber['file_name'] ,
                    'updated_at'     => date('Y-m-d H:i:s')
                  

                );
                
                $this->db->where('id', $id);
                $resultsedit = $this->db->update('tbl_banner', $data);
              
            }
        }else{
            $data = array(


                'link'           => $this->input->post('link'),
                'updated_at'     => date('Y-m-d H:i:s')
              

            );
            
            $this->db->where('id', $id);
            $resultsedit = $this->db->update('tbl_banner', $data);
        } 
        
        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully edit slider information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully edit slider information');
        }
        return redirect('list_banner');
    }

    public function  delete_banner()
    {
        $id = $this->input->get('id');
       

        $this->db->where('id', $id);
        $resultsedit = $this->db->delete('tbl_banner', ['id' => $id]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully delete Post information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully delete Post information');
        }
        return redirect('list_banner');
    }





    






    
}