<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/auth_model', 'auth_model');
		// $this->load->library('mailer'); // load custom mailer library
		if ($this->session->userdata('is_user_login') == TRUE) {
			redirect('home');
		} elseif (!$this->session->userdata('is_admin_login') && !$this->session->userdata('is_user_login')) {
			redirect('admin/auth/login');
		}
	}


	// login functionality
	public function index()
	{
		$data['title'] = 'dashboard';
		$data['total_user'] = $this->auth_model->total('xx_users');
		$data['total_kelas'] = $this->auth_model->total('xx_kelas');
		$data['total_pendaftar'] = $this->auth_model->total('xx_pendaftaran');
		$data['total_admin'] = $this->auth_model->total('xx_admin');
		$data['layout'] = 'admin/dashboard';
		$this->load->view('admin/layout_admin', $data);
	}
}
