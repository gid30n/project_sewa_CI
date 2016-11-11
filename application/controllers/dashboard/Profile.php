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
		$this->load->model('konsultasi_model');
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
					'msg_kategori' => $this->session->userdata('msg_kategori'),
					'business_profile' => $this->profile_model->get_business_profile($ses_admin['id_user']),
					'jum_new_konsultasi' => $this->konsultasi_model->count_new_konsultasi(),
					'jum_history_konsultasi' => $this->konsultasi_model->history_count_konsultasi(),
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
				'msg_delete' => $this->session->userdata('msg_delete'),
				);
			$this->load->view('layout_backend/wrapper', $data);
		}else{
			redirect('login','refresh');
		}
	}

	public function delete_account(){
		if($this->session->userdata('user')){
			$dt = $this->session->userdata('user');
			$id_user = $dt['id_user'];
			$dt['status'] = 1;

			$sewania = $this->input->post("sewania", TRUE);
			$captcha_answer = $this->input->post('g-recaptcha-response');
			$captcha_response = $this->recaptcha->verifyResponse($captcha_answer);

			if ($captcha_response['success']) {
				if(!empty($sewania)){
					if($sewania === "ainaweS"){						
						$this->profile_model->delete_account($id_user,$dt);
						redirect('/logout','refresh');
					}
				}else{
					$this->session->set_userdata('msg_delete', array('msg' => 'Inputan tidak sesuai', 'status' => false));
					redirect('/dashboard-cus','refresh');
				}
			}else{
				$this->session->set_userdata('msg_delete', array('msg' => 'Mohon mengikuti ketentuan yang ada!', 'status' => false));
				redirect('/dashboard-cus','refresh');
			}			
		}
	}

	public function change_avatar_client(){
		if($this->session->userdata('user')){
			$ses_user = $this->session->userdata('user');
			$tmpFile = $_FILES['avatar']['tmp_name'];
			if(!empty($tmpFile)){
						// vuln on list but i dont no to exploit that!!!!!!! <--- vuln mas brow
				list($width, $height) = getimagesize($tmpFile);
    					// check if the file is really an image
				if ($width == null && $height == null) {
					redirect('/dashboard-cus','refresh');
					return;
				}
						// resize if necessary
						// belum bener jadi di matiin dlw
				if ($width >= 215 || $height >= 215) {
					$config['image_library']  = 'gd2';
					$config['source_image'] = $tmpFile;
					$config['width']         = 215;
					$config['height']       = 215;

					$this->image_lib->initialize($config);

					$this->image_lib->resize();
				}
				$_FILES['avatar']['tmp_name'] = $tmpFile;

				$uploadPath = 'uploads/avatar/';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_width'] = '215';
				$config['max_height'] = '215';

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('avatar')){
					$fileData = $this->upload->data();
					$dataUp['avatar'] = $uploadPath.$fileData['file_name'];
				}

				if(!empty($dataUp)){
					$this->profile_model->change_photo_profile($ses_user['id_user'], $dataUp);
					redirect('dashboard-cus','refresh');
				}else{
					redirect('dashboard-cus','refresh');
				}
			}
			redirect('dashboard-cus','refresh');
		}else{
			redirect('login','refresh');
		}
	}

}
