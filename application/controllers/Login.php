<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
			$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('login/login_page');
	}

	public function logout($value='')
	{
        $this->session->sess_destroy();
        redirect();
	}

	public function set_session($username,$level_user='')
	{
		$this->session->set_userdata(array(
                'isLogin'   => TRUE, //set data telah login
                'uname'  => $username, //set session username
                'level'	=>	$level_user,
               ));
		if ($level_user=='1') {
			redirect('owner','refresh');  //redirect ke halaman owner
		} elseif ($level_user=='2') {
			redirect('administrasi','refresh');  //redirect ke halaman administrasi
		} elseif ($level_user=='3') {
			redirect('purchasing','refresh');  //redirect ke halaman purchasing
		} 
                
            
	}

function do_login()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        
        $cek = $this->m_login->cek_user($username,md5($password)); //melakukan persamaan data dengan database
        if(count($cek) == 1){ //cek data berdasarkan username & pass
          	$this->set_session($username,$cek->level_user);
            
               }else{ //jika data tidak ada yng sama dengan database
            echo "<script>alert('Gagal Login, Masukkan Username dan Password secara Benar')</script>";
            redirect('login','refresh');
        }
        
    }





}
