<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_site extends CI_Model {

	function show_rekomendasi()
	{
    	$sql = "SELECT * FROM product WHERE status = 1 ORDER BY id_product DESC";
        $sql = $this->db->query($sql);
		return $sql->result();
    }	

    function get_product_by_id($id)
    {
        $sql = "SELECT * FROM product WHERE id_product = '$id'";
        $sql = $this->db->query($sql);
        return $sql->row();
    }

    // function show_kategori($kategori)
    // {
    //     $sql = "SELECT * FROM product WHERE kategori = '$kategori'";
    //     $sql = $this->db->query($sql);
    //     return $sql->row();
    // }

    function show_kategori($kategori)
    {
        $sql = "SELECT * FROM product, kategori WHERE product.kategori = kategori.id_kategori AND kategori.id_kategori = '$kategori'";
        $sql = $this->db->query($sql);
        return $sql->result();
    }

    function nama_kategori($kategori)
    {
        $sql = "SELECT nama_kategori FROM kategori WHERE kategori.id_kategori = '$kategori'";
        $sql = $this->db->query($sql);
        return $sql->row();
    }
}

/* End of file m_site.php */
/* Location: ./application/models/m_site.php */