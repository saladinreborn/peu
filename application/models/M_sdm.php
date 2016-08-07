<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_sdm extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->tbl = "t_sdm";
		$this->pk = "id_sdm";
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
    	$this->db->where($this->pk, $id);
    	$query = $this->db->get($this->tbl);
    	//$query = $this->db->get_where($this->tbl, array($this->pk => $id));
    	return $query->result_array();
    }


}
?>