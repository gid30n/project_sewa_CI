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
			'msg_carts' => $this->session->userdata("msg_carts")		
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

	public function checkout(){
		// chek user session
		$user = null;
		if ($this->session->userdata('user')) {
			$ses_user = $this->session->userdata('user');			
			$user = $this->profile_model->get_user($ses_user['id_user']);																
		}else{
			redirect('login','refresh');
		}

		// process checkout
		$data_order = $this->cartsewania->contents();
		if (isset($data_order)) {
			$res = $this->carts_model->checkout($data_order, $user['id_user']);
			if(isset($res)){
				$this->cartsewania->destroy();
				$this->session->set_userdata('msg_carts', array('msg' => 'Success !.', 'status' => true));
				redirect('/carts','refresh');
			}else{
				// redirect gagal
				$this->session->set_userdata('msg_carts', array('msg' => 'Gagal !.', 'status' => false));
				redirect('/carts','refresh');
			}
		}else{
			redirect('/','refresh');
		}
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */ ?>