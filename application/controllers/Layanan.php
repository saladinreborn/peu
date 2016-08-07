<?php

/**
* 
*/
class Layanan extends CI_Controller
{
	
	function __construct()
		{
			parent::__construct();
			$this->load->model('m_layanan');
			$this->load->library('lib_output');
			$this->load->library('auth');

			if(!($this->auth->isLogin() && $this->auth->allowed(['2']))){
				redirect('/');
			}
		}

public function index()
{
	$tampilkan_layanan=$this->m_layanan->get();
	//print_r($tampilkan_mobil);
	$data=array('layanan'=>$tampilkan_layanan);
	$this->lib_output->output_display('administrasi/layanan/daftar_layanan',$data);
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
		$aksi = $this->m_layanan->create($dt);
		if($aksi){
			$this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan');
            redirect ('administrasi/layanan');
		}else{
			$this->session->set_flashdata('error', 'Data Gagal Ditambahkan');
            redirect ('administrasi/layanan');
		}
	}
	//print_r ($this->input->post());die();
	$this->lib_output->output_display('administrasi/layanan/input_layanan');
}

public function edit($id='')
{
	
	if($this->input->post()){
		$data = $this->input->post();
		unset($data['simpan']);
		$aksi = $this->m_layanan->edit($data,$id);
		if($aksi){
				$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
            redirect ('administrasi/layanan');
		}else{
			$this->session->set_flashdata('error', 'Data Gagal Diubah');
            redirect ('administrasi/layanan');
		}
	}

	$data = $this->m_layanan->get_by_id($id);
	$this->lib_output->output_display('administrasi/layanan/edit_layanan',array('data' => $data));

	//print_r($aksi);
}

public function hapus($dt='')
{
	$aksi = $this->m_layanan->delete($dt);
	if($aksi){
			$this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');
            redirect ('administrasi/layanan');
		}else{
			$this->session->set_flashdata('error', 'Data Gagal Dihapus');
            redirect ('administrasi/layanan');
		}
}

}