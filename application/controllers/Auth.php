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
		// redirected to last request page
		if ($this->session->userdata('is_user_login') == TRUE) {
			// redirect('profile', 'refresh');
		} elseif ($this->session->userdata('is_admin_login') == TRUE) {
			// redirect('employers/profile', 'refresh');
		}


		if ($this->input->post('login')) {
			$this->form_validation->set_rules('email', 'email', 'trim|required|min_length[3]|valid_email');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[3]');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata('error_login', $data['errors']);
				redirect(base_url('auth/login'), 'refresh');
			} else {
				$data = array(
					'email' => $this->security->xss_clean($this->input->post('email')),
					'password' => $this->security->xss_clean($this->input->post('password'))
				);


				$result = $this->auth_model->login($data);
				//over data user ke session
				$data_user = $this->auth_model->data_user($data['email']);

				//echo json_encode($result);
				$verification = $this->auth_model->is_verify($data);
				if ($verification == false) {
					$this->session->set_flashdata('error_login', $data['email'] . ' belum di verifikasi atau email dan password salah.');
					redirect(base_url('auth/login', 'refresh'));
				}

				if ($result) {
					$login_data = array(
						'id_user' => $data_user['id_user'],
						'email' => $data_user['email'],
						'nik' => $data_user['nik'],
						'nama_depan' => $data_user['nama_depan'],
						'is_user_login' => TRUE
					);

					$this->session->set_userdata($login_data);

					$user_id = $this->session->userdata('id_user');

					redirect(base_url('profile'), 'refresh');
				} else {
					$this->session->set_flashdata('error_login', 'Email atau Password yang anda masukkan salah.');
					redirect(base_url('auth/login'), 'refresh');
				}
			}
		} else {
			$data['title'] = 'Login';

			$this->load->view('login', $data);
		}
	}

	public function registration()
	{
		// redirected to last request page
		if ($this->session->userdata('is_user_login') == TRUE) {
			// redirect('profile', 'refresh');
		} elseif ($this->session->userdata('is_admin_login') == TRUE) {
			// redirect('employers/profile', 'refresh');
		}

		if ($this->input->post('submit')) {

			$this->form_validation->set_rules(
				'username',
				'username',
				'trim|required|is_unique[xx_users.username]',
				array(
					'is_unique'	=> '%s sudah terdaftar!',
				)
			);
			$this->form_validation->set_rules(
				'nama',
				'nama',
				'trim|required',
				array(
					'required'   => '%s Harap diisi!',
				)
			);

			$this->form_validation->set_rules(
				'email',
				'Email',
				'trim|required|min_length[5]|valid_email|is_unique[xx_users.email]',
				array(
					'required'    => '%s Harap diisi!',
					'is_unique'   => '%s sudah terdaftar, gunakan Email lain!',
					'valid_email' => 'Masukkan email yang valid %s',
					'min_length'  => '%s minimal 5 karakter!' //edited by wahid
				)
			);
			$this->form_validation->set_rules(
				'password',
				'Password',
				'trim|required|min_length[3]',
				array(
					'required'   => '%s Harap diisi!',
					'min_length' => '%s minimal 3 karakter!' //edited by wahid
				)
			);
			$this->form_validation->set_rules(
				'confirmpassword',
				'Confirm Password',
				'trim|required|min_length[3]|matches[password]',
				array(
					'required'   => '%s Harap diisi!',
					'matches'	 => '%s tidak sama!',
					'min_length' => '%s minimal 3 karakter!' //edited by wahid
				)
			);


			if ($this->form_validation->run() == FALSE) {

				$data['title'] = 'Registration';

				$this->load->view('register', $data);
			} else {
				$rand_no = rand(0, 1000);
				$verify_code = md5($rand_no);

				$data = array(
					'username' => $this->security->xss_clean($this->input->post('username')),
					'nama' => $this->security->xss_clean($this->input->post('nama')),

					'email' => $this->security->xss_clean($this->input->post('email')),
					'token' => $verify_code,
					'password' => $this->security->xss_clean(password_hash($this->input->post('password'), PASSWORD_BCRYPT)),
					'created_at' => date('Y-m-d : h:m:s')
				);


				$result = $this->auth_model->insert_into_users($data);

				if ($result) {
					$this->session->set_flashdata('registration_success', '<p class="alert alert-success">you are successfully registerd! Please check your email to activated account</p>');
					redirect(base_url('auth/login'), 'refresh');
				} else {
					$this->session->set_flashdata('registration_failed', '<p class="alert alert-success">you are successfully registerd! Please check your email to activated account</p>');
					redirect(base_url('auth/register'), 'refresh');
				}
			}
		} else {
			$data['title'] = 'Registration';

			$this->load->view('register', $data);
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
