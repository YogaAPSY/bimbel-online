<?php defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('admin/kelas_model', 'kelas_model');
	}

	public function index()
	{
		$data['title'] = 'Laporan';
		$data['layout'] = 'admin/siswa/laporan_siswa';
		$this->load->view('admin/layout_admin', $data);
	}
}
