<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{


	// login function
	public function login($data)
	{
		$query = $this->db->get_where('xx_admin', array('username' => $data['username']));
		if ($query->num_rows() == 0) {
			return false;
		} else {
			//Compare the password attempt with the password we have stored.
			$result = $query->row_array();
			$validPassword = password_verify($data['password'], $result['password']);
			if ($validPassword) {
				return $result = $query->row_array();
			}
		}
	}

	// login function
	public function data_user($data)
	{
		$query = $this->db->get_where('xx_admin', array('username' => $data));
		if ($query->num_rows() == 0) {
			return false;
		} else {
			return $result = $query->row_array();
		}
	}

	public function total($from)
	{
		$this->db->select('*');
		$this->db->from($from);
		$query = $this->db->get();
		return $query->num_rows();
	}
}
