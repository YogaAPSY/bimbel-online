<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

	// registraion
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

	public function insert_pendaftaran($data)
	{
		$this->db->insert('xx_pendaftaran', $data);
		return true;
	}

	public function check_already_regis($id, $id_kelas)
	{
		$this->db->select('*');
		$this->db->from('xx_pendaftaran');
		$this->db->where('id_user', $id);
		$this->db->where('id_kelas', $id_kelas);
		$this->db->where('status', 1);

		$query = $this->db->get();
		return $query->num_rows();
	}

	public function get_profile($id)
	{
		$this->db->select('*');
		$this->db->from('xx_profile');
		$this->db->where('id_user', $id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function total($from)
	{
		$this->db->select('*');
		$this->db->from($from);
		$query = $this->db->get();
		return $query->num_rows();
	}
}
