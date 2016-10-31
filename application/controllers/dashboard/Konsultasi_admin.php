<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi_admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('profile_model');		
		$this->load->model('konsultasi_model');
	}

	public function index()
	{
		$konsultasi = $this->konsultasi_model->get_new_konsultasi();
		if($this->session->userdata('user')){
			$ses_admin = $this->session->userdata('user');
			if ($ses_admin['admin'] === '-9') {
				$data = array(
					'title' => "Dashboard Sewania",
					'kondisi' => "Baru",
					'content' => "backend/konsultasi", 
					'user' => $this->profile_model->get_user($ses_admin['id_user']),
					'business_profile' => $this->profile_model->get_business_profile($ses_admin['id_user']),
					'data' => $konsultasi,
					// 'msg_peralatan' => $this->session->userdata('msg_peralatan'),
					'jum_new_konsultasi' => $this->konsultasi_model->count_new_konsultasi(),
					'jum_history_konsultasi' => $this->konsultasi_model->history_count_konsultasi(),
					);
				$this->load->view('layout_backend/wrapper', $data);
			}else{
				redirect('logout','refresh');
			}
		}else{
			redirect('logout','refresh');
		}
	}

	public function get_history_konsultasi(){
		$konsultasi = $this->konsultasi_model->get_history_konsultasi();
		if($this->session->userdata('user')){
			$ses_admin = $this->session->userdata('user');
			if ($ses_admin['admin'] === '-9') {
				$data = array(
					'title' => "Dashboard Sewania",
					'kondisi' => "History",
					'content' => "backend/konsultasi", 
					'user' => $this->profile_model->get_user($ses_admin['id_user']),
					'business_profile' => $this->profile_model->get_business_profile($ses_admin['id_user']),
					'data' => $konsultasi,
					// 'msg_peralatan' => $this->session->userdata('msg_peralatan'),
					'jum_new_konsultasi' => $this->konsultasi_model->count_new_konsultasi(),
					'jum_history_konsultasi' => $this->konsultasi_model->history_count_konsultasi(),
					);
				$this->load->view('layout_backend/wrapper', $data);
			}else{
				redirect('logout','refresh');
			}
		}else{
			redirect('logout','refresh');
		}
	}

	public function detail_konsultasi($id){
		if (isset($id)) {			
			$konsultasi = $this->konsultasi_model->get_detail($id);
			if($this->session->userdata('user')){
				$ses_admin = $this->session->userdata('user');
				if ($ses_admin['admin'] === '-9') {
					$data = array(
						'title' => "Dashboard Sewania",
						'kondisi' => "History",
						'content' => "backend/detail_konsultasi", 
						'user' => $this->profile_model->get_user($ses_admin['id_user']),
						'business_profile' => $this->profile_model->get_business_profile($ses_admin['id_user']),
						'data' => $konsultasi,
						// 'msg_peralatan' => $this->session->userdata('msg_peralatan'),
						'jum_new_konsultasi' => $this->konsultasi_model->count_new_konsultasi(),
						'jum_history_konsultasi' => $this->konsultasi_model->history_count_konsultasi(),
						);
					$this->load->view('layout_backend/wrapper', $data);
				}else{
					redirect('logout','refresh');
				}
			}else{
				redirect('logout','refresh');
			}
		}
	}

	public function update_status($id){
		if(isset($id)){
			$this->konsultasi_model->update_status($id);
			redirect('dashboard/konsultasi','refresh');
		}
	}

}

/* End of file Konsultasi_admin.php */
/* Location: ./application/controllers/dashboard/Konsultasi_admin.php */ ?>