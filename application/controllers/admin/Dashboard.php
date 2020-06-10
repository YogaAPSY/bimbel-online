<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('admin/auth_model', 'auth_model');
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
		$data['title'] = 'Dashboard';
		$data['layout'] = 'admin/dashboard';
		$this->load->view('admin/layout_admin', $data);
	}
}
