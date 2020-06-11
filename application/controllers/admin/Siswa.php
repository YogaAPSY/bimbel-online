<?php defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/siswa_model', 'siswa_model');
		// redirected to last request page
		if ($this->session->userdata('is_user_login') == TRUE) {
			redirect('home');
		} elseif (!$this->session->userdata('is_admin_login') && !$this->session->userdata('is_user_login')) {
			redirect('admin/auth/login');
		}
	}

	public function index()
	{
		$data['title'] = 'Siswa';
		$data['list_siswa'] = $this->siswa_model->siswa();
		// var_dump($data['list_siswa']);
		// exit();
		$data['layout'] = 'admin/siswa/list_siswa';
		$this->load->view('admin/layout_admin', $data);
	}

	public function make_active($id)
	{
		$result = $this->siswa_model->make_active($id);

		if ($result) {
			// $this->session->set_flashdata('message', 'Berhasil! Pembayaran berhasil di konfirmasi');
			redirect(base_url('admin/siswa/pendaftar/'), 'refresh');
		}
	}

	public function make_inactive($id)
	{
		$result = $this->siswa_model->make_inactive($id);

		if ($result) {
			// $this->session->set_flashdata('message', 'Berhasil! Pembayaran berhasil di konfirmasi');
			redirect(base_url('admin/siswa/pendaftar/'), 'refresh');
		}
	}

	public function detail_siswa($id)
	{
		$data['title'] = 'Siswa';
		// $data['list_siswa'] = $this->siswa_model->list_siswa();
		$data['detail'] = $this->siswa_model->detail_siswa($id);

		$data['layout'] = 'admin/siswa/detail';
		$this->load->view('admin/layout_admin', $data);
	}

	public function edit_siswa($id)
	{
		if ($this->input->post('edit_siswa')) {


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
				'trim|required',
				array(
					'required'    => '%s Harap diisi!',

					'valid_email' => 'Masukkan email yang valid %s',
					'min_length'  => '%s minimal 5 karakter!' //edited by wahid
				)
			);
			$this->form_validation->set_rules(
				'password',
				'Password',
				'trim|required',
				array(
					'required'   => '%s Harap diisi!',
					'min_length' => '%s minimal 3 karakter!' //edited by wahid
				)
			);
			$this->form_validation->set_rules(
				'con_pass',
				'Confirm Password',
				'trim|required|matches[password]',
				array(
					'required'   => '%s Harap diisi!',
					'matches'	 => '%s tidak sama!',
					'min_length' => '%s minimal 3 karakter!' //edited by wahid
				)
			);

			$this->form_validation->set_rules('no_hp', 'no_hp', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'trim|required');
			$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'trim|required');
			$this->form_validation->set_rules('umur', 'umur', 'trim|required');
			$this->form_validation->set_rules('pendidikan', 'pendidikan', 'trim|required');
			$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
			$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');



			if ($this->form_validation->run() == FALSE) {

				$data['title'] = 'Edit User';
				$data['layout'] = 'admin/siswa/edit_siswa/';

				$this->load->view('admin/layout_admin', $data);
			} else {
				$data = array(

					'nama' => $this->security->xss_clean($this->input->post('nama')),
					'no_hp' => $this->security->xss_clean($this->input->post('no_hp')),
					'tempat_lahir' => $this->security->xss_clean($this->input->post('tempat_lahir')),
					'tanggal_lahir' => $this->security->xss_clean($this->input->post('tanggal_lahir')),
					'umur' => $this->security->xss_clean($this->input->post('umur')),
					'pendidikan' => $this->security->xss_clean($this->input->post('pendidikan')),
					'jenis_kelamin' => $this->security->xss_clean($this->input->post('jenis_kelamin')),
					'alamat' => $this->security->xss_clean($this->input->post('alamat')),

				);

				$data2 = array(

					'nama' => $this->security->xss_clean($this->input->post('nama')),

					'email' => $this->security->xss_clean($this->input->post('email')),

					'password' => $this->security->xss_clean(password_hash($this->input->post('password'), PASSWORD_BCRYPT)),

				);

				// var_dump($data2);
				// exit();

				$result = $this->siswa_model->update_user($data2, $id);
				$result2 = $this->siswa_model->update_profile($data, $id);
				if ($result && $result2) {
					$this->session->set_flashdata('message', '<p class="alert alert-success">you are successfully registerd! Please check your email to activated account</p>');
					redirect(base_url('admin/siswa'), 'refresh');
				} else {
					$this->session->set_flashdata('abort', '<p class="alert alert-success">you are successfully registerd! Please check your email to activated account</p>');
					redirect(base_url('admin/siswa/edit_siswa/' . $id), 'refresh');
				}
			}
		} else {
			// $data['jenis_kelas'] = get_kelas();
			$data['jenis_kelamin'] = get_jenis_kelamin();
			$data['detail'] = $this->siswa_model->detail_siswa($id);
			// var_dump($data['detail']);
			// exit();
			$data['title'] = 'Edit Siswa';
			$data['layout'] = 'admin/siswa/edit_siswa';
			$this->load->view('admin/layout_admin', $data);
		}
	}

	public function pendaftar()
	{
		$data['title'] = 'Siswa';
		$data['list_siswa'] = $this->siswa_model->list_siswa();
		// var_dump($data['list_siswa']);
		// exit();
		$data['layout'] = 'admin/siswa/list_pendaftar';
		$this->load->view('admin/layout_admin', $data);
	}


	public function detail($id)
	{
		$data['title'] = 'Siswa';
		// $data['list_siswa'] = $this->siswa_model->list_siswa();
		$data['detail'] = $this->siswa_model->detail($id);

		$data['layout'] = 'admin/siswa/detail_siswa';
		$this->load->view('admin/layout_admin', $data);
	}

	public function konfirmasi($id)
	{

		$result = $this->siswa_model->do_confirm($id);

		if ($result) {
			$this->session->set_flashdata('message', 'Berhasil! Pembayaran berhasil di konfirmasi');
			redirect(base_url('admin/siswa/detail/' . $id), 'refresh');
		}
	}

	public function laporan()
	{

		$data['title'] = 'Laporan';
		$data['list_laporan'] = $this->siswa_model->list_laporan();

		$data['layout'] = 'admin/siswa/laporan_siswa';
		$this->load->view('admin/layout_admin', $data);
	}

	public function filter_laporan()
	{

		if ($this->input->post('submit')) {

			$start = $this->input->post('start');
			$to = $this->input->post('end');

			$data['list_laporan'] = $this->siswa_model->list_laporan($start, $to);

			$data['title'] = 'Laporan';

			$data['layout'] = 'admin/siswa/laporan_siswa';
			$this->load->view('admin/layout_admin', $data);
		}
	}

	public function delete_pendaftar($id = 0)
	{

		$this->siswa_model->delete_pendaftaran($id);
		$this->session->set_flashdata('message', 'Kelas berhasil dihapus!');
		redirect(base_url('admin/siswa/'));
	}
}
