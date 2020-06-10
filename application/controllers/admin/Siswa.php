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
		$data['list_siswa'] = $this->siswa_model->list_siswa();
		// var_dump($data['list_siswa']);
		// exit();
		$data['layout'] = 'admin/siswa/list_siswa';
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

	public function make_active($id)
	{
	}

	public function make_inactive($id)
	{
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

			$data['list_laporan'] = $this->siswa_model->list_laporan_filter($start, $to);

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
