<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
		$this->load->model('m_dashboard');
	}

	public function index()
	{
		if($this->session->userdata('isLogin'))
		{
			$this->load->view('dash/v_header');
			$this->load->view('dash/v_sidebar');
			$this->load->view('dash/v_index');
			$this->load->view('dash/v_footer');
		}
		else
		{
			redirect('login','refresh');
		}
		
	}

	public function product()
	{
		if($this->session->userdata('isLogin'))
		{
			$data['product']=$this->m_dashboard->show_product();

			$this->load->view('dash/v_header');
			$this->load->view('dash/v_sidebar');
			$this->load->view('dash/v_product',$data);
			$this->load->view('dash/v_footer');
		}
		else
		{
			redirect('login','refresh');
		}
		
	}

	public function add_product()
	{
		if($this->session->userdata('isLogin'))
		{
			$data['kategori']=$this->m_dashboard->show_kategori();

			$this->load->view('dash/v_header');
			$this->load->view('dash/v_sidebar');
			$this->load->view('dash/v_product_add',$data);
			$this->load->view('dash/v_footer');
		}
		else
		{
			redirect('login','refresh');
		}
		
	}

	public function upload()
	{
		if($this->session->userdata('isLogin'))
		{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '2048';
			$config['max_width']  = '0';
			$config['max_height']  = '0';
	                
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('gambar')){
	                    echo "	<script>
			            alert('Maaf, Isi gambar dengan benar.');
			            history.go(-1);
			          		</script>";
	                }else{
	                    $gambar=$this->upload->file_name;

	                    $data = array
	                	(	                    
		                    'nama'=>$this->input->post('nama'),
		                    'harga'=>$this->input->post('harga'),
		                    'detail'=>$this->input->post('detail'),
		                    'deskripsi'=>$this->input->post('deskripsi'),
		                    'kategori'=>$this->input->post('kategori'),
		                    'status'=>$this->input->post('status'),
		                    'img'=>$gambar
	                	);
	                $this->m_dashboard->upload($data);
	                $this->session->set_flashdata('info', 'Data telah berhasil dimasukkan !');
	                redirect('dashboard/product');
	                }              
		}
		else
		{
			redirect('login','refresh');
		}
		 
	}

	public function edit_product($id)
	{
		if($this->session->userdata('isLogin'))
		{
			$data['product'] = $this->m_dashboard->get_product_by_id($id);
			$data['kategori'] = $this->m_dashboard->show_kategori();
			$this->load->view('dash/v_header');
			$this->load->view('dash/v_sidebar');
			$this->load->view('dash/v_product_edit',$data);
			$this->load->view('dash/v_footer');
		}
		else
		{
			redirect('login','refresh');
		}
		
	}

	public function update()
	{
		if($this->session->userdata('isLogin'))
		{
			$id=$this->input->post('id_product');
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '2048';
			$config['max_width']  = '0';
			$config['max_height']  = '0';
	                
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('gambar'))
	                {
	                	$data = array
	                	(
		                    'nama'=>$this->input->post('nama'),
		                    'harga'=>$this->input->post('harga'),
		                    'detail'=>$this->input->post('detail'),
		                    'deskripsi'=>$this->input->post('deskripsi'),
		                    'kategori'=>$this->input->post('kategori'),
		                    'status'=>$this->input->post('status'),
		                    'img'=>$this->input->post('gbr')
	                	);
						$this->m_dashboard->update($id, $data);
						$this->session->set_flashdata('info', 'Data telah berhasil diedit !');
						redirect('dashboard/product','refresh');
	                }
	                else
	                {
	                    $gambar=$this->upload->file_name;

	                    $data = array
	                	(
		                    'nama'=>$this->input->post('nama'),
		                    'harga'=>$this->input->post('harga'),
		                    'detail'=>$this->input->post('detail'),
		                    'deskripsi'=>$this->input->post('deskripsi'),
		                    'kategori'=>$this->input->post('kategori'),
		                    'status'=>$this->input->post('status'),
		                    'img'=>$gambar
	                	);
	                	$detail=$this->m_dashboard->get_product_by_id($id);
	                	unlink("uploads/".$detail->img);
						$this->m_dashboard->update($id, $data);
						$this->session->set_flashdata('info', 'Data telah berhasil diedit !');
						redirect('dashboard/product','refresh');
						}
		}
		else
		{
			redirect('login','refresh');
		}
		
	}

	public function delete_product($id)
	{
		if($this->session->userdata('isLogin'))
		{
			$detail=$this->m_dashboard->get_product_by_id($id);
		    unlink("uploads/".$detail->img);
			$this->m_dashboard->delete_product($id);
			$this->session->set_flashdata('info', 'Data Telah Berhasil Dihapus');
			redirect('dashboard/product','refresh');
		}
		else
		{
			redirect('login','refresh');
		}
		
	}

	public function user()
	{
		if($this->session->userdata('isLogin'))
		{
			$data['user']=$this->m_dashboard->show_user();

			$this->load->view('dash/v_header');
			$this->load->view('dash/v_sidebar');
			$this->load->view('dash/v_user',$data);
			$this->load->view('dash/v_footer');
		}
		else
		{
			redirect('login','refresh');
		}
		
	}

	public function add_user()
	{
		if($this->session->userdata('isLogin'))
		{
			$this->load->view('dash/v_header');
			$this->load->view('dash/v_sidebar');
			$this->load->view('dash/v_user_add');
			$this->load->view('dash/v_footer');
		}
		else
		{
			redirect('login','refresh');
		}
		
	}

	public function add()
	{
		if($this->session->userdata('isLogin'))
		{
			$username=$this->input->post('username');
			$pass=$this->input->post('password');
			$pass2=$this->input->post('password2');

			

			$cek = $this->m_dashboard->cek_user($username);
	        if($cek <> 0)
	        {
	        	echo "	<script>
			            alert('Maaf, username sudah digunakan.');
			            history.go(-1);
			          		</script>";   		
	        }
	        else
	        {
	        	$data = array
	        	(
	        	'username'=>$this->input->post('username'),
	        	'password'=>md5($this->input->post('password')),
	        	);

	        	$this->db->insert('user', $data);
	        	$this->session->set_flashdata('info', 'User telah berhasil ditambahkan !');
	        	redirect('dashboard/user');
	        }
		}
		else
		{
			redirect('login','refresh');
		}
		
	}

	public function edit_user($id)
	{
		if($this->session->userdata('isLogin'))
		{
			$data['user']=$this->m_dashboard->get_user_id($id);

			$this->load->view('dash/v_header');
			$this->load->view('dash/v_sidebar');
			$this->load->view('dash/v_user_edit',$data);
			$this->load->view('dash/v_footer');
		}
		else
		{
			redirect('login','refresh');
		}
		
	}

	public function update_user()
	{
		if($this->session->userdata('isLogin'))
		{
			$username=$this->input->post('username');
			$pass=$this->input->post('password');
			$pass2=$this->input->post('password2');

	        $data = array
	        (
	        	'username'=>$this->input->post('username'),
	        	'password'=>md5($this->input->post('password')),
	        );

	        $this->db->where('username', $username);
	        $this->db->update('user', $data);
	        $this->session->set_flashdata('info', 'Password telah berhasil diganti !');
	        redirect('dashboard/user');
		}
		else
		{
			redirect('login','refresh');
		}
		
        
	}

	public function delete_user($id)
	{
		if($this->session->userdata('isLogin'))
		{
			$this->db->where('id_user', $id);
	        $this->db->delete('user');
	        $this->session->set_flashdata('info', 'User telah berhasil dihapus !');
	        redirect('dashboard/user');
		}
		else
		{
			redirect('login','refresh');
		}
        
        
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */