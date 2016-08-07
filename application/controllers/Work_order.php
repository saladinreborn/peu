<?php

/**
 * 
 */
class Work_order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mobil');
        $this->load->model('m_sc');
        $this->load->model('m_layanan');
        
        $this->load->model('m_work_order');
        $this->load->model('m_sdm');
        $this->load->library('lib_output');
        $this->load->library('auth');

        if(!($this->auth->isLogin() && $this->auth->allowed(['2']))){
            redirect($this->auth->base());
        }
    }

    public function index()
    {
        $this->lib_output->output_display('administrasi/work_order/home_wo');
    }

    //params @id : id_mobil
    public function detail($id)
    {
        $data = $this->m_work_order->get_by_id($id);
        $dt_sdm = $this->m_sdm->get();
        $this->load->view('administrasi/work_order/list_work_order',array('list_wo' => $data, 'id_mobil' => $id, 'dt_sdm' => $dt_sdm));
    }

    public function tambah()
    {
        if($this->input->post('op')){
            if($this->input->post('op') == 'tambah'){
                $dt = $this->input->post();
                unset($dt['op']);

                $aksi = $this->m_work_order->create($dt);
                if($aksi){
                    $this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan');
                    redirect ('administrasi/work_order');
                }else{
                    $this->session->set_flashdata('error', 'Data Gagal Ditambahkan');
                    redirect ('administrasi/work_order');
                }
            }
        }
    }

    public function cari_nopol()
    {
        if($this->input->post('nopol')){
            $nopol = $this->input->post('nopol');
            $dt_mobil = $this->m_mobil->search_nopol($nopol);
            echo json_encode($dt_mobil);
        }
    }
}
