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
		$query = $this->db->get_where('xx_users', array('email' => $data['email']));
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
		$query = $this->db->get_where('xx_users', array('email' => $data));
		if ($query->num_rows() == 0) {
			return false;
		} else {
			return $result = $query->row_array();
		}
	}

	//cek apakah sudah verifikasi email
	public function is_verify($data)
	{
		$query = $this->db->get_where('xx_users', array('email' => $data['email'], 'is_active' => 1));
		if ($query->num_rows() == 0) {
			return false;
		} else {
			return true;
		}
	}
	//--------------------------------------------------------------------
	public function email_verification($code)
	{
		$this->db->select('email');
		$this->db->from('xx_users');
		$this->db->where('token', $code);
		$query = $this->db->get();
		$result = $query->result_array();
		$match = count($result);
		if ($match > 0) {
			$this->db->where('token', $code);
			$this->db->update('xx_users', array('is_active' => 1, 'token' => ""));
			return true;
		} else {
			return false;
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

	//============ Update Reset Code Function ===================
	public function update_reset_code($reset_code, $email)
	{
		$data = array('password_reset_code' => $reset_code);
		$this->db->where('email', $email);
		$this->db->update('xx_users', $data);
	}

	//============ Activation code for Password Reset Function ===================
	public function check_password_reset_code($code)
	{

		$result = $this->db->get_where('xx_users',  array('password_reset_code' => $code));
		if ($result->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
