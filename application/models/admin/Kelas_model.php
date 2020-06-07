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
		$this->db->where($id, 'xx_kelas.id_kelas');
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
}
