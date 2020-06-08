<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Siswa';
		$data['layout'] = 'siswa';
		$this->load->view('layout', $data);
	}

	public function pembayaran()
	{
		$data['title'] = 'Pembayaran';
		$data['layout'] = 'pembayaran';
		$this->load->view('layout', $data);
	}
}
