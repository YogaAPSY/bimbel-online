<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/auth_model', 'auth_model');
		$this->load->library('mailer'); // load custom mailer library
	}


	// login functionality
	public function login()
	{
		// redirected to last request page
		if ($this->session->userdata('is_user_login') == TRUE) {
			redirect('home', 'refresh');
		} elseif ($this->session->userdata('is_admin_login') == TRUE) {
			redirect('admin/kelas', 'refresh');
		}

		if ($this->input->post('login')) {

			$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[3]');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata('abort', $data['errors']);
				redirect(base_url('admin/auth/login'), 'refresh');
			} else {
				$data = array(
					'username' => $this->security->xss_clean($this->input->post('username')),
					'password' => $this->security->xss_clean($this->input->post('password'))
				);


				$result = $this->auth_model->login($data);
				//over data user ke session
				$data_user = $this->auth_model->data_user($data['username']);


				if ($result) {
					$login_data = array(
						'id_admin' => $data_user['id_admin'],
						'username' => $data_user['username'],
						'nama' => $data_user['nama'],
						'status' => $data_user['status'],
						'is_admin_login' => TRUE
					);

					$this->session->set_userdata($login_data);

					$user_id = $this->session->userdata('id_admin');
					$this->session->set_flashdata('message', 'Anda telah berhasil Sign In!.');
					redirect(base_url('admin/dashboard'), 'refresh');
				} else {
					$this->session->set_flashdata('abort', 'Username atau Password yang anda masukkan salah.');
					redirect(base_url('admin/auth/login'), 'refresh');
				}
			}
		} else {
			$data['title'] = 'Login';

			$this->load->view('admin/login_admin', $data);
		}
	}



	//----------------------------------------------------------------------------
	// Logout Function
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('admin/auth/login'), 'refresh');
	}
}
