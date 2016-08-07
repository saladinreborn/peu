<?php

/**
* 
*/
class User extends CI_Controller
{
	
	function __construct()
		{
			parent::__construct();
			$this->load->model('m_user');  
			$this->load->library('lib_output');
			$this->load->library('auth');

			if(!($this->auth->isLogin() && $this->auth->allowed(['1']))){
				redirect('/');
			}
		}

public function index()
{
	$tampilkan_user=$this->m_user->get();
	//print_r($tampilkan_user);die();
	$data=array('user'=>$tampilkan_user);
	$this->lib_output->output_display('owner/user/daftar_user',$data);
}

public function tampilkan($value='')
{
	# code...
}

public function tambah($value='')
{
	if($this->input->post()){
		$dt['nama'] = $this->input->post('nama');
		$dt['pass'] = md5($this->input->post('pass'));
		$dt['level_user'] = $this->input->post('level_user');

		$aksi = $this->m_user->create($dt);
		if($aksi){
			$this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan');
            redirect ('owner/user');
		}else{
			$this->session->set_flashdata('error', 'Data Gagal Ditambahkan');
            redirect ('owner/user');
		}
	}
	//print_r ($this->input->post());die();
	$this->lib_output->output_display('owner/user/input_user');
}

public function edit($id='')
{
	
	if($this->input->post()){

		$data['nama'] = $this->input->post('nama');
		$data['pass'] = md5($this->input->post('pass'));
		$data['level_user'] = $this->input->post('level_user');
		//print_r($data);die();
		$aksi = $this->m_user->edit($data,$id);
		if($aksi){
				$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
            redirect ('owner/user');
		}else{
			$this->session->set_flashdata('error', 'Data Gagal Diubah');
            redirect ('owner/user');
		}
	}

	$data = $this->m_user->get_by_id($id);
	$this->lib_output->output_display('owner/user/edit_user',array('data' => $data));

	//print_r($aksi);
}

public function hapus($dt='')
{
	$aksi = $this->m_user->delete($dt);
	if($aksi){
			$this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');
            redirect ('owner/user');
		}else{
			$this->session->set_flashdata('error', 'Data Gagal Dihapus');
            redirect ('owner/user');
		}
}

}