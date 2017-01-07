<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('profile_model');
		//$this->load->model('carts_model');
	}

	public function index()
	{
		$user = null;
		if ($this->session->userdata('user')) {
			$ses_user = $this->session->userdata('user');			
			$user = $this->profile_model->get_user($ses_user['id_user']);
			$data = array(
				'title' => "Sewania - Sewa Peralatan Pesta Online",
				'content' => "front/cart", 
				'user' => $user,
				'msg_carts' => $this->session->userdata("msg_carts")		
			);
			$this->load->view('layout/wrapper', $data);																	
		}else{
			// redirect('login','refresh');
			$data = array(
				'title' => "Sewania - Sewa Peralatan Pesta Online",
				'content' => "front/cart", 
				// 'user' => $user,
				'msg_carts' => $this->session->userdata("msg_carts")		
			);
			$this->load->view('layout/wrapper', $data);			
		}

		// $data = array(
		// 	'title' => "Sewania - Sewa Peralatan Pesta Online",
		// 	'content' => "front/cart", 
		// 	'user' => $user,
		// 	'msg_carts' => $this->session->userdata("msg_carts")		
		// 	);
					
		// $this->load->view('layout/wrapper', $data);
	}

	public function delete($rowid){
		// $user = null;
		// if ($this->session->userdata('user')) {
		// 	$ses_user = $this->session->userdata('user');			
		// 	$user = $this->profile_model->get_user($ses_user['id_user']);																
		// }else{
		// 	redirect('login','refresh');
		// }
		$this->cartsewania->remove($rowid);
		redirect('carts','refresh');
	}

	public function edit($rowid){
		$user = null;
		if ($this->session->userdata('user')) {
			$ses_user = $this->session->userdata('user');			
			$user = $this->profile_model->get_user($ses_user['id_user']);
			// redirect('login','refresh');
			$data = array(
			"rowid" => $rowid,
			"status" => 0,
			"jum_item" => $this->input->post('jum_item', TRUE)
			// "id" => $this->encryption->decrypt($this->input->post("id_ads", TRUE)),
			// "no_telp" => $this->input->post("telp", TRUE),
			// "lokasi" => $this->input->post("acara", TRUE),
			// "tamu" => $this->input->post("tamu", TRUE),
			// "alamat" => $this->input->post("alamat", TRUE),
			// "date_sewa" => $this->input->post("start_acara", TRUE),
			// "date_balik" => $this->input->post("end_acara", TRUE),
			// "desc_order" => $this->input->post("des_acara", TRUE),
			// "status_order" => 0,
			// "id_user" => $ses_admin['id_user']
			);
			$this->cartsewania->update($data);
			redirect('carts','refresh');																
		}else{
			// redirect('login','refresh');
			$data = array(
			"rowid" => $rowid,
			"status" => 0,
			"jum_item" => $this->input->post('jum_item', TRUE)
			// "id" => $this->encryption->decrypt($this->input->post("id_ads", TRUE)),
			// "no_telp" => $this->input->post("telp", TRUE),
			// "lokasi" => $this->input->post("acara", TRUE),
			// "tamu" => $this->input->post("tamu", TRUE),
			// "alamat" => $this->input->post("alamat", TRUE),
			// "date_sewa" => $this->input->post("start_acara", TRUE),
			// "date_balik" => $this->input->post("end_acara", TRUE),
			// "desc_order" => $this->input->post("des_acara", TRUE),
			// "status_order" => 0,
			// "id_user" => $ses_admin['id_user']
			);
			$this->cartsewania->update($data);
			redirect('carts','refresh');
		}		
	}

	public function checkout(){
		// process checkout
		$nama = $this->input->post("cus_nama", TRUE);
		$telp = $this->input->post("cus_telp", TRUE);
		$email = $this->input->post('cus_email', TRUE);
		$alamat = $this->input->post("cus_alamat", TRUE);
		$ket = $this->input->post("cus_descript", TRUE);
		$tgl_sewa = $this->input->post("tgl_sewa", TRUE);
		$tgl_kembali = $this->input->post("tgl_kembali", TRUE);
		$jenis_kelamin = $this->input->post("jenis_kelamin", TRUE);

		if (!isset($nama) && !isset($telp) && !isset($email) && !isset($alamat)) {
			// redirect gagal
			$this->session->set_userdata('msg_carts', array('msg' => 'Silakan isi data diri sebelum melakukan checkout !.', 'status' => false));
			redirect('/carts','refresh');
		}

		$captcha_answer = $this->input->post('g-recaptcha-response');
		$captcha_response = $this->recaptcha->verifyResponse($captcha_answer);

		if (!$captcha_response['success']) {		
			// redirect gagal
			$this->session->set_userdata('msg_carts', array('msg' => 'Anda belum centang recaptcha !.', 'status' => false));
			redirect('/carts','refresh');
		}

		// prosess insert to order

		$id_order = $this->carts_model->order(array("nama" => $nama, "jenis_kelamin" => $jenis_kelamin, "no_telp" => $telp, "email" => $email, "alamat" => $alamat, "ket" => $ket, "date_order" => date("Y-m-d H:i:s"), "date_sewa" => $tgl_sewa, "date_kembali" => $tgl_kembali, "ava" => rand(1,2).".png","status_order" => "new"));
		if (!isset($id_order)) {
			// redirect gagal
			$this->session->set_userdata('msg_carts', array('msg' => 'Silakan isi data diri sebelum melakukan checkout !.', 'status' => false));
			redirect('/carts','refresh');
		}

		// prosess insert to detail order
		$data_order = $this->cartsewania->contents();
		if (isset($data_order)) {
			$res = $this->carts_model->checkout($data_order, $id_order);
			if(isset($res)){
				$this->cartsewania->destroy();
				$this->session->set_userdata('msg_carts', array('msg' => 'Success, admin akan melakukan konfirmasi melalui telpon atau email. Terimakasi telah menggunakan jasa kami !.', 'status' => true));
				redirect('/carts','refresh');
			}else{
				// redirect gagal
				$this->session->set_userdata('msg_carts', array('msg' => 'Silakan melakukan check data sebelum melakukan checkout !.', 'status' => false));
				redirect('/carts','refresh');
			}
		}else{
			// redirect gagal
			$this->session->set_userdata('msg_carts', array('msg' => 'Silakan melakukan order terlebih dahulu !.', 'status' => false));
			redirect('/carts','refresh');
		}
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */ ?>