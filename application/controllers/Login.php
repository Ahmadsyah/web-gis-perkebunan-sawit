<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
	}

	public function index()
	{	
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() == false) {
			$data['title'] = 'Login Page';
			$this->load->view('v_login');
		}
		else {
			//validasi sukses
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		if($user) {
			if($user['username'] = $username && $user['password'] = $password){
			 	$data = $user['nama'];
			 $this->session->set_userdata($data);
			 redirect('admin');
			}
			else{
				echo "<script> alert('Username atau password salah');</script>";
			}
		}
		else {
			echo "<script> alert('Username tidak terdaftar');</script>";
			redirect(base_url('login'), 'refresh');
		}
	
	}

	public function logout()
	{
		// membuang semua session yang telah dibuat saat login berhasil
			$this->session->unset_userdata('nama');;
		// setelah session diunset maka redirect ke halaman login
			$this->session->set_flashdata('sukses','Anda berhasil Logout');
			redirect(base_url('home'), 'refresh');
	}
}
