<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Home';
		$data['layout'] = 'home/landing';
		$this->load->view('layout', $data);
	}

	public function tentang()
	{
		$data['title'] = 'tentang';
		$data['layout'] = 'home/tentang';
		$this->load->view('layout', $data);
	}

	public function kursus()
	{
		$data['title'] = 'kursus';
		$data['layout'] = 'home/kursus';
		$this->load->view('layout', $data);
	}

	public function harga()
	{
		$data['title'] = 'harga';
		$data['layout'] = 'home/harga';
		$this->load->view('layout', $data);
	}

	public function kontak()
	{
		$data['title'] = 'kontak';
		$data['layout'] = 'home/kontak';
		$this->load->view('layout', $data);
	}
}
