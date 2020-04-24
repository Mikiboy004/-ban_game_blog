<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load facebook library
        $this->load->library('Facebook');
        $this->load->model('user');
    }

    public function index()
    {
        if ($this->session->userdata('username') == '') {
            // Login Facebook
            $userData = array();

            // Check if user is logged in
            if ($this->facebook->is_authenticated()) {
                // Get user facebook profile details
                $fbUser = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,picture');

                // Preparing data for database insertion
                $userData['oauth_provider'] = 'facebook';
                $userData['oauth_uid']    = !empty($fbUser['id']) ? $fbUser['id'] : '';;
                $userData['first_name']    = !empty($fbUser['first_name']) ? $fbUser['first_name'] : '';
                $userData['last_name']    = !empty($fbUser['last_name']) ? $fbUser['last_name'] : '';
                $userData['email']        = !empty($fbUser['email']) ? $fbUser['email'] : '';
                //$userData['gender']        = !empty($fbUser['gender']) ? $fbUser['gender'] : '';
                $userData['file_name']    = !empty($fbUser['picture']['data']['url']) ? $fbUser['picture']['data']['url'] : '';
                //$userData['link']        = !empty($fbUser['link']) ? $fbUser['link'] : '';

                // Insert or update user data
                $userID = $this->user->checkUser($userData);

                // Check user data insert or update status
                if (!empty($userID)) {
                    $data['userData'] = $userData;
                    $this->session->set_userdata('username', $userData['first_name'].' '.$userData['last_name']);
                } else {
                    $data['userData'] = array();
                }

                // Get logout URL
                $data['logoutURL'] = $this->facebook->logout_url();
            } else {
                // Get login URL
                $data['authURL'] =  $this->facebook->login_url();
            }

            if ($this->session->userdata('username') != '') {
                redirect('index');
            }
            $this->load->view('option/header');
            $this->load->view('login',$data);
            $this->load->view('option/footer');
        } else {
            redirect('index');
        }
    }

    public function loginMe()
    {
        //user ปกติ
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->load->model('Login_model');
        $result = [];

        if (!empty($username) && !empty($password)) {

            if ($this->Login_model->login($username, $password)) {
                $user_data = array(
                    'username' => $username
                );

                $this->session->set_userdata($user_data);
                $result['successfully'] = true;
                $result['message'] = 'login success';
                echo json_encode($result);
                exit();
            } else {
                $result['successfully'] = false;
                $result['message'] = 'password not found';
                echo json_encode($result);
                exit();
            }
        

        
        }
    }

    public function logout()
    {
        // Remove local Facebook session
        $this->facebook->destroy_session();

        $this->session->sess_destroy(); //ล้างsession

        redirect('index'); //กลับไปหน้า Login
    }

    public function register()
    {

        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');
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
                    'email'      => $email,
                    'tel'        => $tel,
                    'username'   => $username,
                    'password'   => md5($confirm_repassword),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'file_name'  => $gamber['file_name'],
                ];

                $success = $this->db->insert('tbl_user', $data);
                if ($success > 0) {
                    $result['successfully'] = true;
                    $result['message'] = 'register success';
                    echo json_encode($result);
                } else {
                    $result['successfully'] = false;
                    $result['message'] = 'register error';
                    echo json_encode($result);
                }
            }
        }
    }
}
