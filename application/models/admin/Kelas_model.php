<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{


	// login function
	public function insert_kelas($data)
	{
		$this->db->insert('xx_kelas', $data);
		return true;
	}

	// login function
	public function update_kelas($data, $id)
	{
		$this->db->where('id_kelas', $id);
		$this->db->update('xx_kelas', $data);
		return true;
	}

	public function list_kelas()
	{
		$this->db->select('*');
		$this->db->from('xx_kelas');
		$this->db->order_by('id_kelas', 'asc');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function detail_kelas($id)
	{
		$this->db->select('*');
		$this->db->from('xx_kelas');
		$this->db->where('id_kelas', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function list_siswa($id)
	{
		$this->db->select('xx_pendaftaran.id_kelas, xx_pendaftaran.id_pendaftaran, xx_pendaftaran.status ,xx_pendaftaran.created_at, xx_users.nama,, xx_profile.no_hp, xx_pendaftaran.status_pembayaran');
		$this->db->from('xx_pendaftaran');
		$this->db->join('xx_users', 'xx_users.id_user = xx_pendaftaran.id_user');
		$this->db->join('xx_profile', 'xx_profile.id_user = xx_users.id_user');
		$this->db->where('xx_pendaftaran.id_kelas', $id);
		$this->db->order_by('xx_pendaftaran.created_at', 'desc');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result_array();
	}

	// login function
	public function delete_kelas($id)
	{
		$this->db->where('id_kelas', $id);
		$this->db->delete('xx_kelas');
		return true;
	}

	public function delete_pendaftaran($id)
	{
		$this->db->where('id_kelas', $id);
		$this->db->delete('xx_pendaftaran');
		return true;
	}
}
