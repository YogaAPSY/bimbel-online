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
}
