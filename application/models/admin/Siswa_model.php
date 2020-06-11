<?php defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{


	// login function
	public function list_siswa()
	{
		$this->db->select('xx_pendaftaran.id_kelas,xx_pendaftaran.id_pendaftaran, xx_pendaftaran.status ,xx_pendaftaran.created_at, xx_users.nama,, xx_profile.no_hp, xx_pendaftaran.status_pembayaran');
		$this->db->from('xx_pendaftaran');
		$this->db->join('xx_users', 'xx_users.id_user = xx_pendaftaran.id_user');
		$this->db->join('xx_profile', 'xx_profile.id_user = xx_users.id_user');
		// $this->db->where('xx_pendaftaran.status', 1);
		$this->db->order_by('xx_pendaftaran.created_at', 'desc');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result_array();
	}

	public function siswa()
	{
		$this->db->select('xx_users.nama, xx_users.email, xx_users.username, xx_users.id_user, xx_profile.*');
		$this->db->from('xx_users');

		$this->db->join('xx_profile', 'xx_profile.id_user = xx_users.id_user');
		// $this->db->where('xx_pendaftaran.status', 1);
		$this->db->order_by('xx_users.created_at', 'desc');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result_array();
	}


	public function list_laporan($start = null, $end = null)
	{
		$this->db->select('xx_pendaftaran.id_kelas, xx_kelas.harga_kelas as total_kelas, xx_kelas.biaya_pendaftaran as total_biaya,xx_pendaftaran.status ,xx_pendaftaran.created_at, xx_pendaftaran.status_pembayaran, xx_users.nama');
		$this->db->from('xx_pendaftaran');
		$this->db->join('xx_users', 'xx_users.id_user = xx_pendaftaran.id_user');
		$this->db->join('xx_profile', 'xx_profile.id_user = xx_users.id_user');
		$this->db->join('xx_kelas', 'xx_pendaftaran.id_kelas = xx_kelas.id_kelas');
		$this->db->where('xx_pendaftaran.status', 1);
		if ($start != null && $end != null) {
			$this->db->where('xx_pendaftaran.created_at >=', $start);
			$this->db->where('xx_pendaftaran.created_at  <=', $end);
		}
		$this->db->order_by('xx_pendaftaran.created_at', 'desc');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result_array();
	}


	public function delete_pendaftaran($id)
	{
		$this->db->where('id_kelas', $id);
		$this->db->delete('xx_pendaftaran');
		return true;
	}


	public function detail($id)
	{
		$this->db->select('xx_pendaftaran.bukti_pembayaran, xx_pendaftaran.id_kelas, xx_kelas.waktu_kelas, xx_kelas.jadwal_kelas,xx_pendaftaran.id_pendaftaran, xx_pendaftaran.status ,xx_pendaftaran.created_at, xx_users.nama, xx_pendaftaran.status_pembayaran, xx_profile.*');
		$this->db->from('xx_pendaftaran');
		$this->db->join('xx_users', 'xx_users.id_user = xx_pendaftaran.id_user');
		$this->db->join('xx_profile', 'xx_profile.id_user = xx_users.id_user');
		$this->db->join('xx_kelas', 'xx_kelas.id_kelas = xx_pendaftaran.id_kelas');
		$this->db->where('xx_pendaftaran.id_pendaftaran', $id);

		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->row_array();
	}

	public function detail_siswa($id)
	{
		$this->db->select('xx_users.nama, xx_users.email, xx_users.username, xx_users.id_user, xx_users.created_at as aktif,xx_profile.*');
		$this->db->from('xx_users');

		$this->db->join('xx_profile', 'xx_profile.id_user = xx_users.id_user');
		$this->db->where('xx_users.id_user', $id);
		$this->db->order_by('xx_users.created_at', 'desc');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->row_array();
	}
	public function do_confirm($id)
	{
		$this->db->where('id_pendaftaran', $id);
		$this->db->update('xx_pendaftaran', array('status_pembayaran' => 1, 'status' => 1, 'admin_acc' => $this->session->userdata('nama')));
		return true;
	}

	public function update_user($data, $id)
	{
		$this->db->where('id_user', $id);
		$this->db->update('xx_users', $data);
		return true;
	}

	public function update_profile($data, $id)
	{
		$this->db->where('id_profile', $id);
		$this->db->update('xx_profile', $data);
		return true;
	}
}
