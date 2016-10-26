<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_detail extends CI_Controller {
	/*
		Disini untuk yang signup menu.
	*/

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profile_model');
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
			'content' => "front/kategori-detail", 
			'user' => $user,
			);
		$this->load->view('layout/wrapper', $data);
	}
}
