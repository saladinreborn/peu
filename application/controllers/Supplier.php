<?php

/**
* 
*/
class Supplier extends CI_Controller
{
	
	function __construct()
		{
			parent::__construct();
			$this->load->model('m_supplier');  
			$this->load->library('lib_output');
			$this->load->library('auth');

			if(!($this->auth->isLogin() && $this->auth->allowed(['3']))){
				redirect('/');
			} 
	}

public function index()
{
	$tampilkan_supplier=$this->m_supplier->get();
	//print_r($tampilkan_mobil);
	$data=array('supplier'=>$tampilkan_supplier);
	$this->lib_output->output_display('purchasing/supplier/daftar_supplier',$data);
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
		$aksi = $this->m_supplier->create($dt);
		if($aksi){
			$this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan');
            redirect ('purchasing/supplier');
		}else{
			$this->session->set_flashdata('error', 'Data Gagal Ditambahkan');
            redirect ('purchasing/supplier');
		}
	}
	//print_r ($this->input->post());die();
	$this->lib_output->output_display('purchasing/supplier/input_supplier');
}

public function edit($id='')
{
	
	if($this->input->post()){
		$data = $this->input->post();
		unset($data['simpan']);
		$aksi = $this->m_supplier->edit($data,$id);
		if($aksi){
				$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
            redirect ('purchasing/supplier');
		}else{
			$this->session->set_flashdata('error', 'Data Gagal Diubah');
            redirect ('purchasing/supplier');
		}
	}

	$data = $this->m_supplier->get_by_id($id);
	$this->lib_output->output_display('purchasing/supplier/edit_supplier',array('data' => $data));

	//print_r($aksi);
}

public function hapus($dt='')
{
	$aksi = $this->m_supplier->delete($dt);
	if($aksi){
			$this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');
            redirect ('purchasing/supplier');
		}else{
			$this->session->set_flashdata('error', 'Data Gagal Dihapus');
            redirect ('purchasing/supplier');
		}
}

}