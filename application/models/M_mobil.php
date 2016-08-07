<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_mobil extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->tbl = "t_mobil";
		$this->pk = "id_mobil";
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
    	$sql = "SELECT * FROM t_mobil mbl, t_merek mrk WHERE mrk.id_merek = mbl.merk AND mbl.id_mobil = '$id'";
		$query = $this->db->query($sql);
    	return $query->result_array();
    }

    public function search_nopol($nopol='')
    {
    	$this->db->where('no_pol', trim($nopol));
		
		$query=$this->db->get($this->tbl);
		return $query->row_array();
    }


}
?>