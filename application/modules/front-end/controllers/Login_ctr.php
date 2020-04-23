<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('username') == '') {
            $this->load->view('option/header');
            $this->load->view('login');
            $this->load->view('option/footer');
        } else {
            redirect('index');
        }
    }

    public function loginMe()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->load->model('Login_model');
        $result = [];

        if ($this->Login_model->login($username, $password)) {
            $user_data = array(
                'username' => $username
            );

            $this->session->set_userdata($user_data);
            $result['successfully'] = true;
            $result['message'] = 'login success';
            echo json_encode($result);
        } else {
            $result['successfully'] = false;
            $result['message'] = 'password not found';
            echo json_encode($result);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy(); //ล้างsession

        redirect('index'); //กลับไปหน้า Login
    }

    public function register()
    {

        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $id_card = $this->input->post('id_card');
        $address = $this->input->post('address');
        $birthday = $this->input->post('birthday');
        $birthday = explode('/',$birthday);
        $email = $this->input->post('email');
        $line_id = $this->input->post('line_id');
        if ($line_id == '') {
            $line_id = null;
        }
        $tel = $this->input->post('tel');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $confirm_repassword = $this->input->post('confirm_repassword');

        $result = [];
        if ($password != $confirm_repassword) {
            $result['successfully'] = false;
            $result['message'] = 'password not match';
            exit();
        }
        $checkId_card = $this->db->get_where('tbl_user', ['id_card' => $id_card])->row_array();
        if (!empty($checkId_card)) {
            $result['successfully'] = false;
            $result['message'] = 'unavailable id card';
            echo json_encode($result);
            exit();
        }
        $checkEmail = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
        if (!empty($checkEmail)) {
            $result['successfully'] = false;
            $result['message'] = 'unavailable email';
            echo json_encode($result);
            exit();
        }
        $checkUsername = $this->db->get_where('tbl_user', ['username' => $username])->row_array();
        if (!empty($checkUsername)) {
            $result['successfully'] = false;
            $result['message'] = 'unavailable username';
            echo json_encode($result);
            exit();
        }

        $this->load->library('upload');
        // |xlsx|pdf|docx
        $config['upload_path'] = 'uploads/user/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '200480';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $name_file = "profile-" . time();
        $config['file_name'] = $name_file;

        $this->upload->initialize($config);

        if ($_FILES['file_name']['name']) {
            if ($this->upload->do_upload('file_name')) {

                $gamber     = $this->upload->data();
                $data = [
                    'first_name' =>  $first_name,
                    'last_name'  => $last_name,
                    'id_card'    => $id_card,
                    'address'    => $address,
                    'birthday'   => $birthday[2].'-'.$birthday[1].'-'.$birthday[0],
                    'email'      => $email,
                    'line_id'    => $line_id,
                    'tel'        => $tel,
                    'username'   => $username,
                    'password'   => md5($confirm_repassword),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'file_name'  => $gamber['file_name'],
                ];

                $success = $this->db->insert('tbl_user',$data);
                if ($success > 0) {
                    $result['successfully'] = true;
                    $result['message'] = 'register success';
                    echo json_encode($result);
                }else{
                    $result['successfully'] = false;
                    $result['message'] = 'register error';
                    echo json_encode($result);
                }
            }
        }
        
    }
}
