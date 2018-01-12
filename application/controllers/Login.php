<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['url_asset'] = base_url()."assets/";
		$this->load->view('login',$data);
	}

	public function aksi_login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->db->where('nim',$username);
		$this->db->where('password',$password);
		$ada = $this->db->get('mahasiswa')->num_rows();
		if ($ada>0) {
			$data_session = array('login' => '1',
			                      'username' => $username );
			$this->session->set_userdata($data_session);
			echo "1";
		}else{
			echo "0";
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('username');
        redirect(base_url()."index.php/login");
	}
}