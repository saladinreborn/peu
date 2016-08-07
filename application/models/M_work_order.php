<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_work_order extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->tbl = "t_wo";
		$this->pk = "id_wo";
        $this->load->model('m_sc');
	}
 
	function get()
	{
		
		$this->db->order_by($this->pk,'DESC');
		return $this->db->get($this->tbl)->result_array();
	}

	function create($data)
	{
		$query=$this->db->insert($this->tbl, $data);
		return $query;
    }

    public function edit($data,$id)
    {
    	$this->db->where($this->pk, $id);
		
		$query=$this->db->update($this->tbl, $data);
		return $query;
    }

    public function delete($id='')
    {
    	return $this->db->delete($this->tbl, array($this->pk => $id));
    }

    public function get_by_id($id='')
    {
    	$this->db->where('id_mobil', $id);
    	$query = $this->db->get($this->tbl);
    	//$query = $this->db->get_where($this->tbl, array($this->pk => $id));
    	return $query->result_array();
    }

    public function get_detail_wo($id_wo)
    {
    	$sql = "SELECT * FROM t_wo wo, t_mobil mbl, t_sdm sdm, t_merek merek  WHERE mbl.merk = merek.id_merek AND wo.id_mobil = mbl.id_mobil AND wo.id_sdm = sdm.id_sdm AND wo.id_wo = '$id_wo'";
    	$query = $this->db->query($sql);

		return $query->row_array();
    }

    public function get_detail_servis($id_wo)
    {
    	$sql = "SELECT * FROM t_wo wo, wo_service wo_s, t_layanan serv WHERE  wo.id_wo = wo_s.id_wo AND serv.id_layanan = wo_s.id_layanan AND wo.id_wo = '$id_wo'";
		$query = $this->db->query($sql);

		return $query->result_array();
    }

    public function bayar_servis($id_wo)
    {
    	$sql = "SELECT SUM(servis.harga) AS total 
    			FROM (
    				SELECT wo.id_wo, serv.harga FROM t_wo wo, wo_service wo_s, t_layanan serv WHERE  wo.id_wo = wo_s.id_wo AND serv.id_layanan = wo_s.id_layanan AND wo.id_wo = '$id_wo'
    				) servis";
    	$query = $this->db->query($sql);

		return $query->row_array();
    }

    public function get_detail_sc($id_wo)
    {
    	$sql = "SELECT * FROM t_wo wo, wo_sc wo_sc, t_sc sc, t_sc_sup sc_sup  WHERE  wo.id_wo = wo_sc.id_wo AND wo.id_wo = '$id_wo' 
    		AND sc.id_sc = wo_sc.id_sc AND sc.id_sup = sc_sup.id_sup";
		$query = $this->db->query($sql);

		return $query->result_array();
    }

    public function bayar_sc($id_wo)
    {
    	$sql = "SELECT SUM(suku_cadang.harga) AS total 
    			FROM (
    				SELECT wo.id_wo, sc.harga_jual as harga FROM t_wo wo, wo_sc wo_sc, t_sc sc, t_sc_sup sc_sup  WHERE  wo.id_wo = wo_sc.id_wo AND wo.id_wo = '$id_wo' 
    				AND sc.id_sc = wo_sc.id_sc AND sc.id_sup = sc_sup.id_sup
    				) suku_cadang";
    	$query = $this->db->query($sql);

		return $query->row_array();
    }

    public function create_wos($data)
    {
    	$query=$this->db->insert('wo_service', $data);
    	if($query){
    		
    	}
		return $query;
    }

    public function update_sc($id, $type)
    {
        if($type == 'minus'){
            $count = -1;
        }elseif ($type == 'plus') {
            $count = 1;
        }

        $sisa_jumlah = $this->m_sc->get_by_id($id)['jumlah'];

        $jumlah_sekarang = (int) $sisa_jumlah + (int) $count;
        $dt = array('jumlah' => $jumlah_sekarang);

        $update_jumlah = $this->m_sc->edit($dt, $id);
        return $dt;
        if($update_jumlah){
            return true;
        }else{
            return false;
        }

    }

    public function create_wosc($data)
    {
        $update_jumlah = $this->update_sc($data['id_sc'], 'minus');
        if($update_jumlah){
            $query = $this->db->insert('wo_sc', $data);
            return $query;
        }

        return false;
    }

    public function delete_wos($id)
    {
    	return $this->db->delete('wo_service', array('id_wo_service' => $id));
    }

    public function get_wosc_by_id($id_wosc)
    {
        $result = $this->db->get_where('wo_sc', array('id_wo_sc' => $id_wosc));
        return $result->row_array();
    }

    public function delete_wosc($id)
    {
        $get_wosc = $this->get_wosc_by_id($id);
        $update_jumlah = $this->update_sc($get_wosc['id_sc'], 'plus');
        
        if($update_jumlah){
            $query = $this->db->delete('wo_sc', array('id_wo_sc' => $id));
            return $query;
        }
        
        return false;
    }

    public function pembayaran($id_wo, $total)
    {
        return $this->db->insert('t_pembayaran', ['id_wo' => $id_wo, 'jml_total' => $total]);
    }

}
?>