<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_login extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->tbl = "t_user";
	}
 
	function cek_user($username,$password)
	{
		
		$sql = $this->db->query("select * from ".$this->tbl. " where nama='".$username."' and pass='".$password."' ");
		return $sql->row();
	}
	function ambil_user($username)
        {
        $query = $this->db->get_where($this->tbl, array('username' => $username));
        $query = $query->result_array();
        if($query){
            return $query[0];
        }
    }
}
?>