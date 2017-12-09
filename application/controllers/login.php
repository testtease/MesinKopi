<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('dash/v_login');
	}

	public function sign()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$cek = $this->m_login->cek_user($username, $password);

		if($cek <> 0)
			{
				$this->session->set_userdata('isLogin', TRUE);
				$this->session->set_userdata('username', $username);

				$cekuser = $this->m_login->cek_id($username);
				if ($cekuser->num_rows() > 0)
				{
				   $row = $cekuser->row_array(); 
				   $this->session->set_userdata('id_user', $row['id_user']);
				}

				redirect('dashboard','refresh');
			}
			else
			{
				echo "	<script>
		            alert('Maaf, username/password yang anda masukkan salah.');
		            history.go(-1);
		          		</script>";
			}	
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */