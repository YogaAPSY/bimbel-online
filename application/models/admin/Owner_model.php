<?php defined('BASEPATH') or exit('No direct script access allowed');

class Owner_model extends CI_Model
{

	// registraion
	public function insert_into_admin($data)
	{
		$this->db->insert('xx_admin', $data);
		return true;
	}

	// login function
	public function edit_into_admin($data, $id)
	{
		$this->db->where('id_admin', $id);
		$this->db->update('xx_admin', $data);
		return true;
	}

	public function detail_admin($id)
	{
		$this->db->select('*');
		$this->db->from('xx_admin');
		$this->db->where('id_admin', $id);
		$this->db->order_by('id_admin', 'asc');
		$query = $this->db->get();
		return $query->row_array();
	}

	public function list_admin()
	{
		$this->db->select('*');
		$this->db->from('xx_admin');
		$this->db->order_by('id_admin', 'asc');
		$query = $this->db->get();
		return $query->result_array();
	}
}
