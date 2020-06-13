<?php defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
	public function riwayat($id)
	{
		$this->db->select('xx_kelas.harga_kelas, xx_kelas.biaya_pendaftaran, xx_pendaftaran.bukti_pembayaran, xx_pendaftaran.id_kelas, xx_kelas.waktu_kelas, xx_kelas.jadwal_kelas,xx_pendaftaran.id_pendaftaran, xx_pendaftaran.status ,xx_pendaftaran.created_at, xx_users.nama,, xx_profile.no_hp, xx_pendaftaran.status_pembayaran');
		$this->db->from('xx_pendaftaran');
		$this->db->join('xx_users', 'xx_users.id_user = xx_pendaftaran.id_user');
		$this->db->join('xx_profile', 'xx_profile.id_user = xx_users.id_user');
		$this->db->join('xx_kelas', 'xx_kelas.id_kelas = xx_pendaftaran.id_kelas');
		$this->db->where('xx_users.id_user', $id);
		$this->db->order_by('xx_pendaftaran.created_at', 'desc');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result_array();
	}

	public function data_invoice($id)
	{
		$this->db->select('xx_kelas.harga_kelas, xx_pendaftaran.admin_acc, xx_kelas.judul_kelas, xx_kelas.jadwal_kelas, xx_kelas.waktu_kelas,xx_kelas.biaya_pendaftaran, xx_kelas.kode_kelas, xx_pendaftaran.nomor_pendaftaran, xx_pendaftaran.id_kelas, xx_kelas.waktu_kelas, xx_kelas.jadwal_kelas,xx_pendaftaran.id_pendaftaran, xx_pendaftaran.status ,xx_pendaftaran.created_at, xx_users.nama,, xx_profile.no_hp, xx_pendaftaran.status_pembayaran');
		$this->db->from('xx_pendaftaran');
		$this->db->join('xx_users', 'xx_users.id_user = xx_pendaftaran.id_user');
		$this->db->join('xx_profile', 'xx_profile.id_user = xx_users.id_user');
		$this->db->join('xx_kelas', 'xx_kelas.id_kelas = xx_pendaftaran.id_kelas');
		$this->db->where('xx_pendaftaran.id_pendaftaran', $id);
		$this->db->order_by('xx_pendaftaran.created_at', 'desc');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->row_array();
	}

	public function profile()
	{
		$this->db->select('xx_users.nama, xx_users.email, xx_users.username, xx_users.id_user, xx_users.created_at as aktif,xx_profile.*');
		$this->db->from('xx_users');
		$this->db->join('xx_profile', 'xx_profile.id_user = xx_users.id_user');
		$this->db->where('xx_users.id_user', $this->session->userdata('id_user'));
		$this->db->order_by('xx_users.created_at', 'desc');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->row_array();
	}

	public function insert_profile($data, $id)
	{

		$query = $this->db->get_where('xx_profile', array('id_user' => $id));
		$result = $query->row_array();

		if ($result == null) {
			$this->db->insert('xx_profile', $data);
			return true;
		} else {
			$this->db->where('id_user', $data['id_user']);
			$this->db->update('xx_profile', $data);
			return true;
		}
	}
}
