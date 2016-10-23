<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	/*
		Disini untuk yang profile admin menu atau halaman utama dashboard.
	*/
	public function __construct()
	{
        // Call the CI_Model constructor
		parent::__construct();
		$this->load->model('profile_model');
	}
	public function index()
	{
		if($this->session->userdata('user')){
			$ses_admin = $this->session->userdata('user');
			if($ses_admin['admin'] === "-9"){
				$data = array(
					'title' => "Dashboard Sewania",
					'content' => "backend/profile", 
					'user' => $this->profile_model->get_user($ses_admin['id_user']),
					'business_profile' => $this->profile_model->get_business_profile($ses_admin['id_user']),
					);
				$this->load->view('layout_backend/wrapper', $data);
			}else{
				redirect('dashboard-cus','refresh');
			}
		}else{
			redirect('login','refresh');
		}
	}

	public function client(){
		if($this->session->userdata('user')){
			$ses_user = $this->session->userdata('user');
			$data = array(
				'title' => "Dashboard Sewania",
				'content' => "backend/profile-client", 
				'user' => $this->profile_model->get_user($ses_user['id_user']),
				'business_profile' => $this->profile_model->get_business_profile($ses_user['id_user']),
				);
			$this->load->view('layout_backend/wrapper', $data);
		}else{
			redirect('login','refresh');
		}
	}

}
