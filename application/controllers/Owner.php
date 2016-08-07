<?php

/**
* 
*/
class Owner extends CI_Controller
{
	
	function __construct()
		{
			parent::__construct();
			//	$this->load->model('m_owner');  
			$this->load->library('lib_output');
			$this->load->library('auth');

			if(!($this->auth->isLogin() && $this->auth->allowed(['1']))){
				redirect('/');
			}
		}

public function index()
{
	$this->lib_output->output_display('owner/home');
}


}
