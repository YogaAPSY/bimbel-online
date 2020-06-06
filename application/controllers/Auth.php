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
			$data['layout'] = 'auth/login_page';
			$this->load->view('layout', $data);
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
				'nik',
				'Nomor Induk Kepegawaian',
				'trim|required|is_unique[xx_users.nik]|min_length[16]',
				array(
					'is_unique'	=> '%s  anda sudah terdaftar!',
					'min_length' => '%s kurang dari 16 digit'
				)
			);
			$this->form_validation->set_rules(
				'nama_depan',
				'nama_depan',
				'trim|required',
				array(
					'required'   => '%s Harap diisi!',
				)
			);
			$this->form_validation->set_rules(
				'nama_belakang',
				'nama_belakang',
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
			// $this->form_validation->set_rules(
			// 	'termsncondition',
			// 	'Syarat & Ketentuan',
			// 	'required',
			// 	array(
			// 		'required'   => '%s Harap dicentang!' //edited by wahid
			// 	)
			// );


			if ($this->form_validation->run() == FALSE) {
		
				$data['title'] = 'Registration';
				$data['layout'] = 'auth/registration_page';
				$this->load->view('layout', $data);
			} else {
				$rand_no = rand(0, 1000);
				$verify_code = md5($rand_no);

				$data = array(
					'nik' => $this->security->xss_clean($this->input->post('nik')),
					'nama_depan' => $this->security->xss_clean($this->input->post('nama_depan')),
					'nama_belakang' => $this->security->xss_clean($this->input->post('nama_belakang')),
					'email' => $this->security->xss_clean($this->input->post('email')),
					'token' => $verify_code,
					'password' => $this->security->xss_clean(password_hash($this->input->post('password'), PASSWORD_BCRYPT)),
					'created_at' => date('Y-m-d : h:m:s')
				);



				$result = $this->->auth_model->insert_into_users($data);


				$email = $this->input->post('email');
				$response = $this->auth_model->check_user_mail($email); // check if email exist
				if ($response) {
					// --- sending email
					$name = $response['nama_depan'] . ' ' . $response['nama_belakang'];
					$email = $response['email'];
					$verify_link = base_url('auth/verify/?email=' . $email . '&token=' . $verify_code);
					$body = $this->mailer->registration_email($name, $verify_link);

					$this->load->helper('email_helper');
					$to = $email;
					$subject = 'Verification your Email';
					$message =  $body;
					$email = sendEmail($to, $subject, $message, $file = '', $cc = '');
					if ($email) {
						$this->session->set_flashdata('registration_success', '<p class="alert alert-success">you are successfully registerd! Please check your email to activated account</p>');
						redirect(base_url('auth/login'), 'refresh');
					}
				}
			}
		} else {
			$data['title'] = 'Registration';
			$data['layout'] = 'auth/registration_page';
			$this->load->view('layout', $data);
		}
	}

	//verifikasi email
	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('xx_users', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('xx_users', ['token' => $token])->row_array();
			if ($user_token) {
				$now = new datetime();
				$expire = strtotime('+1 days');
				$created = strtotime($user['created_at']);
				//jika token melebihi satu hari maka akan expired
				if ($now - $created < $expire) {
					$this->auth_model->email_verification($token);

					$this->session->set_flashdata('registration_success', '<div class="alert alert-success" role="alert">
						' . $email . '. Berhasil diverifikasi silahkan login.</div>');
					redirect('auth/login');
				} else {
					$this->db->delete('xx_users', ['email' => $email]);

					$this->session->set_flashdata('registration_success', '<div class="alert alert-danger" role="alert">
						Token Expired. </div>');
					redirect('auth/login');
				}
			} else {
				$this->session->set_flashdata('registration_success', '<div class="alert alert-danger" role="alert">
					Acount activation failed! wrong token. </div>');
				redirect('auth/login');
			}
		} else {
			$this->session->set_flashdata('registration_success', '<div class="alert alert-danger" role="alert">
				Acount activation failed! wrong email. </div>');
			redirect('auth/login');
		}
	}


	//--------------------------------------------------		
	public function forgot_password()
	{
		// redirected to last request page
		if ($this->session->userdata('is_user_login') == TRUE) {
			// redirect('profile', 'refresh');
		} elseif ($this->session->userdata('is_admin_login') == TRUE) {
			// redirect('employers/profile', 'refresh');
		}

		if ($this->input->post('submit')) {
			//checking server side validation
			$this->form_validation->set_rules('email', 'Email', 'valid_email|trim|required');
			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors(),
				);
				$this->session->set_flashdata('error', $data['errors']);
				redirect(base_url('auth/forgot_password'));
			}
			$email = $this->input->post('email');

			$response = $this->auth_model->check_user_mail($email); // check if email exist
			if ($response) {
				$rand_no = rand(0, 1000);
				$pwd_reset_code = md5($rand_no . $response['id_user']);
				$this->auth_model->update_reset_code($pwd_reset_code, $response['email']);

				// --- sending email
				$name = $response['nama_depan'] . ' ' . $response['lastname'];
				$email = $response['email'];
				$reset_link = base_url('auth/reset_password/' . $pwd_reset_code);
				$body = $this->mailer->pwd_reset_link($name, $reset_link);

				$this->load->helper('email_helper');
				$to = $email;
				$subject = 'Reset your password';
				$message =  $body;
				$email = sendEmail($to, $subject, $message, $file = '', $cc = '');
				if ($email) {
					$this->session->set_flashdata('success', 'Terima kasih! cek email anda guna mengatur ulang kata sandi Anda.');

					redirect(base_url('auth/forgot_password'));
				} else {
					$this->session->set_flashdata('error', 'Terdapat kesalahan dalam email anda');
					redirect(base_url('auth/forgot_password'));
				}
			} else {
				$this->session->set_flashdata('error', 'Email anda tidak terdaftar');
				redirect(base_url('auth/forgot_password'));
			}
		} else {
			$data['title'] = 'Forget Password';
			$data['layout'] = 'auth/forget_password_page';
			$this->load->view('layout', $data);
		}
	}

	//----------------------------------------------------------------		
	public function reset_password($id = 0)
	{
		// redirected to last request page
		if (empty($this->uri->uri_to_assoc(3)) && $this->session->userdata('is_user_login') == FALSE) {
			// redirect('auth/login');
		} elseif (empty($this->uri->uri_to_assoc(3)) && $this->session->userdata('is_admin_login') == FALSE) {
			// redirect('employers/auth/login');
		}

		// redirected to last request page
		if ($this->session->userdata('is_user_login') == TRUE) {
			// redirect('profile', 'refresh');
		} elseif ($this->session->userdata('is_admin_login') == TRUE) {
			// redirect('employers/profile', 'refresh');
		}
		// check the activation code in database
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
			$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');

			if ($this->form_validation->run() == FALSE) {
				$result = false;
				$data['reset_code'] = $id;
				$data['title'] = 'Reseat Password';
				$data['layout'] = 'auth/reset_password_page';
				$this->load->view('layout', $data);
			} else {
				$new_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
				$this->auth_model->reset_password($id, $new_password);
				$this->session->set_flashdata('success', 'New password has been Updated successfully.Please login below');
				redirect(base_url('auth/login'));
			}
		} else {
			$result = $this->auth_model->check_password_reset_code($id);
			if ($result) {
				$data['reset_code'] = $id;
				$data['title'] = 'Reset Password';
				$data['layout'] = 'auth/reset_password_page';
				$this->load->view('layout', $data);
			} else {
				$this->session->set_flashdata('error', 'Password Reset Code is either invalid or expired.');
				redirect(base_url('auth/forgot_password'));
			}
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
