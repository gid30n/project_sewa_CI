<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('profile_model');	
		//$this->load->model('konsultasi_model');	
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
			'content' => "front/konsultasi", 
			'user' => $user,
			'data' => $this->session->userdata('data_konsultasi'),
			'msg_konsultasi' => $this->session->userdata('msg_konsultasi')			
			);
					
		$this->load->view('layout/wrapper', $data);
	}

	public function post_data(){
		$name = $this->input->post("name", TRUE);
		$tlp = $this->input->post("tlp",TRUE);
		$acara = $this->input->post("acara", TRUE);
		$tamu = $this->input->post("tamu", TRUE);
		$des_acara = $this->input->post("des_acara", TRUE);
		$daerah = $this->input->post("daerah", TRUE);
		$tgl_acara = $this->input->post("start_acara", TRUE);

		$captcha_answer = $this->input->post('g-recaptcha-response');
		$captcha_response = $this->recaptcha->verifyResponse($captcha_answer);

		if ($captcha_response['success']) {			
			if (!empty($name)) {
				
				if (!empty($tlp)) {
					
					if (!empty($acara)) {
						
						if (!empty($tamu)) {
							
							if (!empty($des_acara)) {
								
								if (!empty($daerah)) {
									
									if (!empty($tgl_acara)) {
										$data = array(
											"name" => $name,
											"no_telp" => $tlp,
											"acara" => $acara,
											"tamu" => $tamu,
											"descript" => $des_acara,
											'start' => $tgl_acara,
											'tgl_konsultasi' => date('Y-m-d H:i:s'),
											'id_region' => $daerah,
											'status' => 0
										);
										$this->konsultasi_model->insert_konsultasi($data);
										$this->session->set_userdata('msg_konsultasi', array('msg' => 'Permintaan Anda Sudah Terkirim, Tunggu Beberapa Saat Pihak Kami Akan Segera Mengubungi Anda', 'status' => true));
										redirect('konsultasi','refresh');
									}else{
										$data = array(
										"name" => $name,
										"tlp" => $tlp,
										"acara" => $acara,
										"tamu" => $tamu,
										"des_acara" => $des_acara,
										'daerah' => $daerah,
										'tgl_acara' => $tgl_acara
										);
									$this->session->set_userdata('data_konsultasi', $data);
									$this->session->set_userdata('msg_konsultasi', array('msg' => 'Pastikan Anda Sudah Memilih Tanggal Acara !', 'status'=> false));
									redirect('konsultasi','refresh');	
									}

								}else{
									$data = array(
									"name" => $name,
									"tlp" => $tlp,
									"acara" => $acara,
									"tamu" => $tamu,
									"des_acara" => $des_acara,
									'daerah' => $daerah
									);
								$this->session->set_userdata('data_konsultasi', $data);
								$this->session->set_userdata('msg_konsultasi', array('msg' => 'Pastikan Anda Sudah Memilih Daerah Beralangsungnya Acara !', 'status'=> false));
								redirect('konsultasi','refresh');							
								}

							}else{
								$data = array(
								"name" => $name,
								"tlp" => $tlp,
								"acara" => $acara,
								"tamu" => $tamu,
								"des_acara" => $des_acara
								);
							$this->session->set_userdata('data_konsultasi', $data);
							$this->session->set_userdata('msg_konsultasi', array('msg' => 'Pastikan Anda Sudah Mengisi Deskripsi Acara !', 'status'=> false));
							redirect('konsultasi','refresh');
							}

						}else{
							$data = array(
							"name" => $name,
							"tlp" => $tlp,
							"acara" => $acara,
							"tamu" => $tamu
							);
						$this->session->set_userdata('data_konsultasi', $data);
						$this->session->set_userdata('msg_konsultasi', array('msg' => 'Pastikan Anda Sudah Memilih Jumlah Tamu !', 'status'=> false));
						redirect('konsultasi','refresh');
						}

					}else{
						$data = array(
						"name" => $name,
						"tlp" => $tlp,
						"acara" => $acara,
						);
					$this->session->set_userdata('data_konsultasi', $data);
					$this->session->set_userdata('msg_konsultasi', array('msg' => 'Pastikan Anda Sudah Memilih Tipe Acara !', 'status'=> false));
					redirect('konsultasi','refresh');
					}

				}else{
					$data = array(
					"name" => $name,
					"tlp" => $tlp,					
					);
				$this->session->set_userdata('data_konsultasi', $data);
				$this->session->set_userdata('msg_konsultasi', array('msg' => 'Pastikan Telphone Anda Terisi !', 'status'=> false));
				redirect('konsultasi','refresh');
				}

			}else{
				$data = array(
				"name" => $name,				
				);
			$this->session->set_userdata('data_konsultasi', $data);
			$this->session->set_userdata('msg_konsultasi', array('msg' => 'Pastikan Nama Anda Terisi !', 'status'=> false));
			redirect('konsultasi','refresh');
			}
		}else{
			$data = array(
				"name" => $name,
				"tlp" => $tlp,
				"acara" => $acara,
				"tamu" => $tamu,
				"des_acara" => $des_acara,
				"daerah" => $daerah	
				);
			$this->session->set_userdata('data_konsultasi', $data);
			$this->session->set_userdata('msg_konsultasi', array('msg' => 'Silakan menyetujui peraturan main. !', 'status'=> false));
			redirect('konsultasi','refresh');
		}
	}
}

/* End of file Konsultasi.php */
/* Location: ./application/controllers/Konsultasi.php */ ?>