<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_user extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->tbl = "t_user";
		$this->pk = "id_user";
	}
 
	function get()
	{
		$this->db->select('*');
		$this->db->from($this->tbl);
		$this->db->order_by($this->pk,'DESC');
		$this->db->join('t_level_user', 't_level_user.id_level_user = '.$this->tbl.'.level_user');
		$query = $this->db->get();
		return $query->result_array();
		
		//$this->db->join('t_level_user', 't_level_user.id_level_user = t_user.id_user');
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