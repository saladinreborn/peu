<?php

/**
* 
*/
class Servis extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_work_order');
		$this->load->model('m_layanan');
		$this->load->model('m_sc');
		$this->load->library('lib_output');
		$this->load->library('auth');

		if(!($this->auth->isLogin() && $this->auth->allowed(['2']))){
			redirect('/');
		}
	}

	public function index()
	{

		 $this->lib_output->output_display('administrasi/work_order/home_servis');
	}

	//@param id = 
	public function detail($id)
	{
		$dt_wo = $this->m_work_order->get_detail_wo($id);
		$dt_wo_servis = $this->m_work_order->get_detail_servis($id);
		$dt_wo_sc = $this->m_work_order->get_detail_sc($id);

		$dt_layanan = $this->m_layanan->get();
		$dt_sc = $this->m_sc->get();
		$m = array('id_wo' => $id, 'dt_wo' => $dt_wo, 'dt_wos' => $dt_wo_servis, 'dt_wosc' => $dt_wo_sc, 'dt_layanan' => $dt_layanan, 'dt_sc' => $dt_sc);
		
		$this->lib_output->output_display('administrasi/work_order/detail_wo_servis',$m);
	}

	public function tambah()
	{
		if($this->input->post('tambah_wos')){
			$dt = $this->input->post();
			unset($dt['tambah_wos']);
			$aksi = $this->m_work_order->create_wos($dt);
			if($aksi){
				$this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan');
	            redirect ('administrasi/servis/'.$dt['id_wo'].'/detail');
			}else{
				$this->session->set_flashdata('error', 'Data Gagal Ditambahkan');
	            redirect ('administrasi/servis/'.$dt['id_wo'].'/detail');
			}
		}elseif($this->input->post('tambah_wosc')){
			$dt = $this->input->post();
			unset($dt['tambah_wosc']);
			$aksi = $this->m_work_order->create_wosc($dt);
			if($aksi){
				$this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan');
	            redirect ('administrasi/servis/'.$dt['id_wo'].'/detail');
			}else{
				$this->session->set_flashdata('error', 'Data Gagal Ditambahkan');
	            redirect ('administrasi/servis/'.$dt['id_wo'].'/detail');
			}
		}

		redirect('/administrasi/work_order');

		// $this->lib_output->output_display('administrasi/mobil/input_mobil');
	}

	public function hapus($id_wo)
	{
		if($this->input->post('delete_wos')){
			$id_wos = $this->input->post('id_wos');

			$aksi = $this->m_work_order->delete_wos($id_wos);
			if($aksi){
				// return "benar";
				$this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan');
	            redirect ('administrasi/servis/'.$id_wo.'/detail');
			}else{
				// return "Salah";
				$this->session->set_flashdata('error', 'Data Gagal Ditambahkan');
	            redirect ('administrasi/servis/'.$id_wo.'/detail');
			}
		}elseif($this->input->post('delete_wosc')){
			$id_wosc = $this->input->post('id_wosc');
			$aksi = $this->m_work_order->delete_wosc($id_wosc);
			
			if($aksi){
				$this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan');
	            redirect ('administrasi/servis/'.$id_wo.'/detail');
			}else{
				$this->session->set_flashdata('error', 'Data Gagal Ditambahkan');
	            redirect ('administrasi/servis/'.$id_wo.'/detail');
			}
		}
	}

}