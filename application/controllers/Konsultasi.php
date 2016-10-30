<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profile_model');
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
			'data' => $this->session->userdata('msg_konsultasi'),
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

		$captcha_answer = $this->input->post('g-recaptcha-response');
		$captcha_response = $this->recaptcha->verifyResponse($captcha_answer);

		if ($captcha_response['success']) {			
			if (!empty($name)) {
				var_dump($name.$tlp);
			}
		}else{
			$data = array(
				"name" => $name,
				"acara" => $acara,
				"tamu" => $tamu,
				"des_acara" => $des_acara,	

				);
			$this->session->set_userdata('data_konsultasi', $data);
			$this->session->set_userdata('msg_konsultasi', array('msg' => 'Silakan menyetujui peraturan main.', 'status'=> false));
			redirect('konsultasi','refresh');
		}
	}
}

/* End of file Konsultasi.php */
/* Location: ./application/controllers/Konsultasi.php */ ?>