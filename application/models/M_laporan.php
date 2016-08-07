<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_laporan extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}
 
	function get_laporan_servis($tanggal)
	{
		$sql = $this->db->query("SELECT * 
			FROM t_wo wo, t_mobil mbl 
			WHERE wo.id_mobil = mbl.id_mobil AND DATE_FORMAT(wo.tgl_masuk, '%m-%Y') = '$tanggal' ");
		return $sql->result_array();
	}

	function get_laporan_sc($tanggal)
    {
    	$query = "SELECT aa.nama_sc, aa.id_sc, aa.jumlah, IFNULL(aa.keluar, 0) as keluar, IFNULL(bb.masuk, 0) as masuk from
					(SELECT yy.id_sc, yy.jumlah, yy.nama_sc, xx.keluar FROM 
						(SELECT id_sc, COUNT(*) as keluar FROM wo_sc where DATE_FORMAT(tanggal, '%m-%Y') = '$tanggal' group by id_sc) xx 
					RIGHT JOIN t_sc yy ON xx.id_sc = yy.id_sc ) aa
					LEFT JOIN (SELECT id_sc, SUM(jumlah_sc_masuk) as masuk from t_sc_masuk where DATE_FORMAT(tgl_sc_masuk, '%m-%Y') = '$tanggal' group by id_sc) bb
					ON aa.id_sc = bb.id_sc";

        /*$sql = $this->db->query("SELECT * 
        	FROM t_sc_masuk sc_masuk, t_sc sc, t_sc_sup sup 
        	WHERE sc.id_sup = sup.id_sup AND sc.id_sc = sc_masuk.id_sc AND DATE_FORMAT(tgl_sc_masuk, '%m-%Y') = '$tanggal' ");*/
		return $this->db->query($query)->result_array();
    }

    function get_laporan_pembayaran($tanggal)
    {
    	$sql = $this->db->query("SELECT mbl.pemilik, mbl.no_pol, wo.id_wo, byr.jml_total, byr.tgl_pembayaran FROM t_pembayaran byr, t_wo wo, t_mobil mbl 
    		WHERE byr.id_wo = wo.id_wo AND wo.id_mobil = mbl.id_mobil AND DATE_FORMAT(byr.tgl_pembayaran, '%m-%Y') = '$tanggal' ");
		return $sql->result_array();
    }

    public function get_year($type)
    {
    	switch ($type) {
    		case 'servis': $sql = $this->db->query("SELECT DISTINCT DATE_FORMAT(tgl_masuk, '%Y') as tahun FROM t_wo ORDER BY tahun DESC"); break;
    		case 'suku_cadang': $sql = $this->db->query("SELECT DISTINCT DATE_FORMAT(tgl_sc_masuk, '%Y') as tahun FROM t_sc_masuk ORDER BY tahun DESC"); break;
    		case 'pembayaran': $sql = $this->db->query("SELECT DISTINCT DATE_FORMAT(tgl_pembayaran, '%Y') as tahun FROM t_pembayaran ORDER BY tahun DESC"); break;
    		default:
    			return false;
    			break;
    	}

    	$col = $sql->result_array();
    	return array_column($col,"tahun");
    }
}
?>