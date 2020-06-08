<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// -----------------------------------------------------------------------------
// Get industry name by id
function get_kode_jenis_kelas($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_jenis_kelas', array('id' => $id))->row_array()['kode'];
}

// Get industry name by id
function get_kode_kelas($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_kelas', array('id_kelas' => $id))->row_array()['kode_kelas'];
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

function get_category_user_id($user_id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_seeker_information', array('user_id' => $user_id))->row_array()['category'];
}

function get_job_title($user_id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_seeker_information', array('user_id' => $user_id))->row_array()['job_title'];
}

function get_user_resume($user_id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_seeker_attachment', array('user_id' => $user_id))->row_array()['resume'];
}

function get_user_certificate($user_id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_seeker_attachment', array('user_id' => $user_id))->row_array()['certificate'];
}

function get_user_identity($user_id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_seeker_attachment', array('user_id' => $user_id))->row_array()['identity'];
}

function get_user_attachment($user_id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_seeker_attachment', array('user_id' => $user_id))->row_array()['attachment'];
}

// -----------------------------------------------------------------------------
// Get category ID by title
function get_category_id($category_name)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_categories', array('slug' => $category_name))->row_array()['id'];
}

// -----------------------------------------------------------------------------
// Get country name by ID
function get_country_name($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_countries', array('id' => $id))->row_array()['name'];
}

// -----------------------------------------------------------------------------
// Get city name by ID
function get_city_name($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_cities', array('id' => $id))->row_array()['name'];
}

// -----------------------------------------------------------------------------
// Get city name by ID
function get_user_gender($karakter)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_gender', array('karakter' => $karakter))->row_array()['type'];
}

// -----------------------------------------------------------------------------
// Get city name by ID
function get_user_religion($nilai)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_religion', array('nilai' => $nilai))->row_array()['name'];
}

// -----------------------------------------------------------------------------
// Get city name by ID
function get_user_status($nilai)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_martial_status', array('nilai' => $nilai))->row_array()['name'];
}




// -----------------------------------------------------------------------------
// Get city ID by title
function get_city_slug($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_cities', array('id' => $id))->row_array()['slug'];
}

// -----------------------------------------------------------------------------
// Get category by ID
function get_category_slug($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_categories', array('id' => $id))->row_array()['slug'];
}

// -----------------------------------------------------------------------------
// Get industry by title
function get_industry_id($title)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_industries', array('slug' => $title))->row_array()['id'];
}

// -----------------------------------------------------------------------------
// Get industry by id
function get_industry_slug($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_industries', array('id' => $id))->row_array()['slug'];
}

// -----------------------------------------------------------------------------
// Get City ID by Name
function get_city_id($title)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_cities', array('slug' => $title))->row_array()['name'];
}

// -----------------------------------------------------------------------------
// Get Nationality by ID
function get_nationality_name($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_countries', array('id' => $id))->row_array()['name'];
}

// -----------------------------------------------------------------------------
// Get city name by ID
function get_nik_by_id($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_users', array('id' => $id))->row_array()['nik'];
}

// -----------------------------------------------------------------------------
// Get Nationality by ID
function get_education_level($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_education', array('id' => $id))->row_array()['type'];
}

// -----------------------------------------------------------------------------
// Get User Skills
function get_user_skills($user_id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_seeker_information', array('user_id' => $user_id))->row_array()['skill'];
}

// -----------------------------------------------------------------------------
// Get User Skills
function get_user_exp_salary($user_id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_seeker_information', array('user_id' => $user_id))->row_array()['expected_salary'];
}



// -----------------------------------------------------------------------------
// Get Company Name by Employer ID
function get_company_name_by_employer($emp_id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_companies', array('employer_id' => $emp_id))->row_array()['company_name'];
}

// -----------------------------------------------------------------------------
// Get Company Name by Employer ID
function get_company_id_by_employer($emp_id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_companies', array('employer_id' => $emp_id))->row_array()['id'];
}

// -----------------------------------------------------------------------------
// Get Company Name by Employer ID
function get_company_logo_by_employer($emp_id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_companies', array('employer_id' => $emp_id))->row_array()['company_logo'];
}

// -----------------------------------------------------------------------------
// Get Company ID by title
function get_company_id($title)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_companies', array('company_slug' => $title))->row_array()['id'];
}

// -----------------------------------------------------------------------------
// Get Company ID by title
function get_seeker_image_by_id($user_id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_users', array('id' => $user_id))->row_array()['image'];
}

// -----------------------------------------------------------------------------
// Get seeker email by id
function get_seeker_email_by_id($user_id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_users', array('id' => $user_id))->row_array()['email'];
}


// -----------------------------------------------------------------------------
// Get seeker email by id
function get_total_job_post_by_id($emp_id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_job_post', array('employer_id' => $emp_id))->num_rows();
}

function get_total_pelamar_by_job($emp_id, $job_id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_seeker_applied_job', array('is_accepted' => 0, 'is_refused' => 0, 'is_shortlisted' => 0, 'employer_id' => $emp_id, 'job_id' => $job_id,))->num_rows();
}
