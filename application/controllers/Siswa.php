<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model', 'siswa_model');
	}

	public function index()
	{
		$data['title'] = 'Siswa';
		$data['layout'] = 'siswa';
		$this->load->view('layout', $data);
	}

	public function profile()
	{
		if ($this->session->userdata('is_admin_login') == TRUE) {
			redirect('admin/dashboard', 'refresh');
		} elseif (!$this->session->userdata('is_admin_login') && !$this->session->userdata('is_user_login')) {
			redirect('auth/login');
		}

		$data['title'] = 'Siswa Profile';
		$data['profile'] = $this->siswa_model->profile();

		$data['layout'] = 'siswa';
		$this->load->view('layout', $data);
	}

	public function invoice($id)
	{
		if ($this->session->userdata('is_admin_login') == TRUE) {
			redirect('admin/dashboard', 'refresh');
		} elseif (!$this->session->userdata('is_admin_login') && !$this->session->userdata('is_user_login')) {
			redirect('auth/login');
		}

		try {
			$user_id = $this->session->userdata('id_user');
			$data['invoice'] = $this->siswa_model->data_invoice($id);
			// $data['ak1_status'] = $this->profile_model->get_ak1_status_by_id($user_id);
			// var_dump($data['invoice']);
			// exit();
			require_once $_SERVER['DOCUMENT_ROOT'] . '/bimbel-online/vendor/autoload.php';

			$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);

			$data1 = $this->load->view('invoice', $data,  true);

			$mpdf->WriteHTML($data1);
			// Other code

			$mpdf->Output("Kartu-Invoice.pdf", 'I');
		} catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception name used for catch
			// Process the exception, log, print etc.
			// var_dump($mpdf);

			echo $e->getMessage();
		}
	}

	public function riwayat()
	{

		if ($this->session->userdata('is_admin_login') == TRUE) {
			redirect('admin/dashboard', 'refresh');
		} elseif (!$this->session->userdata('is_admin_login') && !$this->session->userdata('is_user_login')) {
			redirect('auth/login');
		}

		$upload = "";
		if ($this->input->post('submit')) {

			if (isset($_FILES) && !empty($_FILES)) {
				if ($this->security->xss_clean($_FILES, TRUE) === FALSE) {
					// file failed the XSS test

					$this->session->set_flashdata('abort', 'Upload Error');

					redirect(base_url('siswa/riwayat'));
				} else {

					$upload = $this->uploadFoto('./assets/upload/bukti_pembayaran/', $_FILES, $this->input->post('id_pendaftaran'));
				}
			}

			if (!empty($upload)) {
				$this->session->set_flashdata('abort', 'Upload Gagal');
				redirect(base_url('siswa/riwayat'));
			} else {
				$this->session->set_flashdata('message', 'Upload Berhasil');
				redirect(base_url('siswa/riwayat'));
			}
		} else {
			$id = $this->session->userdata('id_user');
			$data['title'] = 'riwayat';
			$data['layout'] = 'riwayat';
			$data['riwayat'] = $this->siswa_model->riwayat($id);

			$this->load->view('layout', $data);
		}
	}

	private function uploadFoto($directory, $files, $id)
	{

		$user_id = $this->session->userdata('id_user');

		// $old_image = $data['user_info']['image'];
		if (!empty($files['file']['name'])) {
			$kode = get_nomor_pendaftaran($id);
			$config = array(
				'upload_path' => $directory,
				'allowed_types' => "jpg|png|gif|jpeg|JPG|Jpeg|PNG|GIF|JPEG",
				'overwrite' => TRUE,
				'max_size' => "848000" // Can be set to particular file size , here it is 0.5 MB(548 Kb)
			);

			$new_name =  $user_id . $kode . str_replace("image/", ".", $files['file']['type']);
			$config['file_name'] = $new_name;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('file')) {

				$file_data = array('upload_data' => $this->upload->data());
				$dataImage =  $file_data['upload_data']['file_name'];

				// if ($old_image != 'uploads/profile/user/user.png' && $dataImage != $old_image) {

				// 	unlink(FCPATH . $old_image);
				// }

				$this->db->where('id_pendaftaran', $id);
				$this->db->update('xx_pendaftaran', ['bukti_pembayaran' => $dataImage, 'status_pembayaran' => 2]);
			} else {
				$data['file_error'] = array('error' => $this->upload->display_errors());

				var_dump($data['file_error']);
				exit();
				$this->session->set_flashdata('abort', 'Error! Please select a valid file formate');
				redirect(base_url('siswa/riwayat'));
			}
		}
		// end upload user image code		
	}
}
