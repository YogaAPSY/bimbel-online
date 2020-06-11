<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// -----------------------------------------------------------------------------
// Get industry name by id
function get_nama_kelas($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_kelas', array('id_kelas' => $id))->row_array()['judul_kelas'];
}

// Get industry name by id
function get_kode_kelas($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_kelas', array('id_kelas' => $id))->row_array()['kode_kelas'];
}

// Get industry name by id
function get_nomor_pendaftaran($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_pendaftaran', array('id_pendaftaran' => $id))->row_array()['nomor_pendaftaran'];
}

// -----------------------------------------------------------------------------
// Get category name by id
function get_total_siswa($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_pendaftaran', array('id_kelas' => $id))->num_rows();
}

// -----------------------------------------------------------------------------
// Get category name by id
function get_kelas()
{
	$CI = &get_instance();
	return $CI->db->get('xx_kelas')->result_array();
}

// -----------------------------------------------------------------------------
// Get category name by id
function get_jenis_kelamin()
{
	$CI = &get_instance();
	return $CI->db->get('xx_jenis_kelamin')->result_array();
}

function get_nama_jenis_kelamin($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_jenis_kelamin', array('value' => $id))->row_array()['nama'];
}
