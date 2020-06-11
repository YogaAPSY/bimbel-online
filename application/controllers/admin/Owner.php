<?php defined('BASEPATH') or exit('No direct script access allowed');

class Owner extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/kelas_model', 'kelas_model');

		if ($this->session->userdata('is_user_login') == TRUE) {
			redirect('home');
		} elseif (!$this->session->userdata('is_admin_login') && !$this->session->userdata('is_user_login')) {
			redirect('admin/auth/login');
		}
	}

	public function index()
	{
		$data['title'] = 'Owner';
		// $data['list_kelas'] = $this->kelas_model->list_kelas();

		$data['layout'] = 'admin/owner/list_user';
		$this->load->view('admin/layout_admin');
	}
}
