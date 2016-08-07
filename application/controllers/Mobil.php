<?php

/**
* 
*/
class Mobil extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_mobil');  
		$this->load->library('lib_output');
		$this->load->library('auth');

		if(!($this->auth->isLogin() && $this->auth->allowed(['2']))){
			redirect('/');
		}
	}

	public function index()
	{
		$tampilkan_mobil=$this->m_mobil->get();
		$data=array('mobil'=>$tampilkan_mobil);
		$this->lib_output->output_display('administrasi/mobil/daftar_mobil',$data);
	}

	public function detail($id)
	{
		$data = $this->m_mobil->get_by_id($id);
		
		$this->load->view('administrasi/mobil/detail_mobil',array('data' => $data[0]));
	}

	public function tambah($value='')
	{
		if($this->input->post()){
			$dt = $this->input->post();
			unset($dt['tambah']);
			$aksi = $this->m_mobil->create($dt);
			if($aksi){
				$this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan');
	            redirect ('administrasi/mobil');
			}else{
				$this->session->set_flashdata('error', 'Data Gagal Ditambahkan');
	            redirect ('administrasi/mobil');
			}
		}

		$this->lib_output->output_display('administrasi/mobil/input_mobil');
	}

	public function edit($id='')
	{
		
		if($this->input->post()){
			$data = $this->input->post();
			unset($data['simpan']);
			foreach ($data as $key => $value) {
				$data[$key] = trim($value);
			}

			$aksi = $this->m_mobil->edit($data,$id);
			if($aksi){
				$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
	            redirect ('administrasi/mobil');
			}else{
				$this->session->set_flashdata('error', 'Data Gagal Diubah');
	            redirect ('administrasi/mobil');
			}
		}

		$data = $this->m_mobil->get_by_id($id);
		$this->lib_output->output_display('administrasi/mobil/edit_mobil',array('data' => $data));

	}

	public function hapus($dt='')
	{
		$aksi = $this->m_mobil->delete($dt);
		if($aksi){
				$this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');
	            redirect ('administrasi/mobil');
			}else{
				$this->session->set_flashdata('error', 'Data Gagal Dihapus');
	            redirect ('administrasi/mobil');
			}
	}

}