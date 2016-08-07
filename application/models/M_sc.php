<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_sc extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->tbl = "t_sc";
		$this->pk = "id_sc";
	}
 
	function get()
	{
		//$this->db->select('t_sc_sup.id_sup,t_sc_sup.nama');
		$query="select sup.nama as nama_supplier,sc.nama_sc as nama_sc, 
		        sc.jumlah, sc.produsen, sc.id_sup, sc.harga_beli, sc.harga_jual, sc.id_sc
		from t_sc_sup sup,t_sc sc 
		where sup.id_sup=sc.id_sup";
		return $this->db->query($query)->result_array();
		//$this->db->from($this->tbl);
		//$this->db->order_by($this->pk,'DESC');
		//$this->db->join('t_sc_sup', 't_sc_sup.id_sup = '.$this->tbl.'.id_sup');
		//$query = $this->db->get();
		//return $query->result_array();


		//$this->db->order_by($this->pk,'DESC');
		//return $this->db->get($this->tbl)->result_array();
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

    public function detail($id='')
    {
    	$sql = "SELECT * from t_sc_masuk where id_sc = '$id' ";
    	$query = $this->db->query($sql);
    	return $query->result_array();
    }

    function tambah_stok_sc($data, $id)
	{
		// input ke tbl_stok
		// ambil data stok dr tbl_sc
		// update tbl_sc set jumlah = sisa_jumlah + tambahan_stok

		$add_stock = $this->db->insert('t_sc_masuk', $data);
		if($add_stock){
			$sisa_jumlah = $this->get_by_id($id)['jumlah'];
			$jumlah_sekarang = (int) $sisa_jumlah + (int) $data['jumlah_sc_masuk'];
			$dt = array('jumlah' => $jumlah_sekarang );
			// print_r($data); die();
			$update_jumlah = $this->edit($dt, $id);
			if($update_jumlah){
				return true;
			}
		}

		return false;
    }


    public function delete($id='')
    {
    	return $this->db->delete($this->tbl, array($this->pk => $id));
    }

    public function get_by_id($id='')
    {
    	$query="select sup.nama as nama_supplier,sc.nama_sc as nama_sc, 
		        sc.jumlah, sc.produsen, sc.id_sup, sc.harga_beli, sc.harga_jual, sc.id_sc
		from t_sc_sup sup,t_sc sc 
		where sup.id_sup=sc.id_sup AND sc.id_sc = '$id'";
		return $this->db->query($query)->row_array();
    }


}
?>