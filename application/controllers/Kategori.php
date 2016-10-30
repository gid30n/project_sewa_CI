<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	/*
		Disini untuk yang signup menu.
	*/
	public function __construct()
	{
		parent::__construct();
		$this->load->model('profile_model');
		$this->load->model("kategori_model");
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
			'content' => "front/kategori", 
			'user' => $user,
			);
		$this->load->view('layout/wrapper', $data);
	}

	public function sub($slug){
		$slug = $this->security->xss_clean($slug);
		$user = null;
		if ($this->session->userdata('user')) {
			$ses_user = $this->session->userdata('user');			
			$user = $this->profile_model->get_user($ses_user['id_user']);																
		}
		if (!empty($slug)) {
			$data_ads = $this->kategori_model->get_ads_by_slug_sub($slug);
			if(!empty($data_ads)){
				$data = array(
					'title' => "Sewania - Sewa Peralatan Pesta Online",
					'content' => "front/kategori-detail", 
					'user' => $user,
					'data' => $data_ads
					);
				$this->load->view('layout/wrapper', $data);
			}else{
				redirect('kategori','refresh');
			}
		}else{
			redirect('kategori','refresh');
		}
	}
}
