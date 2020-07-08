<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/kelas_model', 'kelas_model');

		if ($this->session->userdata('is_user_login') == TRUE) {
			redirect('home');
		} elseif (!$this->session->userdata('is_admin_login') && !$this->session->userdata('is_user_login')) {
			redirect('admin/auth/login');
		} elseif ($this->session->userdata('is_admin_login') == TRUE && $this->session->userdata('status') != 1) {
			redirect('admin/dashboard');
		}
	}

	public function index()
	{

		$data['title'] = 'kelas';
		$data['list_kelas'] = $this->kelas_model->list_kelas();

		$data['layout'] = 'admin/kelas/list_kelas';
		$this->load->view('admin/layout_admin', $data);
	}

	public function kelas_siswa($id)
	{
		$data['title'] = 'kelas';
		$data['list_siswa'] = $this->kelas_model->list_siswa($id);
		$data['nama_kelas'] = get_nama_kelas($id);
		$data['layout'] = 'admin/siswa/list_pendaftar';
		$this->load->view('admin/layout_admin', $data);
	}

	public function add_kelas()
	{

		if ($this->input->post('add_kelas')) {

			$this->form_validation->set_rules(
				'kode_kelas',
				'Kode Kelas',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!',
				)
			);
			$this->form_validation->set_rules(
				'judul_kelas',
				'Judul Kelas',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!',
				)
			);
			$this->form_validation->set_rules(
				'deskripsi_kelas',
				'Deskripsi Kelas',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!' //edited by wahid
				)
			);
			$this->form_validation->set_rules(
				'harga_kelas',
				'Harga Kelas',
				'trim|required',
				array(
					'required'    => '%s harus diisi!' //edited by wahid
				)
			);

			$this->form_validation->set_rules('biaya_pendaftaran', 'Jadwal Kelas', 'trim|required');
			$this->form_validation->set_rules('jadwal_kelas', 'Jadwal Kelas', 'trim|required');
			$this->form_validation->set_rules('waktu_kelas', 'Waktu Kelas', 'required');

			if ($this->form_validation->run() == FALSE) {


				$data['title'] = 'kelas';
				$data['layout'] = 'admin/add_kelas';

				$this->load->view('admin/layout_admin', $data);
			} else {
				$string = str_replace('.', ',', $this->input->post('harga_kelas')); // Replaces all spaces with hyphens.

				$harga_kelas = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

				$string2 = str_replace('.', ',', $this->input->post('biaya_pendaftaran'));

				$biaya_pendaftaran = preg_replace('/[^A-Za-z0-9\-]/', '', $string2);
				$data = array(
					'kode_kelas' => $this->security->xss_clean($this->input->post('kode_kelas')),
					'harga_kelas' => $this->security->xss_clean($harga_kelas),
					'biaya_pendaftaran' => $this->security->xss_clean($biaya_pendaftaran),
					'jadwal_kelas' => $this->security->xss_clean($this->input->post('jadwal_kelas')),
					'judul_kelas' => $this->security->xss_clean($this->input->post('judul_kelas')),
					'deskripsi_kelas' => $this->security->xss_clean($this->input->post('deskripsi_kelas')),
					'waktu_kelas' => $this->security->xss_clean($this->input->post('waktu_kelas')),
					'created_by' => $this->session->userdata('nama'),
					'created_at' => date('Y-m-d'),

				);



				$result = $this->kelas_model->insert_kelas($data);
				if ($result) {
					$this->session->set_flashdata('message', 'Berhasil');
					redirect(base_url('admin/kelas'));
				} else {
					$this->session->set_flashdata('abort', 'Failed');
					redirect(base_url('admin/kelas/add_kelas'));
				}
			}
		} else {
			// $data['jenis_kelas'] = get_kelas();

			$data['title'] = 'kelas';
			$data['layout'] = 'admin/kelas/add_kelas';
			$this->load->view('admin/layout_admin', $data);
		}
	}

	public function edit_kelas($id)
	{

		if ($this->input->post('edit_kelas')) {

			$this->form_validation->set_rules(
				'kode_kelas',
				'Kode Kelas',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!',
				)
			);
			$this->form_validation->set_rules(
				'judul_kelas',
				'Judul Kelas',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!',
				)
			);
			$this->form_validation->set_rules(
				'deskripsi_kelas',
				'Deskripsi Kelas',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!' //edited by wahid
				)
			);
			$this->form_validation->set_rules(
				'harga_kelas',
				'Harga Kelas',
				'trim|required',
				array(
					'required'    => '%s harus diisi!' //edited by wahid
				)
			);

			$this->form_validation->set_rules('jadwal_kelas', 'Jadwal Kelas', 'trim|required');
			$this->form_validation->set_rules('waktu_kelas', 'Waktu Kelas', 'required');
			$this->form_validation->set_rules('biaya_pendaftaran', 'Biaya Pendaftaran', 'required');



			if ($this->form_validation->run() == FALSE) {

				$data['title'] = 'kelas';
				$data['layout'] = "admin/edit_kelas/" . $id;
				$this->load->view('admin/layout_admin', $data);
			} else {
				$string = str_replace('.', ',', $this->input->post('harga_kelas')); // Replaces all spaces with hyphens.

				$harga_kelas = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

				$string2 = str_replace('.', ',', $this->input->post('biaya_pendaftaran'));

				$biaya_pendaftaran = preg_replace('/[^A-Za-z0-9\-]/', '', $string2);
				$data = array(
					'kode_kelas' => $this->security->xss_clean($this->input->post('kode_kelas')),
					'harga_kelas' => $this->security->xss_clean($harga_kelas),
					'biaya_pendaftaran' => $this->security->xss_clean($biaya_pendaftaran),
					'jadwal_kelas' => $this->security->xss_clean($this->input->post('jadwal_kelas')),
					'judul_kelas' => $this->security->xss_clean($this->input->post('judul_kelas')),
					'deskripsi_kelas' => $this->security->xss_clean($this->input->post('deskripsi_kelas')),
					'waktu_kelas' => $this->security->xss_clean($this->input->post('waktu_kelas')),
					'created_by' => $this->session->userdata('nama'),
					'updated_at' => date('Y-m-d'),

				);

				$result = $this->kelas_model->update_kelas($data, $id);

				if ($result) {
					$this->session->set_flashdata('message', 'Berhasil');
					redirect(base_url('admin/kelas'));
				} else {

					$this->session->set_flashdata('abort', 'Failed');
					redirect(base_url("admin/kelas/edit_kelas/" . $id));
				}
			}
		} else {

			$data['title'] = 'kelas';
			$data['kelas'] = $this->kelas_model->detail_kelas($id);

			$data['layout'] = "admin/kelas/edit_kelas";
			$this->load->view('admin/layout_admin', $data);
		}
	}

	public function delete_kelas($id = 0)
	{
		$this->kelas_model->delete_kelas($id);
		$this->kelas_model->delete_pendaftaran($id);
		$this->session->set_flashdata('message', 'Kelas berhasil dihapus!');
		redirect(base_url('admin/kelas/'));
	}
}
