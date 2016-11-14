<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	/*
		Disini untuk yang home menu atau halaman utama.
	*/
	public function __construct()
	{
		parent::__construct();
		$this->load->model('profile_model');
		$this->load->model('ads_model');
	}

	public function index()
	{
		redirect('/','refresh');
	}

	public function show($slug){
		$slug = $this->security->xss_clean($slug);
		// if($this->session->userdata('user')){
		// 	$ses_admin = $this->session->userdata('user');
		// 	$user = null;
		// 	if ($this->session->userdata('user')) {
		// 		$ses_user = $this->session->userdata('user');			
		// 		$user = $this->profile_model->get_user($ses_user['id_user']);																
		// 	}
		// 	if(!empty($slug)){
		// 		$data = array(
		// 			'title' => "Sewania - Sewa Peralatan Pesta Online",
		// 			'content' => "front/order", 
		// 			'user' => $user,
		// 			'data' => $this->ads_model->get_ads_by_slug($slug)
		// 			);
		// 	}else{
		// 		redirect('/','refresh');
		// 	}
		// 	$this->load->view('layout/wrapper', $data);
		// }else{
		// 	redirect('login','refresh');
		// }
		$data = array(
			'title' => "Sewania - Sewa Peralatan Pesta Online",
			'content' => "front/order", 
			'user' => $user,
			'data' => $this->ads_model->get_ads_by_slug($slug)
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function add(){

		if($this->session->userdata('user')){
			$ses_admin = $this->session->userdata('user');
			$data = array(
				"id" => $this->encryption->decrypt($this->input->post("id_ads", TRUE)),
				// "no_telp" => $this->input->post("telp", TRUE),
				// "acara" => $this->input->post("acara", TRUE),
				// "tamu" => $this->input->post("tamu", TRUE),
				// "lokasi" => $this->input->post("alamat", TRUE),
				// "date_sewa" => $this->input->post("start_acara", TRUE),
				// "date_balik" => $this->input->post("end_acara", TRUE),
				// "desc_order" => $this->input->post("des_acara", TRUE),
				"status" => 0,
				// "id_user" => $ses_admin['id_user']
				"jum_item" => $this->input->post("jum_item", TRUE)
				);		
			$this->cartsewania->insert($data);
			redirect('carts','refresh');
		}else{
			$data = array(
				"id" => $this->encryption->decrypt($this->input->post("id_ads", TRUE)),
				// "no_telp" => $this->input->post("telp", TRUE),
				// "acara" => $this->input->post("acara", TRUE),
				// "tamu" => $this->input->post("tamu", TRUE),
				// "lokasi" => $this->input->post("alamat", TRUE),
				// "date_sewa" => $this->input->post("start_acara", TRUE),
				// "date_balik" => $this->input->post("end_acara", TRUE),
				// "desc_order" => $this->input->post("des_acara", TRUE),
				"status" => 0,
				// "id_user" => $ses_admin['id_user']
				"jum_item" => $this->input->post("jum_item", TRUE)
				);		
			$this->cartsewania->insert($data);
			redirect('carts','refresh');
			// redirect('login','refresh');
		}
	}
}
