<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/auth_model', 'auth_model');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['layout'] = 'admin/auth/dashboard_page';
		$this->load->view('layout', $data);
	}

	public function add_kelas()
	{
		if ($this->input->post('add_kelas')) {
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
				'jenis_kelas',
				'Jenis Kelas',
				'trim|required',
				array(
					'required'    => '%s harus diisi!' //edited by wahid
				)
			);
			$this->form_validation->set_rules(
				'mulai_kelas',
				'Mulai Kelas',
				'trim|required',
				array(
					'required'    => '%s harus diisi!' //edited by wahid
				)
			);
			$this->form_validation->set_rules(
				'selesai_kelas',
				'Selesai Kelas',
				'trim|required',
				array(
					'required'    => '%s harus diisi!' //edited by wahid
				)
			);
			$this->form_validation->set_rules('expired_pendaftaran', 'Expired Pendaftaran', 'trim|required');
			$this->form_validation->set_rules('kuota', 'Kuota', 'trim|required');
			$this->form_validation->set_rules('jadwal_kelas', 'Jadwal Kelas', 'trim|required');


			if ($this->form_validation->run() == FALSE) {


				$data['title'] = 'Add Kelas';
				$data['layout'] = 'admin/add_kelas';
				$this->load->view('admin/layout', $data);
			} else {
				$data = array(
					'kode_kelas' => $this->security->xss_clean(get_kode_jenis_kelas($this->input->post('jenis_kelas'))),
					'jenis_kelas' => $this->security->xss_clean($this->input->post('jenis_kelas')),
					'mulai_kelas' => $this->security->xss_clean($this->input->post('mulai_kelas')), // helper function
					'selesai_kelas' => $this->security->xss_clean($this->input->post('selesai_kelas')),
					'expired_pendaftaran' => $this->security->xss_clean($this->input->post('expired_pendaftaran')),
					'kuota' => $this->security->xss_clean($this->input->post('kuota')),
					'jadwal_kelas' => $this->security->xss_clean($this->input->post('jadwal_kelas')),
					'judul_kelas' => $this->security->xss_clean($this->input->post('judul_kelas')),
					'deskripsi_kelas' => $this->security->xss_clean($this->input->post('deskripsi_kelas')),
					'created_at' => date('Y-m-d : h:m:s'),

				);
				$data['job_slug'] = $this->make_job_slug($this->input->post('job_title'), $this->input->post('city'));

				$data = $this->security->xss_clean($data);

				//check apakah sudah melengkapi profile

				if ($this->job_model->check_updated_profile($emp_id) && $this->job_model->check_updated_company($emp_id)) {
					$result = $this->job_model->add_job($data);
					if ($result) {
						$this->session->set_flashdata('post_job_success', 'Congratulation! Job has been Posted successfully');
						redirect(base_url('employers/job/post'));
					} else {
						$this->session->set_flashdata('post_job_error', 'Failed');
						redirect(base_url('employers/job/post'));
					}
				} else {
					$this->session->set_flashdata('post_job_error', 'Anda belum melengkapi data pada profile anda!');
					redirect(base_url('employers/job/post'));
				}
			}
		} else {
			$emp_id = $this->session->userdata('employer_id');
			$data['kecmtn']       = $this->DbMasyarakat_model_new->getData("xx_kecamatan", [], "sinaga")->result();
			$data['kelurahan'] = $this->DbMasyarakat_model_new->getData("xx_kelurahan", ["id_kecamatan LIKE " => "1671%"], "sinaga")->result(); // KELURAHAN di palembang saja
			$data['total_pelamar'] = $this->job_model->get_total_pelamar($emp_id);
			$data['foto'] = $this->common_model->get_profile_image_emp($emp_id);
			$data['emp_info'] = $this->profile_model->get_employer_by_id($emp_id);
			$data['emp_sidebar'] = 'themes/employers/emp_sidebar'; // load sidebar for employer
			$data['title'] = 'Post New Job';
			$data['layout'] = 'themes/employers/jobs/post_job_page';
			$this->load->view('themes/layout', $data);
		}
	}
}
