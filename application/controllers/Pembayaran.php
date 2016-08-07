<?php

/**
* 
*/
class Pembayaran extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_work_order');
		$this->load->library('lib_output');
		$this->load->library('auth');

		if(!($this->auth->isLogin() && $this->auth->allowed(['2']))){
			redirect('/');
		}
	}

	public function index()
	{
		 $this->lib_output->output_display('administrasi/work_order/home');
	}

	public function detail($id_wo)
	{
		$dt_wo = $this->m_work_order->get_detail_wo($id_wo);
		$dt_wos = $this->m_work_order->get_detail_servis($id_wo);
		$dt_wosc = $this->m_work_order->get_detail_sc($id_wo);

		$bayar_servis = $this->m_work_order->bayar_servis($id_wo);
		$bayar_sc = $this->m_work_order->bayar_sc($id_wo);

		$grand_total = $bayar_servis['total'] + $bayar_sc['total'];

		$m = array('dt_wo' => $dt_wo, 'dt_wos' => $dt_wos, 'dt_wosc' => $dt_wosc, 'grand_total' => $grand_total);
		
		$this->load->view('administrasi/work_order/pembayaran',$m);
	}

	public function bayar()
	{
		if($this->input->post('id_wo')){
			$id_wo = $this->input->post('id_wo');
			$bayar_servis = $this->m_work_order->bayar_servis($id_wo);
			$bayar_sc = $this->m_work_order->bayar_sc($id_wo);

			$grand_total = $bayar_servis['total'] + $bayar_sc['total'];

			$bayar = $this->m_work_order->pembayaran($id_wo, $grand_total);
			
			if($bayar){
				$this->m_work_order->edit(['status' => 1],$id_wo);
				echo json_encode(array('status' => true));
			}else{
				echo json_encode(array('status' => false));
			}
		}
	}

}
