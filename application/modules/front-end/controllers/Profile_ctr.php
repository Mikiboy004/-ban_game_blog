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
			$this->load->view('profile',$data);
			$this->load->view('option/footer');
		}
	}
}
