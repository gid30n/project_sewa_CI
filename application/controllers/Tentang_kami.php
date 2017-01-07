<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_kami extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('profile_model');
	}
	public function index()
	{
		$user = null;
		if ($this->session->userdata('user')) {
			$ses_user = $this->session->userdata('user');			
			$user = $this->profile_model->get_user($ses_user['id_user']);																
		}

		$data = array(
			'title' => "Sewania - Sewa Peralatan Pesta Online",
			'content' => "front/about-us", 
			'user' => $user,			
			);
					
		$this->load->view('layout/wrapper', $data);
	}

}

/* End of file Tentang_kami.php */
/* Location: ./application/controllers/Tentang_kami.php */ ?>