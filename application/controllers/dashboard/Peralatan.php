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
		$this->load->model("peralatan_model");
	}
	public function index()
	{
		if($this->session->userdata('user')){
			$ses_admin = $this->session->userdata('user');
			// if($ses_admin['admin']){
				$data = array(
					'title' => "Dashboard Sewania",
					'content' => "backend/peralatan", 
					'user' => $this->profile_model->get_user($ses_admin['id_user']),
					'business_profile' => $this->profile_model->get_business_profile($ses_admin['id_user']),
					'data' => $this->peralatan_model->get_all_ads(),
					'msg_peralatan' => $this->session->userdata('msg_peralatan'),
					);
				$this->load->view('layout_backend/wrapper', $data);
			// }else{
			// 	redirect('logout','refresh');
			// }
		}else{
			redirect('logout','refresh');
		}
	}

	public function new_ads(){
		if($this->session->userdata('user')){
			$ses_admin = $this->session->userdata('user');
			// if($ses_admin['admin']){
				$data = array(
					'title' => "Dashboard Sewania",
					'content' => "backend/peralatan-new", 
					'user' => $this->profile_model->get_user($ses_admin['id_user']),
					'business_profile' => $this->profile_model->get_business_profile($ses_admin['id_user']),
					);
				$this->load->view('layout_backend/wrapper', $data);
			// }else{
			// 	redirect('login','refresh');
			// }
		}else{
			redirect('login','refresh');
		}
	}

	public function post(){
		if($this->session->userdata("user")){
			$ses_admin = $this->session->userdata('user');
			if($ses_admin['admin'] === "1" || $ses_admin['admin'] === "-9"){
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
				$data_signup = array(
					"title" => $title,
					"descript" => $desc_produk,
					"ranting" => 0,
					"price" => $harga,
					"date_publish" => date('Y-m-d H:i:s'),
					"id_user" => $ses_admin['id_user'],
					"id_kategori" => $kategori,
					"id_sub_kategori" => $sub_kategori,
					"id_super_sub_kategori" => $super_sub_kategori,
					"id_province" => $province,
					"id_region" => $lokasi,
					);

				$id_ads = $this->peralatan_model->post_ads($data_signup);

				$filesCount = count($_FILES['gallerys']['name']);
				for($i = 0; $i < $filesCount; $i++){
					$_FILES['gallery']['name'] = $_FILES['gallerys']['name'][$i];
					$_FILES['gallery']['type'] = $_FILES['gallerys']['type'][$i];
					$tmpFile = $_FILES['gallerys']['tmp_name'][$i];
					if(!empty($tmpFile)){
						// vuln on list but i dont no to exploit that!!!!!!! <--- vuln mas brow
						list($width, $height) = getimagesize($tmpFile);
    					// check if the file is really an image
						if ($width == null && $height == null) {
							// redirect('/peralatan','refresh');
							return;
						}
    					// resize if necessary
						if ($width >= 1024 && $height >= 768) {
							$res = $tmpFile;
							$image = new Imagick($tmpFile);
							$image->thumbnailImage(1024, 768);
							$image->writeImage($res);
						}
						$_FILES['gallery']['tmp_name'] = $tmpFile;
						$_FILES['gallery']['error'] = $_FILES['gallerys']['error'][$i];
						$_FILES['gallery']['size'] = $_FILES['gallerys']['size'][$i];

						$uploadPath = 'uploads/gallery/';
						$config['upload_path'] = $uploadPath;
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_width'] = '1024';
						$config['max_height'] = '768';

						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('gallery')){
							$fileData = $this->upload->data();
							$uploadData[$i]['title'] = $title;
							$uploadData[$i]['alt'] = $title;
							$uploadData[$i]['src'] = base_url().$uploadPath.$fileData['file_name'];
							$uploadData[$i]['id_ads'] = $id_ads;
						}
					}
					
				}

				if(!empty($uploadData)){
                	//Insert file information into the database
                	// tes 
					$insert = $this->peralatan_model->post_gallerys($uploadData);
					$this->session->set_userdata('msg_peralatan', array('msg' => 'Success !.', 'status' => true));
					redirect('peralatan','refresh');
				}else{
					// Fail upload
					$this->peralatan_model->delete_ads($id_ads);
					redirect('peralatan','refresh');
				}

			}else{
				redirect('logout','refresh');
			}
		}else{
			redirect('login','refresh');
		}
	}

}
