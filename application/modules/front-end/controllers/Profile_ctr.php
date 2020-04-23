<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profile_model');
	}

	public function profile()
	{
		$user               = $this->session->userdata('username');
		$userId				= $this->db->get_where('tbl_user', ['username' => $user])->row_array();
		$Id					= $userId['id_user'];
		$data['userlist']	= $this->Profile_model->profile($Id);

		if (empty($user)) {
			echo "<script>";
			echo "alert('คุณไม่ได้รับสิทธิ์ในการเข้าถึงหน้านี้.');";
			echo "window.location='index';";
			echo "</script>";
		} else {
			$this->load->view('option/header');
			$this->load->view('profile', $data);
			$this->load->view('option/footer');
		}
	}

	public function edit_profile()
	{
		$user  = $this->session->userdata('username');
		if (empty($user)) {
			echo "<script>";
			echo "alert('คุณไม่ได้รับสิทธิ์ในการเข้าถึงหน้านี้.');";
			echo "window.location='index';";
			echo "</script>";
			exit();
		}

		$id_user = $this->input->post('id_user');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$id_card = $this->input->post('id_card');
		$address = $this->input->post('address');
		$birthday = $this->input->post('birthday');
		$birthday = explode('/', $birthday);
		$email = $this->input->post('email');
		$line_id = $this->input->post('line_id');
		if ($line_id == '') {
			$line_id = null;
		}
		$tel = $this->input->post('tel');
		$username = $this->input->post('username');


		$this->db->where_not_in('id_user', [$id_user]);
		$checkId_card = $this->db->get_where('tbl_user', ['id_card' => $id_card])->row_array();
		if (!empty($checkId_card)) {
			$this->session->set_flashdata('checkEdit_profileId_card', TRUE);
			redirect('profile');
			exit();
		}
		$this->db->where_not_in('id_user', [$id_user]);
		$checkEmail = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
		if (!empty($checkEmail)) {
			$this->session->set_flashdata('checkEdit_profileEmail', TRUE);
			redirect('profile');
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
				$deletePath = $this->db->get_where('tbl_user', ['id_user' => $id_user])->row_array();
				unlink('./uploads/user/' . $deletePath['file_name']);
				$gamber     = $this->upload->data();
				$data = [
					'first_name' =>  $first_name,
					'last_name'  => $last_name,
					'id_card'    => $id_card,
					'address'    => $address,
					'birthday'   => $birthday[2] . '-' . $birthday[1] . '-' . $birthday[0],
					'email'      => $email,
					'line_id'    => $line_id,
					'tel'        => $tel,
					'updated_at' => date('Y-m-d H:i:s'),
					'file_name'  => $gamber['file_name'],
				];
				$this->db->where('id_user', $id_user);
				$success = $this->db->update('tbl_user', $data);
				if ($success > 0) {
					$this->session->set_flashdata('edit_profileSuccess', TRUE);
					redirect('profile');
				} else {
					$this->session->set_flashdata('edit_profileFail', TRUE);
					redirect('profile');
				}
			}
		} else {
			$data = [
				'first_name' =>  $first_name,
				'last_name'  => $last_name,
				'id_card'    => $id_card,
				'address'    => $address,
				'birthday'   => $birthday[2] . '-' . $birthday[1] . '-' . $birthday[0],
				'email'      => $email,
				'line_id'    => $line_id,
				'tel'        => $tel,
				'updated_at' => date('Y-m-d H:i:s'),
			];
			$this->db->where('id_user', $id_user);
			$success = $this->db->update('tbl_user', $data);
			if ($success > 0) {
				$this->session->set_flashdata('edit_profileSuccess', TRUE);
				redirect('profile');
			} else {
				$this->session->set_flashdata('edit_profileFail', TRUE);
				redirect('profile');
			}
		}
	}

	public function edit_password()
	{
		$user  = $this->session->userdata('username');
		if (empty($user)) {
			echo "<script>";
			echo "alert('คุณไม่ได้รับสิทธิ์ในการเข้าถึงหน้านี้.');";
			echo "window.location='index';";
			echo "</script>";
			exit();
		}

		$id_user = $this->input->post('id_user');
		$old_password = $this->input->post('old_password');
		$old_password = md5($old_password);
		$new_password = $this->input->post('new_password');
		$confirm_new_password = $this->input->post('confirm_new_password');

		$userCheck = $this->db->get_where('tbl_user', ['id_user' => $id_user])->row_array();
		if ($userCheck['password'] != $old_password) {
			$this->session->set_flashdata('old_passwordCheck', TRUE);
			redirect('profile');
		}
		if ($new_password != $confirm_new_password) {
			$this->session->set_flashdata('newPasswordCheck', TRUE);
			redirect('profile');
		}

		$data = [
			'password'        => md5($confirm_new_password),
			'updated_at' 	  => date('Y-m-d H:i:s'),
		];
		$this->db->where('id_user', $id_user);
		$success = $this->db->update('tbl_user', $data);
		if ($success > 0) {
			$this->session->set_flashdata('edit_profileSuccess', TRUE);
			redirect('profile');
		} else {
			$this->session->set_flashdata('edit_profileFail', TRUE);
			redirect('profile');
		}
	}
}
