<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peralatan extends CI_Controller {
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
			if($ses_admin['admin']){
				$data = array(
					'title' => "Dashboard Sewania",
					'content' => "backend/peralatan", 
					'user' => $this->profile_model->get_user($ses_admin['id_user']),
					'business_profile' => $this->profile_model->get_business_profile($ses_admin['id_user']),
					);
				$this->load->view('layout_backend/wrapper', $data);
			}else{
				redirect('logout','refresh');
			}
		}else{
			redirect('logout','refresh');
		}
	}

	public function new_ads(){
		if($this->session->userdata('user')){
			$ses_admin = $this->session->userdata('user');
			if($ses_admin['admin']){
				$data = array(
					'title' => "Dashboard Sewania",
					'content' => "backend/peralatan-new", 
					'user' => $this->profile_model->get_user($ses_admin['id_user']),
					'business_profile' => $this->profile_model->get_business_profile($ses_admin['id_user']),
					);
				$this->load->view('layout_backend/wrapper', $data);
			}else{
				redirect('login','refresh');
			}
		}else{
			redirect('login','refresh');
		}
	}

	public function post(){
		if($this->session->userdata("user")){
			$ses_admin = $this->session->userdata('user');
			if($ses_admin['admin']){
				$kategori = $this->input->post("kategori", TRUE);
				$title = $this->input->post("j_iklan", TRUE);
				$sub_kategori = $this->input->post("sub_kategori", TRUE);
				$super_sub_kategori = $this->input->post("super_sub_kategori", TRUE);
				$jenis_acara = $this->input->post("j_acara", TRUE);
				$desc_produk = $this->input->post("d_produk", TRUE);
				$harga = $this->input->post("harga_produk", TRUE);
				$province = $this->input->post("provinsi", TRUE);
				$lokasi = $this->input->post("lokasi", TRUE);

				// Post data ads


				$filesCount = count($_FILES['gallerys']['name']);
				for($i = 0; $i < $filesCount; $i++){
					$_FILES['gallery']['name'] = $_FILES['gallerys']['name'][$i];
					$_FILES['gallery']['type'] = $_FILES['gallerys']['type'][$i];
					$_FILES['gallery']['tmp_name'] = $_FILES['gallerys']['tmp_name'][$i];
					$_FILES['gallery']['error'] = $_FILES['gallerys']['error'][$i];
					$_FILES['gallery']['size'] = $_FILES['gallerys']['size'][$i];

					$uploadPath = 'uploads/gallerys/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']	= '100';
					$config['max_width'] = '1024';
					$config['max_height'] = '768';

					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('gallery')){
						$fileData = $this->upload->data();
						$uploadData[$i]['title'] = $title;
						$uploadData[$i]['alt'] = $title;
						$uploadData[$i]['path'] = base_url().$uploadPath.$fileData['file_name'];
					}
				}

			}else{
				redirect('login','refresh');
			}
		}else{
			redirect('login','refresh');
		}
	}

}
