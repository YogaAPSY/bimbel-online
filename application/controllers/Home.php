<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Home';
		$data['layout'] = 'landing';
		$this->load->view('layout', $data);
	}

	public function tentang()
	{
		$data['title'] = 'tentang';
		$data['layout'] = 'tentang';
		$this->load->view('layout', $data);
	}

	public function kursus()
	{
		$data['title'] = 'kursus';
		$data['layout'] = 'kursus';
		$this->load->view('layout', $data);
	}

	public function harga()
	{
		$data['title'] = 'harga';
		$data['layout'] = 'harga';
		$this->load->view('layout', $data);
	}

	public function kontak()
	{
		$data['title'] = 'kontak';
		$data['layout'] = 'kontak';
		$this->load->view('layout', $data);
	}
}
