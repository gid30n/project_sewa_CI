<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	/*
		Disini untuk yang home menu atau halaman utama.
	*/
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		$this->load->model('profile_model');
		$this->load->model('order_model');
	}

	public function index()
	{
		if($this->session->userdata('user')){
			$ses_admin = $this->session->userdata('user');
			$data = array(
			'title' => "Sewania - Sewa Peralatan Pesta Online",
			'content' => "backend/order",
			'user' => $this->profile_model->get_user($ses_admin['id_user']) 
			);
			$this->load->view('layout_backend/wrapper', $data);
		}else{
			redirect('login','refresh');
		}
	}

	public function client(){
		if($this->session->userdata('user')){
			$ses_admin = $this->session->userdata('user');
			$data = array(
			'title' => "Sewania - Sewa Peralatan Pesta Online",
			'content' => "backend/order",
			'user' => $this->profile_model->get_user($ses_admin['id_user']) 
			);
			$this->load->view('layout_backend/wrapper', $data);
		}else{
			redirect('login','refresh');
		}
	}

	public function history(){

	}

	public function history_client(){

	}
}
