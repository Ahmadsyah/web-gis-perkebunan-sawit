<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
	}

 	public function index()
	{
		$this->load->view('v_home_admin');
	}

	public function bangunan_json()
	{
		$data = $this->db->get('bangunan')->result();
		echo json_encode($data);
	}

	public function foto($kode=null) 
	{
		$data = $this->db->limit(1)->get_where('bidang', array('bidang_kode'=>$kode))->row()->bidang_gambar;
		echo json_encode($data);
	}

	public function bidang_detail($kode=null)
	{
		$data['kode']=$kode;
		$data['detail']=$this->db->get_where('detail', array('bidang_kode'=>$kode))->result();
		$data['bidang']=$this->db->get_where('bidang', array('bidang_kode'=>$kode))->result();
		$data['dok']=$this->db->get_where('dokumentasi', array('dokumentasi_bidang_id'=>$kode))->result();
		$this->load->view('v_detail_admin', $data);
	}

	public function edit($kode=null)
	{
		$data['kode']=$kode;
		$data['detail'] = $this->db->get_where('detail', array('bidang_kode'=>$kode))->result();
		$this->load->view('v_edit', $data);
	}

	public function update()
	{
		$kode = $this->input->post('kode');
		$bidang_kode = $this->input->post('bidang_kode');
		$bidang_nama = $this->input->post('bidang_nama');
		$bidang_lokasi = $this->input->post('bidang_lokasi');
		$bidang_lat = $this->input->post('bidang_lat');
		$bidang_long = $this->input->post('bidang_long');
		$luas_area = $this->input->post('luas_area');
		$luas_tanam = $this->input->post('luas_tanam');
		$produksi = $this->input->post('produksi');
		$this->load->view('v_edit', $data);

		$data = array(
			'bidang_kode' => $bidang_kode,
			'bidang_nama' => $bidang_nama,
			'bidang_lokasi' => $bidang_lokasi,
			'bidang_lat' => $bidang_lat,
			'bidang_long' => $bidang_long,
			'luas_area' => $luas_area,
			'luas_tanam' => $luas_tanam,
			'produksi' => $produksi
		); 

		

		$this->db->where('bidang_kode', $kode);
		$this->db->update('detail', $data);
		redirect('admin');
	}
	
}
