<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	function upload($data)
	{
		$this->db->insert('product', $data);
        return;
    }

    function show_product()
	{
    	$sql = "SELECT * FROM product, kategori WHERE product.kategori = kategori.id_kategori ORDER BY id_product DESC";
        $sql = $this->db->query($sql);
		return $sql->result();
    }

    function show_user()
    {
        $sql = "SELECT * FROM user";
        $sql = $this->db->query($sql);
        return $sql->result();
    }

    function cek_user($username)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);

        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_user_id($id)
    {
        $sql = "SELECT * FROM user WHERE id_user = '$id'";
        $sql = $this->db->query($sql);
        return $sql->row();
    }

    function show_kategori()
    {
        $sql = "SELECT * FROM kategori";
        $sql = $this->db->query($sql);
        return $sql->result();
    }

    function get_product_by_id($id)
    {
        $sql = "SELECT * FROM product WHERE id_product = '$id'";
        $sql = $this->db->query($sql);
        return $sql->row();
    }

    function update($id, $data)
    {
    	$this->db->where('id_product', $id);
        $this->db->update('product', $data);
    }

    function delete_product($id)
    {
    	$this->db->where('id_product', $id);
    	$this->db->delete('product');
    }
}

/* End of file m_dashboard.php */
/* Location: ./application/models/m_dashboard.php */