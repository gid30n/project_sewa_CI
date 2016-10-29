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
		if($this->session->userdata('user')){
			$ses_admin = $this->session->userdata('user');
			$user = null;
			if ($this->session->userdata('user')) {
				$ses_user = $this->session->userdata('user');			
				$user = $this->profile_model->get_user($ses_user['id_user']);																
			}
			if(!empty($slug)){
				$data = array(
					'title' => "Sewania - Sewa Peralatan Pesta Online",
					'content' => "front/order", 
					'user' => $user,
					'data' => $this->ads_model->get_ads_by_slug($slug)
					);
			}else{
				redirect('/','refresh');
			}
			$this->load->view('layout/wrapper', $data);
		}else{
			redirect('login','refresh');
		}
	}

	public function add(){
		if($this->session->userdata('user')){
			$ses_admin = $this->session->userdata('user');

			// $data = array(
			// 'title' => "Sewania - Sewa Peralatan Pesta Online",
			// 'content' => "front/order", 
			// );
			// $this->load->view('layout/wrapper', $data);
		}else{
			redirect('login','refresh');
		}
	}
}
