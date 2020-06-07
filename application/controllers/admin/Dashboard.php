<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('admin/auth_model', 'auth_model');
		// $this->load->library('mailer'); // load custom mailer library
	}


	// login functionality
	public function index()
	{
		$this->load->view('admin/dashboard');
	}
}
