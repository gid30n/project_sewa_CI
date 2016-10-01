<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	/*
		Disini untuk yang profile admin menu atau halaman utama dashboard.
	*/
	public function index()
	{
		if($this->session->userdata('user')){
			$ses_admin = $this->session->userdata('user');
			if($ses_admin['admin']){
				$data = array(
					'title' => "Dashboard Sewania",
					'content' => "backend/profile", 
					);
				$this->load->view('layout/wrapper', $data);
			}else{
				redirect('login','refresh');
			}
		}else{
			redirect('login','refresh');
		}
	}

	public function client(){
		if($this->session->userdata('user')){
			$data = array(
				'title' => "Dashboard Sewania",
				'content' => "backend/profile-client", 
				);
			$this->load->view('layout/wrapper', $data);
		}else{
			redirect('login','refresh');
		}
	}

}
