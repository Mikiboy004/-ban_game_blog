<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model');
    }

    public function blog_detail()
    {
        $id                         = base64_decode($this->input->get('id'));
        $data['detail']             = $this->Blog_model->blog_detail($id);
        $data['comments']           = $this->Blog_model->blog_comment($id);
        $data['related']            = $this->Blog_model->blog_related();
        if (empty($id)) {
            echo "<script>";
            echo "alert('กรุณาเลือกหัวข้อ BLOG ที่ต้องการก่อนเข้าหน้านี้.');";
            echo "window.location='index';";
            echo "</script>";
        } else {
            $this->load->view('option/header');
            $this->load->view('blog_detail', $data);
            $this->load->view('option/footer');
        }
    }

    public function blog_post()
    {
        $user               = $this->session->userdata('username');

        if (!empty($user)) {
            $this->load->view('option/header');
            $this->load->view('blog_post');
            $this->load->view('option/footer');
        } else {
            echo "<script>";
            echo "alert('กรุณาเข้าสู่ระบบก่อนเข้าหน้านี้.');";
            echo "window.location='login';";
            echo "</script>";
        }
    }

    public function blog_post_add()
    {
        $user               = $this->session->userdata('username');
        $userId             = $this->db->get_where('tbl_user', ['username' => $user])->ror_array();
        $topic              = $this->input->post('topic');
        $detail             = $this->input->post('detail');

        $this->load->library('upload');

        if (!empty($user)) {
            // |xlsx|pdf|docx
            $config['upload_path'] = 'uploads/post/';
            $config['allowed_types'] = '*';
            $config['max_size']     = '200480';
            $config['max_width'] = '5000';
            $config['max_height'] = '5000';
            $name_file = "post-" . time();
            $config['file_name'] = $name_file;

            $this->upload->initialize($config);

            $data = array();

            if ($_FILES['file']['name']) {
                if ($this->upload->do_upload('file')) {

                    $gamber     = $this->upload->data();
                    $data = array(

                        'topic'             => $topic,
                        'detail'            => $detail,
                        'file_name'         => $gamber['file_name'],
                        'date_post'         => date('Y-m-d H:i:s'),
                        'created_at'        => date('Y-m-d H:i:s'),
                        'id_user'           => $userId['id_user'],
                    );
                    if ($this->db->insert('tbl_pdf', $data)) {
                        echo "<script>";
                        echo "alert('บันทึกข้อมูลเสร็จสิ้น รอผู้ดูแลระบบอนุมัติ.');";
                        echo "window.location='index';";
                        echo "</script>";
                    } else {
                        echo "<script>";
                        echo "alert('เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง.');";
                        echo "window.location='blog_post';";
                        echo "</script>";
                    }
                }
            }
        } else {
            echo "<script>";
            echo "alert('คุณไม่ได้รับสิทธิ์ในการเข้าถึงหน้านี้.');";
            echo "window.location='index';";
            echo "</script>";
        }
    }
}
