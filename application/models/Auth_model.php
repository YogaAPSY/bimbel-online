<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

	// registraion
	public function insert_into_users($data)
	{
		$this->db->insert('xx_users', $data);
		return true;
	}

	// login function
	public function login($data)
	{
		$query = $this->db->get_where('xx_users', array('username' => $data['username']));
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
		$query = $this->db->get_where('xx_users', array('username' => $data));
		if ($query->num_rows() == 0) {
			return false;
		} else {
			return $result = $query->row_array();
		}
	}

	//cek apakah sudah verifikasi email
	public function is_verify($data)
	{
		$query = $this->db->get_where('xx_users', array('username' => $data['username'], 'is_active' => 1));
		if ($query->num_rows() == 0) {
			return false;
		} else {
			return true;
		}
	}

	//============ Check User Email ============
	function check_user_mail($email)
	{
		$result = $this->db->get_where('xx_users', array('email' => $email));

		if ($result->num_rows() > 0) {
			$result = $result->row_array();
			return $result;
		} else {
			return false;
		}
	}
}
