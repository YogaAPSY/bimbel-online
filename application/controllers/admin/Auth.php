<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model', 'auth_model');
		$this->load->library('mailer'); // load custom mailer library
	}


	// login functionality
	public function login()
	{
		// // redirected to last request page
		// if ($this->session->userdata('is_user_login') == TRUE) {
		// 	// redirect('profile', 'refresh');
		// } elseif ($this->session->userdata('is_admin_login') == TRUE) {
		// 	// redirect('employers/profile', 'refresh');
		// }

		if ($this->input->post('login')) {

			$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[3]');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata('error_login', $data['errors']);
				redirect(base_url('auth/login'), 'refresh');
			} else {
				$data = array(
					'username' => $this->security->xss_clean($this->input->post('username')),
					'password' => $this->security->xss_clean($this->input->post('password'))
				);


				$result = $this->auth_model->login($data);
				//over data user ke session
				$data_user = $this->auth_model->data_user($data['username']);

				//echo json_encode($result);
				$verification = $this->auth_model->is_verify($data);

				if ($verification == false) {
					$this->session->set_flashdata('error_login', $data['username'] . ' sudah tidak aktif, hubungi admin untuk mengaktifkan kembali.');
					redirect(base_url('auth/login', 'refresh'));
				} else {
					if ($result) {
						$login_data = array(
							'id_user' => $data_user['id_user'],
							'email' => $data_user['email'],
							'username' => $data_user['username'],
							'nama' => $data_user['nama'],
							'is_user_login' => TRUE
						);

						$this->session->set_userdata($login_data);

						$user_id = $this->session->userdata('id_user');

						redirect(base_url('profile'), 'refresh');
					} else {
						$this->session->set_flashdata('error_login', 'Email atau Password yang anda masukkan salah.');
						redirect(base_url('admin/auth/login'), 'refresh');
					}
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
		redirect(base_url(), 'refresh');
	}
}
