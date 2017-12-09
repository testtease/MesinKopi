<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_site');
		$this->load->helper('text');
	}

	public function index()
	{
		$data['product']=$this->m_site->show_rekomendasi();
		$data['judul']='Menikmati kopi | Home';
    	$this->load->view('site/v_head',$data);
		$this->load->view('site/v_index');
    	$this->load->view('site/v_foot');
	}

	public function detailproduct($id)
	{
		$data['product']=$this->m_site->get_product_by_id($id);
		$data['judul']='Menikmati kopi | Detail Produk';
    	$this->load->view('site/v_head',$data);
		$this->load->view('site/v_detail');
    	$this->load->view('site/v_foot');
	}

	public function product($kategori = NULL)
	{
		if($kategori == NULL)
		{
			$kategori = 1;
		}

		$data['product']=$this->m_site->show_kategori($kategori);
	    $data['kat']=$this->m_site->nama_kategori($kategori);
	    $data['judul']= 'Menikmati kopi | Produk';
	    $this->load->view('site/v_head',$data);
	    $this->load->view('site/v_product');
	    $this->load->view('site/v_foot');
		
	}

  public function about()
  {
  	$data['judul']='Menikmati kopi | About Us';
    $this->load->view('site/v_head',$data);
    $this->load->view('site/v_about');
    $this->load->view('site/v_foot');
  }

}

/* End of file site.php */
/* Location: ./application/controllers/site.php */