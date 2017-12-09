<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function cek_user($username, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$query = $this->db->get();
		return $query->num_rows();
	}

	public function cek_id($username)
	{
		$sql = "select id_user FROM user WHERE username = '".$username."'";
		$sql = $this->db->query($sql);
		return $sql;
	}	

}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */