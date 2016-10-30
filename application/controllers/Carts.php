<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profile_model');
		$this->load->model('carts_model');
	}

	public function index()
	{
		$user = null;
		if ($this->session->userdata('user')) {
			$ses_user = $this->session->userdata('user');			
			$user = $this->profile_model->get_user($ses_user['id_user']);																
		}else{
			redirect('login','refresh');
		}

		$data = array(
			'title' => "Sewania - Sewa Peralatan Pesta Online",
			'content' => "front/cart", 
			'user' => $user,			
			);
					
		$this->load->view('layout/wrapper', $data);
	}

	public function delete($rowid){
		$user = null;
		if ($this->session->userdata('user')) {
			$ses_user = $this->session->userdata('user');			
			$user = $this->profile_model->get_user($ses_user['id_user']);																
		}else{
			redirect('login','refresh');
		}
		$this->cartsewania->remove($rowid);
		redirect('carts','refresh');
	}

	public function edit($rowid){
		$user = null;
		if ($this->session->userdata('user')) {
			$ses_user = $this->session->userdata('user');			
			$user = $this->profile_model->get_user($ses_user['id_user']);																
		}else{
			redirect('login','refresh');
		}
		$data = array(
			"rowid" => $rowid,
			"id" => $this->encryption->decrypt($this->input->post("id_ads", TRUE)),
			"telp" => $this->input->post("telp", TRUE),
			"acara" => $this->input->post("acara", TRUE),
			"tamu" => $this->input->post("tamu", TRUE),
			"alamat" => $this->input->post("alamat", TRUE),
			"start_acara" => $this->input->post("start_acara", TRUE),
			"end_acara" => $this->input->post("end_acara", TRUE),
			"des_acara" => $this->input->post("des_acara", TRUE)
			);
		$this->cartsewania->update($data);
		redirect('carts','refresh');
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */ ?>