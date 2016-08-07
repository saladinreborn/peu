<?php

/**
* 
*/
class Sc extends CI_Controller
{
	
	function __construct()
		{
			parent::__construct();
			$this->load->model('m_sc'); 
			$this->load->model('m_supplier');  
			$this->load->library('lib_output');
			$this->load->library('auth');

			if(!($this->auth->isLogin() && $this->auth->allowed(['3']))){
				redirect('/');
			}
		}

public function index()
{
	$tampilkan_sc=$this->m_sc->get();
	//print_r($tampilkan_mobil);
	$data=array('sc'=>$tampilkan_sc);
	$this->lib_output->output_display('purchasing/sc/daftar_sc',$data);
}

public function tampilkan($value='')
{
	# code...
}

public function tambah($value='')
{
	if($this->input->post()){
		$dt = $this->input->post();
		unset($dt['tambah']);
		$aksi = $this->m_sc->create($dt);
		if($aksi){
			$this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan');
            redirect ('purchasing/sc');
		}else{
			$this->session->set_flashdata('error', 'Data Gagal Ditambahkan');
            redirect ('purchasing/sc');
		}
	}
	//print_r ($this->input->post());die();
	$supplier=$this->m_supplier->get();
	$data=array('supplier'=>$supplier);
	$this->lib_output->output_display('purchasing/sc/input_sc',$data);
}

public function edit($id='')
{
	
	if($this->input->post()){
		$data = $this->input->post();
		unset($data['simpan']);
		$aksi = $this->m_sc->edit($data,$id);
		if($aksi){
				$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
            redirect ('purchasing/sc');
		}else{
			$this->session->set_flashdata('error', 'Data Gagal Diubah');
            redirect ('purchasing/sc');
		}
	}

	$detail_sc = $this->m_sc->get_by_id($id);
	$supplier=$this->m_supplier->get();
	$data=array('supplier'=>$supplier,'data'=>$detail_sc);
	$this->lib_output->output_display('purchasing/sc/edit_sc',$data);

	//print_r($aksi);
}

public function detail($id='')
{
	if ($this->input->post()) {
		$data = $this->input->post();
		$data['id_sc'] = $id;
		unset($data['simpan']);
		$tambah_stok = $this->m_sc->tambah_stok_sc($data,$id);
		if($tambah_stok){
			$this->session->set_flashdata('sukses', 'Stok Berhasil Ditambahkan');
            redirect ('purchasing/sc');
		}else{
			$this->session->set_flashdata('error', 'Stok Gagal Ditambahkan');
            redirect ('purchasing/sc');
		}
	}
	$detail_sc = $this->m_sc->get_by_id($id);
	$detail_sc_masuk = $this->m_sc->detail($id);

	$data = array(
		'dt_sc' => $detail_sc,
		'dt_scm' => $detail_sc_masuk,
		);
	//print_r($data); die();
	$this->lib_output->output_display('purchasing/sc/detail_sc',$data);
}


public function hapus($dt='')
{
	$aksi = $this->m_sc->delete($dt);
	if($aksi){
			$this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');
            redirect ('purchasing/sc');
		}else{
			$this->session->set_flashdata('error', 'Data Gagal Dihapus');
            redirect ('purchasing/sc');
		}
}

}