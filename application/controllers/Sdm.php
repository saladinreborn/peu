<?php

/**
* 
*/
class Sdm extends CI_Controller
{
	
	function __construct()
		{
			parent::__construct();
			$this->load->model('m_sdm');  
			$this->load->library('lib_output');
			$this->load->library('auth');

			if(!($this->auth->isLogin() && $this->auth->allowed(['2']))){
				redirect('/');
			}
		}

public function index()
{
	$tampilkan_sdm=$this->m_sdm->get();
	//print_r($tampilkan_mobil);
	$data=array('sdm'=>$tampilkan_sdm);
	$this->lib_output->output_display('administrasi/sdm/daftar_sdm',$data);
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
		$aksi = $this->m_sdm->create($dt);
		if($aksi){
			$this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan');
            redirect ('administrasi/sdm');
		}else{
			$this->session->set_flashdata('error', 'Data Gagal Ditambahkan');
            redirect ('administrasi/sdm');
		}
	}
	//print_r ($this->input->post());die();
	$this->lib_output->output_display('administrasi/sdm/input_sdm');
}

public function edit($id='')
{
	
	if($this->input->post()){
		$data = $this->input->post();
		unset($data['simpan']);
		$aksi = $this->m_sdm->edit($data,$id);
		if($aksi){
				$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
            redirect ('administrasi/sdm');
		}else{
			$this->session->set_flashdata('error', 'Data Gagal Diubah');
            redirect ('administrasi/sdm');
		}
	}

	$data = $this->m_sdm->get_by_id($id);
	$this->lib_output->output_display('administrasi/sdm/edit_sdm',array('data' => $data));

	//print_r($aksi);
}

public function hapus($dt='')
{
	$aksi = $this->m_sdm->delete($dt);
	if($aksi){
			$this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');
            redirect ('administrasi/sdm');
		}else{
			$this->session->set_flashdata('error', 'Data Gagal Dihapus');
            redirect ('administrasi/sdm');
		}
}

}