<?php defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
	public function riwayat($id)
	{
		$this->db->select('xx_pendaftaran.id_kelas, xx_kelas.waktu_kelas, xx_kelas.jadwal_kelas,xx_pendaftaran.id_pendaftaran, xx_pendaftaran.status ,xx_pendaftaran.created_at, xx_users.nama,, xx_profile.no_hp, xx_pendaftaran.status_pembayaran');
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
}
