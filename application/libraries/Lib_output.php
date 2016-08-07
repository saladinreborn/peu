<?php

class Lib_output{

	public function output_display($view,$arr=null)
	{
		$ci =& get_instance();
		$data = array('view' => $view, 'arr' => $arr);
		$ci->load->view('layout/main_page',$data);
	}

}