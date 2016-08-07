<?php

class Auth{

	public function isLogin()
	{
		$ci =& get_instance();
		return $ci->session->userdata('isLogin');
	}

	public function allowed($arr)
	{
		$ci =& get_instance();
		$lvl = $ci->session->userdata('level');
		return in_array($lvl, $arr) ? true : false;
	}

	public function base()
	{
		$ci =& get_instance();
		$lvl = $ci->session->userdata('level');

		if($lvl == '1'){
			$base = '/owner';
		}elseif ($lvl == '2') {
			$base = '/administrasi';
		}elseif ($lvl == '3') {
			$base = '/purchasing';
		}
	}

}