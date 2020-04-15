<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider_controller extends CI_Controller
{

    public function list_slider()
    {
        $admin = $this->db->get_where('tbl_admin', ['username' => $this->session->userdata('username'), 'status' => 1])->row_array();
        $data['admin'] = $admin;
        if ($admin == true) {
            $data['slider'] = $this->db->get('tbl_slider')->result_array();
            $this->load->view('list_slider', $data);
        } else {
            $this->session->set_flashdata('dont_click', TRUE);
            redirect('Dashboard');
        }
    }

    public function slider_add_com()
    {

        $this->load->library('upload');

        // |xlsx|pdf|docx
        $config['upload_path'] = '../uploads/slider';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '200480';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $name_file = "slider-" . time();
        $config['file_name'] = $name_file;

        $this->upload->initialize($config);

        $data = array();

        if ($_FILES['file_name']['name']) {
            if ($this->upload->do_upload('file_name')) {

                $gamber     = $this->upload->data();
                $data = array(

                  
                    'file_name'     => $gamber['file_name'] ,
                    'created_at'     => date('Y-m-d H:i:s') ,
                  
                );
                $resultsedit = $this->db->insert('tbl_slider', $data);
                if ($resultsedit > 0) {
                    $this->session->set_flashdata('save_ss2', 'Successfully Add post information !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully Add post information');
                }
            } 
            
           return redirect('List-slider');
        }
       
    
    }

    public function silder_edit_com()
    {

         $id =  $this->input->post('id');

        $this->load->library('upload');

        // |xlsx|pdf|docx
        $config['upload_path'] = '../uploads/slider';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '200480';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $name_file = "silder-" . time();
        $config['file_name'] = $name_file;

        $this->upload->initialize($config);

        $data = array();
      
       
        if ($_FILES['file_name']['name']) {
            if ($this->upload->do_upload('file_name')) {

                $gamber     = $this->upload->data();
                $data = array(


                   
                    'file_name'     => $gamber['file_name'] ,
                    'updated_at'     => date('Y-m-d H:i:s')
                  

                );
                
                $this->db->where('id', $id);
                $resultsedit = $this->db->update('tbl_slider', $data);
              
            }
        } 
        
        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully edit slider information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully edit slider information');
        }
        return redirect('List-slider');
    }

    public function  delete_slider()
    {
        $id = $this->input->get('id');
       

        $this->db->where('id', $id);
        $resultsedit = $this->db->delete('tbl_slider', ['id' => $id]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully delete Post information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully delete Post information');
        }
        return redirect('List-slider');
    }





    






    
}