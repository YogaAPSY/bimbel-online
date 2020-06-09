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

	public function riwayat()
	{

		if (isset($_FILES) && !empty($_FILES)) {
			if ($this->security->xss_clean($_FILES, TRUE) === FALSE) {
				// file failed the XSS test

				$this->session->set_flashdata('abort', 'Upload Error');

				redirect(base_url('siswa/riwayat'));
			} else {

				$this->uploadFoto('./assets/bukti_pembayaran/', $_FILES);
			}
		} else {
			$id = $this->session->userdata('id_user');
			$data['title'] = 'riwayat';
			$data['layout'] = 'riwayat';
			$data['riwayat'] = $this->siswa_model->riwayat($id);

			$this->load->view('layout', $data);
		}
	}

	private function uploadFoto($directory, $files)
	{
		$user_id = $this->session->userdata('user_id');

		// $old_image = $data['user_info']['image'];
		if (!empty($files['name'])) {

			$config = array(
				'upload_path' => $directory,
				'allowed_types' => "jpg|png|gif|JPG|Jpeg|PNG|GIF|JPEG",
				'overwrite' => TRUE,
				'max_size' => "548000" // Can be set to particular file size , here it is 0.5 MB(548 Kb)
			);

			$new_name = time() . $files['name'];
			$config['file_name'] = $new_name;


			$this->load->library('upload', $config);
			$this->image->initialize($config);

			if ($this->image->do_upload('upload')) {

				$file_data = array('upload_data' => $this->image->data());
				$dataImage =  'uploads/profile/user/' . $file_data['upload_data']['file_name'];

				// if ($old_image != 'uploads/profile/user/user.png' && $dataImage != $old_image) {

				// 	unlink(FCPATH . $old_image);
				// }

				$this->db->where('id', $user_id);
				$this->db->update('xx_users', ['image' => $dataImage]);
			} else {
				$data['file_error'] = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('file_error', 'Error! Please select a valid file formate');
				redirect(base_url('profile'));
			}
		}
		// end upload user image code		
	}

	private function uploadFile($name, $files)
	{


		//upload user image


		if ($name == 'userfile') {
			$this->uploadResume("./uploads/resume/", $files['userfile'], $name);
		} elseif ($name == 'userfilesupport') {
			$this->uploadAttachment("./uploads/attachment/", $files['userfilesupport'], $name);
		} elseif ($name == 'userimage') {
			$this->uploadFoto("./uploads/profile/user/", $files['userimage'], $name);
		} elseif ($name == 'usercertificate') {
			$this->uploadCertificate("./uploads/certificate/", $files['usercertificate'], $name);
		} else {
			// $data['file_error'] = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('file_error', 'Error! Please select a valid file formate');
			redirect(base_url('profile/my_profile/finish'));
		}
	}
}
