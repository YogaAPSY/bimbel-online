<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/auth_model', 'auth_model');
	}


	// login functionality
	public function login()
	{
		// redirected to last request page
		if ($this->session->userdata('is_user_login') == TRUE) {
			// redirect('profile', 'refresh');
		} elseif ($this->session->userdata('is_admin_login') == TRUE) {
			// redirect('employers/profile', 'refresh');
		}

		if ($this->input->post('login')) {
			$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[3]');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata('error_login', $data['errors']);
				redirect(base_url('admin/auth/login'), 'refresh');
			} else {
				$data = array(
					'email' => $this->security->xss_clean($this->input->post('username')),
					'password' => $this->security->xss_clean($this->input->post('password'))
				);


				$result = $this->auth_model->login($data);
				//over data user ke session
				$data_user = $this->auth_model->data_user($data['email']);

				//echo json_encode($result);

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

					redirect(base_url('admin/dashboard'), 'refresh');
				} else {
					$this->session->set_flashdata('error_login', 'username atau Password yang anda masukkan salah.');
					redirect(base_url('admin/auth/login'), 'refresh');
				}
			}
		} else {
			$data['title'] = 'Login';
			$data['layout'] = 'admin/auth/login_page';
			$this->load->view('layout', $data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
}
