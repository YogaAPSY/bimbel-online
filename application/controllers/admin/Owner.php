<?php defined('BASEPATH') or exit('No direct script access allowed');

class Owner extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/owner_model', 'owner_model');

		if ($this->session->userdata('is_user_login') == TRUE) {
			redirect('home');
		} elseif (!$this->session->userdata('is_admin_login') && !$this->session->userdata('is_user_login')) {
			redirect('admin/auth/login');
		} elseif ($this->session->userdata('is_admin_login') == TRUE && $this->session->userdata('status') != 2) {
			redirect('admin/dashboard');
		}
	}


	public function index()
	{
		$data['title'] = 'admin';

		$data['list_admin'] = $this->owner_model->list_admin();

		$data['layout'] = 'admin/owner/list_user';
		$this->load->view('admin/layout_admin', $data);
	}

	public function add_user()
	{
		if ($this->input->post('add_user')) {

			$this->form_validation->set_rules(
				'username',
				'username',
				'trim|required|min_length[3]|is_unique[xx_users.username]',
				array(
					'required'    => '%s harus diisi!',
					'is_unique'	=> '%s ini sudah terdaftar!',
					'min_length'  => '%s minimal 3 karakter!',
				)
			);
			$this->form_validation->set_rules(
				'password',
				'password',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!',
				)
			);
			$this->form_validation->set_rules(
				'con_pass',
				'Confirm Password',
				'trim|required|min_length[3]|matches[password]',
				array(
					'required'   => '%s Harap diisi!',
					'matches'	 => '%s tidak sama!',
					'min_length' => '%s minimal 3 karakter!' //edited by wahid
				)
			);
			$this->form_validation->set_rules(
				'nama',
				'nama',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!' //edited by wahid
				)
			);
			$this->form_validation->set_rules(
				'status',
				'status',
				'trim|required',
				array(
					'required'    => '%s harus diisi!' //edited by wahid
				)
			);


			if ($this->form_validation->run() == FALSE) {

				$data = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata('abort', $data['errors']);
				$data['title'] = 'admin';
				$data['layout'] = 'admin/owner/add_user';

				$this->load->view('admin/layout_admin', $data);
			} else {
				$data = array(
					'username' => $this->security->xss_clean($this->input->post('username')),

					'status' => $this->security->xss_clean($this->input->post('status')),
					'nama' => $this->security->xss_clean($this->input->post('nama')),
					'created_by' => $this->session->userdata('nama'),
					'password' => $this->security->xss_clean(password_hash($this->input->post('password'), PASSWORD_BCRYPT)),
					'created_at' => date('Y-m-d : h:m:s')

				);



				$result = $this->owner_model->insert_into_admin($data);

				if ($result) {
					$this->session->set_flashdata('message', 'Akun berhasil dibuat!');
					redirect(base_url('admin/owner'), 'refresh');
				} else {
					$this->session->set_flashdata('abort', 'Akun gagal dibuat!');
					redirect(base_url('admin/owner/add_user'), 'refresh');
				}
			}
		} else {
			// $data['jenis_kelas'] = get_kelas();

			$data['title'] = 'admin';
			$data['layout'] = 'admin/owner/add_user';
			$this->load->view('admin/layout_admin', $data);
		}
	}

	public function edit_user($id)
	{
		if ($this->input->post('edit_user')) {


			$this->form_validation->set_rules(
				'password',
				'password',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!',
				)
			);
			$this->form_validation->set_rules(
				'con_pass',
				'Confirm Password',
				'trim|required|min_length[3]|matches[password]',
				array(
					'required'   => '%s Harap diisi!',
					'matches'	 => '%s tidak sama!',
					'min_length' => '%s minimal 3 karakter!' //edited by wahid
				)
			);
			$this->form_validation->set_rules(
				'nama',
				'nama',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!' //edited by wahid
				)
			);
			$this->form_validation->set_rules(
				'status',
				'status',
				'trim|required',
				array(
					'required'    => '%s harus diisi!' //edited by wahid
				)
			);


			if ($this->form_validation->run() == FALSE) {

				$data = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata('abort', $data['errors']);
				$data['title'] = 'admin';
				$data['layout'] = 'admin/owner/edit_user';

				$this->load->view('admin/layout_admin', $data);
			} else {
				$data = array(
					'username' => $this->security->xss_clean($this->input->post('username')),

					'status' => $this->security->xss_clean($this->input->post('status')),
					'nama' => $this->security->xss_clean($this->input->post('nama')),
					'created_by' => $this->session->userdata('nama'),
					'password' => $this->security->xss_clean(password_hash($this->input->post('password'), PASSWORD_BCRYPT)),
					'created_at' => date('Y-m-d : h:m:s')

				);



				$result = $this->owner_model->edit_into_admin($data, $id);

				if ($result) {
					$this->session->set_flashdata('message', 'you are successfully registerd! Please check your email to activated account');
					redirect(base_url('admin/owner'), 'refresh');
				} else {
					$this->session->set_flashdata('abort', 'you are successfully registerd! Please check your email to activated account');
					redirect(base_url('admin/owner/edit_user/' . $id), 'refresh');
				}
			}
		} else {
			// $data['jenis_kelas'] = get_kelas();
			$data['detail'] = $this->owner_model->detail_admin($id);
			$data['title'] = 'admin';
			$data['layout'] = 'admin/owner/edit_user';
			$this->load->view('admin/layout_admin', $data);
		}
	}
}
