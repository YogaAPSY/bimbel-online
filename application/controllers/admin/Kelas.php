<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/kelas_model', 'kelas_model');
	}

	public function index()
	{
		$data['title'] = 'Kelas';
		$data['list_kelas'] = $this->kelas_model->list_kelas();

		$data['layout'] = 'admin/kelas/list_kelas';
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
				'jenis_kelas',
				'Jenis Kelas',
				'trim|required',
				array(
					'required'    => '%s harus diisi!' //edited by wahid
				)
			);

			$this->form_validation->set_rules('jadwal_kelas', 'Jadwal Kelas', 'trim|required');


			if ($this->form_validation->run() == FALSE) {


				$data['title'] = 'Add Kelas';
				$data['layout'] = 'admin/add_kelas';
				$this->load->view('admin/layout_admin', $data);
			} else {
				$data = array(
					'kode_kelas' => $this->security->xss_clean(get_kode_jenis_kelas($this->input->post('jenis_kelas'))),
					'jenis_kelas' => $this->security->xss_clean($this->input->post('jenis_kelas')),
					'jadwal_kelas' => $this->security->xss_clean($this->input->post('jadwal_kelas')),
					'judul_kelas' => $this->security->xss_clean($this->input->post('judul_kelas')),
					'deskripsi_kelas' => $this->security->xss_clean($this->input->post('deskripsi_kelas')),
					'created_at' => date('Y-m-d : h:m:s'),

				);

				$result = $this->kelas_model->insert_kelas($data);
				if ($result) {
					$this->session->set_flashdata('post_job_success', 'Congratulation! Job has been Posted successfully');
					redirect(base_url('admin/kelas/list_kelas'));
				} else {
					$this->session->set_flashdata('post_job_error', 'Failed');
					redirect(base_url('admin/kelas/add_kelas'));
				}
			}
		} else {
			$data['jenis_kelas'] = get_jenis_kelas();

			$data['title'] = 'Add Kelas';
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
				'jenis_kelas',
				'Jenis Kelas',
				'trim|required',
				array(
					'required'    => '%s harus diisi!' //edited by wahid
				)
			);

			$this->form_validation->set_rules('jadwal_kelas', 'Jadwal Kelas', 'trim|required');


			if ($this->form_validation->run() == FALSE) {


				$data['title'] = 'Edit Kelas';
				$data['layout'] = 'admin/edit_kelas';
				$this->load->view('admin/layout_admin', $data);
			} else {
				$data = array(
					'kode_kelas' => $this->security->xss_clean(get_kode_jenis_kelas($this->input->post('jenis_kelas'))),
					'jenis_kelas' => $this->security->xss_clean($this->input->post('jenis_kelas')),
					'jadwal_kelas' => $this->security->xss_clean($this->input->post('jadwal_kelas')),
					'judul_kelas' => $this->security->xss_clean($this->input->post('judul_kelas')),
					'deskripsi_kelas' => $this->security->xss_clean($this->input->post('deskripsi_kelas')),
					'created_at' => date('Y-m-d : h:m:s'),

				);

				$result = $this->kelas_model->update_kelas($data, $id);
				if ($result) {
					$this->session->set_flashdata('post_job_success', 'Congratulation! Job has been Posted successfully');
					redirect(base_url('admin/kelas/list_kelas'));
				} else {
					$this->session->set_flashdata('post_job_error', 'Failed');
					redirect(base_url('admin/kelas/add_kelas'));
				}
			}
		} else {

			$data['title'] = 'Add Kelas';
			$data['layout'] = 'admin/kelas/edit_kelas';
			$this->load->view('admin/layout_admin', $data);
		}
	}

	public function delete_kelas($id)
	{
		$this->kelas_model->delete_kelas($id);
		$this->session->set_flashdata('post_job_success', 'Congratulation! Job has been Posted successfully');
		redirect(base_url('admin/kelas/list_kelas'));
	}
}
