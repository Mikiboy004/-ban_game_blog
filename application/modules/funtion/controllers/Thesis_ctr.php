<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Thesis_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
      
        if ($this->session->userdata('code_student') != '') {
           
            $this->load->view('option/header');
            $this->load->view('thesis');
            $this->load->view('option/footer'); 
        } else {
            $this->load->view('login');
        }
          
        
    }

   
    public function thesis_add_com()
    {

         $this->load->library('upload');
      
        // |xlsx|pdf|docx
        $config['upload_path'] = './uploads/thesis';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['max_size']     = '200480';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $name_file = "thesis-".time();
        $config['file_name'] = $name_file;

        $this->upload->initialize($config);

        $data = array();

            if ($_FILES['file_name']['name']) {           
                if ($this->upload->do_upload('file_name')){

                    $gamber     = $this->upload->data();
                    $data = array
                    (
                        'file_name'     => $gamber['file_name'],
                        'title'         => $this->input->post('title') , 
                        'composer'   => $this->input->post('composer') , 
                        'board'   => $this->input->post('board') , 
                        'subject'   => $this->input->post('subject') , 
                        'branch'          => $this->input->post('branch') , 
                        'year'          => $this->input->post('year') , 
                        'keyword'          => $this->input->post('keyword') , 
                        'create_at'     => date('Y-m-d H:i:s') 

                    );
                     
                    $resultsedit = $this->db->insert('tbl_thesis',$data);
                }
               
            }

            if($resultsedit > 0)
            {
                $this->session->set_flashdata('save_ss2','เพิ่มข้อมูลปริญญานิพนธ์นักศึกษาเรียบร้อยแล้ว !!.');
            }
            else
            {
                $this->session->set_flashdata('del_ss2','ไม่สามารถเพิ่มข้อมูลปริญญานิพนธ์นักศึกษาได้');
            }
            return redirect('index');
    }

    public function thesis_edit()
    {
      
        if ($this->session->userdata('code_student') != '') {
           
            $this->load->view('option/header');
            $this->load->view('thesis_edit');
            $this->load->view('option/footer'); 
        } else {
            $this->load->view('login');
        }
          
        
    }

    public function thesis_edit_com()
    {  
        
        $id = $this->input->post('id');

         $this->load->library('upload');
      
        // |xlsx|pdf|docx
        $config['upload_path'] = './uploads/thesis';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['max_size']     = '200480';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $name_file = "thesis-".time();
        $config['file_name'] = $name_file;

        $this->upload->initialize($config);

        $data = array();

          
        if (empty($_FILES['file_name']['name'])) 
        {
            $data = array
            (
               
                'title'         => $this->input->post('title') , 
                'composer'   => $this->input->post('composer') , 
                'board'   => $this->input->post('board') , 
                'subject'   => $this->input->post('subject') , 
                'branch'          => $this->input->post('branch') , 
                'year'          => $this->input->post('year') , 
                'keyword'          => $this->input->post('keyword') , 
                'create_at'     => date('Y-m-d H:i:s') 

               
            );
        }
        else
        {

            if ($_FILES['file_name']['name']) {           
                if ($this->upload->do_upload('file_name')){

                    $gamber     = $this->upload->data();
                    $data = array
                    (
                        'file_name'     => $gamber['file_name'],
                        'title'         => $this->input->post('title') , 
                        'composer'   => $this->input->post('composer') , 
                        'board'   => $this->input->post('board') , 
                        'subject'   => $this->input->post('subject') , 
                        'branch'          => $this->input->post('branch') , 
                        'year'          => $this->input->post('year') , 
                        'keyword'          => $this->input->post('keyword') , 
                        'create_at'     => date('Y-m-d H:i:s') 

                        
                    );

                }
            }

        }
            $this->db->where('id', $id);
            $resultsedit = $this->db->update('tbl_thesis',$data);

            if($resultsedit > 0)
            {
                $this->session->set_flashdata('save_ss2','เพิ่มข้อมูลปริญญานิพนธ์นักศึกษาเรียบร้อยแล้ว !!.');
            }
            else
            {
                $this->session->set_flashdata('del_ss2','ไม่สามารถเพิ่มข้อมูลปริญญานิพนธ์นักศึกษาได้');
            }
            return redirect('index');
    }
    public function  delete_thesis()
    {
        $id = $this->input->get('id');
       

        $this->db->where('id', $id);
        $resultsedit = $this->db->delete('tbl_thesis', ['id' => $id]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully  ลบข้อมูลเรียบร้อยแล้ว  !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully  ไม่สามารถลบข้อมูลได้ !!.');
        }
        return redirect('index');
    }


}
