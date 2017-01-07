<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	/*
		Disini untuk yang home menu atau halaman utama.
	*/
	//public function __construct()
	//{
        // Call the CI_Model constructor
	//	parent::__construct();
		//$this->load->model('profile_model');
	//}

	public function index()
	{
		$user = null;
		if ($this->session->userdata('user')) {
			$ses_user = $this->session->userdata('user');			
			$user = $this->profile_model->get_user($ses_user['id_user']);																
		}

		$data = array(
			'title' => "Sewania - Sewa Peralatan Pesta Online",
			'content' => "front/home", 
			'user' => $user,			
			);
					
		$this->load->view('layout/wrapper', $data);
	}
        public function kontak(){
		$user = null;
		if ($this->session->userdata('user')) {
			$ses_user = $this->session->userdata('user');			
			$user = $this->profile_model->get_user($ses_user['id_user']);																
		}

		$data = array(
			'title' => "Sewania - Sewa Peralatan Pesta Online",
			'content' => "front/kontak-us",
			'user' => $user,			 				
			);
					
		$this->load->view('layout/wrapper', $data);
	}
}
