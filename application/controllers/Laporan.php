<?php

/**
* 
*/
class Laporan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporan');
		$this->load->library('lib_output');
		$this->load->library('auth');

		if(!($this->auth->isLogin() && $this->auth->allowed(['1']))){
			redirect('/');
		}
	}

	private function get_month()
	{
		$month = array(
			'01' => 'Januari',
			'02' => 'Februari',
			'03' => 'Maret',
			'04' => 'April',
			'05' => 'Mei',
			'06' => 'Juni',
			'07' => 'Juli',
			'08' => 'Agustus',
			'09' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember',
			);

		return $month;
	}



	public function report_servis($value='')
	{
		if($this->input->post()){
			//$tanggal = 'mm-yyyy'
			$bln = $this->input->post('bln');
			$thn = $this->input->post('thn');
			$tanggal = strval($bln.'-'.$thn);

			$dt_servis = $this->m_laporan->get_laporan_servis($tanggal);
			$m = array('data' => $dt_servis);
			$this->load->view('owner/laporan/tbl_laporan_servis', $m);
			return;
		}

		$dt_month = $this->get_month();
		$dt_year = $this->m_laporan->get_year('servis');
		
		$this->lib_output->output_display('owner/laporan/index_servis',['dt_month' => $dt_month, 'dt_year' => $dt_year]);
	}

	public function report_suku_cadang($id='')
	{
		
		if($this->input->post()){
			//$tanggal = 'mm-yyyy'
			$bln = $this->input->post('bln');
			$thn = $this->input->post('thn');
			$tanggal = strval($bln.'-'.$thn);

			$dt_sc = $this->m_laporan->get_laporan_sc($tanggal);
			$m = array('data' => $dt_sc);
			$this->load->view('owner/laporan/tbl_laporan_sc', $m);
			return;
		}

		$dt_month = $this->get_month();
		$dt_year = $this->m_laporan->get_year('suku_cadang');
		
		$this->lib_output->output_display('owner/laporan/index_sc',['dt_month' => $dt_month, 'dt_year' => $dt_year]);
	}

	public function report_pembayaran($dt='')
	{
		if($this->input->post()){
			//$tanggal = 'mm-yyyy'
			$bln = $this->input->post('bln');
			$thn = $this->input->post('thn');
			$tanggal = strval($bln.'-'.$thn);

			$dt_pembayaran = $this->m_laporan->get_laporan_pembayaran($tanggal);
			$m = array('data' => $dt_pembayaran);
			// print_r($m);
			$this->load->view('owner/laporan/tbl_laporan_pembayaran', $m);
			return;
		}
		
		$dt_month = $this->get_month();
		$dt_year = $this->m_laporan->get_year('pembayaran');
		
		$this->lib_output->output_display('owner/laporan/index_pembayaran',['dt_month' => $dt_month, 'dt_year' => $dt_year]);
	}

}