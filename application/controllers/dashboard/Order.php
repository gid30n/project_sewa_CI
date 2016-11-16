<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	/*
		Disini untuk yang home menu atau halaman utama.
	*/
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		$this->load->model('profile_model');
		$this->load->model('order_model');
		$this->load->model('konsultasi_model');
	}

	public function index()
	{
		if($this->session->userdata('user')){
			$ses_admin = $this->session->userdata('user');
			$data = array(
				'title' => "Sewania - Sewa Peralatan Pesta Online",
				'content' => "backend/order-new",
				'user' => $this->profile_model->get_user($ses_admin['id_user']),
				'data_order' => $this->order_model->get_order("new"),
				'jum_new_konsultasi' => $this->konsultasi_model->count_new_konsultasi(),
				'jum_history_konsultasi' => $this->konsultasi_model->history_count_konsultasi()
			);
			$this->load->view('layout_backend/wrapper', $data);
		}else{
			redirect('login','refresh');
		}
	}

	public function client(){
		if($this->session->userdata('user')){
			$ses_admin = $this->session->userdata('user');
			$data = array(
				'title' => "Sewania - Sewa Peralatan Pesta Online",
				'content' => "backend/order-new",
				'user' => $this->profile_model->get_user($ses_admin['id_user']),				 
				'data_order' => $this->order_model->get_order("valid"),
			);
			$this->load->view('layout_backend/wrapper', $data);
		}else{
			redirect('login','refresh');
		}
	}

	public function detail($id){
		$data_detail = $this->order_model->get_order_by_id($id);
		if(count($data_detail) === 0){
			redirect('dashboard-cus/order','refresh');
		}
		if($this->session->userdata('user')){
			$ses_admin = $this->session->userdata('user');
			$data = array(
				'title' => "Sewania - Sewa Peralatan Pesta Online",
				'content' => "backend/order",
				'user' => $this->profile_model->get_user($ses_admin['id_user']),
				'data_detail' => $data_detail,
				'jum_new_konsultasi' => $this->konsultasi_model->count_new_konsultasi(),
				'jum_history_konsultasi' => $this->konsultasi_model->history_count_konsultasi()
			);
			$this->load->view('layout_backend/wrapper', $data);
		}else{
			redirect('login','refresh');
		}
	}

	public function delete($id, $id_order){
		if(!$this->session->userdata("user")){
			redirect('login','refresh');
		}
		$ses_admin = $this->session->userdata('user');

		if ($this->order_model->del($id, $id_order)) {
			redirect('/dashboard-cus/order/detail/'.$id_order,'refresh');
		}
	}

	public function history(){

	}

	public function history_client(){

	}
}
