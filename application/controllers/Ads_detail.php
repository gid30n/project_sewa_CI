<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads_detail extends CI_Controller {
	/*
		Disini untuk yang home menu atau halaman utama.
	*/
	public function __construct()
	{
        // Call the CI_Model constructor
		parent::__construct();
		$this->load->model('profile_model');
		$this->load->model('ads_model');
	}
	public function index()
	{
		redirect('/','refresh');
	}

	public function read($slug){
		$user = null;
		if ($this->session->userdata('user')) {
			$ses_user = $this->session->userdata('user');			
			$user = $this->profile_model->get_user($ses_user['id_user']);																
		}
		$slug = $this->security->xss_clean($slug);
		if(!empty($slug)){
			$data = array(
				'title' => "Sewania - Sewa Peralatan Pesta Online",
				'content' => "front/ads-detail", 
				'user' => $user,
				'data' => $this->ads_model->get_ads_by_slug($slug)
				);
			$this->load->view('layout/wrapper', $data);
		}else{
			redirect('/','refresh');
		}
	}
}
