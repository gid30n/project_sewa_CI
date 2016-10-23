<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	/*
		Disini untuk yang login menu.
	*/
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('profile_model');
	}
	public function index()
	{
		$user = null;
		if ($this->session->userdata('user')) {
			$ses_user = $this->session->userdata('user');			
			$user = $this->profile_model->get_user($ses_user['id_user']);

			if($user['admin'] === "0"){
				redirect('dashboard-cus','refresh');
			}else{
				redirect('dashboard','refresh');
			}																
		}

		$data = array(
			'title' => "Sewania - Sewa Peralatan Pesta Online",
			'content' => "front/login",
			'msg_login' => $this->session->userdata('msg_login'),
			'user' => $user,
			);
		$this->load->view('layout/wrapper', $data);
	}

	public function valid()
	{
		$username = $this->input->post("uname", TRUE);
		$password = $this->input->post("upass", TRUE);

		if(!empty($username)){

			if(!empty($password)){

				if($this->login_model->check_username($username)){
					$res_login = $this->login_model->check_password($username, $password);
					if(isset($res_login)){
						$this->session->set_userdata( 'user', array( 'id_user' => $res_login['id_user'], 'admin' => $res_login['admin']));
						$this->session->set_userdata('msg_login', array('msg' => 'Success !.', 'status' => true, 'admin' => $res_login['admin']));
						redirect('login','refresh');
						// if($res_login['admin'] === -9){
						// 	$this->session->set_userdata( 'user', array( 'id_user' => $res_login['id_user'], 'admin' => $res_login['admin']));
						// 	$this->session->set_userdata('msg_login', array('msg' => 'Success !.', 'status' => true, 'admin' => $res_login['admin']));
						// 	redirect('login','refresh');
						// }else{
						// 	$this->session->set_userdata( 'user', array( 'id_user' => $res_login['id_user'], 'admin' => $res_login['admin']));
						// 	$this->session->set_userdata('msg_login', array('msg' => 'Success !.', 'status' => true, 'admin' => $res_login['admin']));
						// 	redirect('login','refresh');
						// }
					}else{
						$this->session->set_userdata('msg_login', array('msg' => 'Password anda salah !.', 'status' => false));
						redirect('login','refresh');
					}
				}else{
					$this->session->set_userdata('msg_login', array('msg' => 'Username anda belum terdaftar !.', 'status' => false));
					redirect('login','refresh');
				}

			}else{
				$this->session->set_userdata('msg_login', array('msg' => 'Silakan mengisikan password!.', 'status' => false));
				redirect('login','refresh');
			}

		}else{
			$this->session->set_userdata('msg_login', array('msg' => 'Silakan mengisikan username!.', 'status' => false));
			redirect('login','refresh');
		}
		
	}

	public function forgot_pass(){
		$data = array(
			'title' => "Sewania - Sewa Peralatan Pesta Online",
			'content' => "front/forgot-pass", 
			);
		$this->load->view('layout/wrapper', $data);
	}

	public function process_forgot(){
		$email = $this->input->post("email", TRUE);
		if(!empty($email)){
			if(check_valid_email_with_mailgun($email)){

				/*
				** True condition
				*/



			}else{
				$this->session->set_userdata('msg_forgot', array('msg' => 'Email anda tidak valid!.', 'status' => false));
				redirect('forgot-pass','refresh');
			}
		}else{
			$this->session->set_userdata('msg_forgot', array('msg' => 'Silakan mengisikan email!.', 'status' => false));
			redirect('forgot-pass','refresh');
		}
	}

	public function logout(){
		$this->login_model->update_logout($this->session->userdata('user')['id_user']);
		$this->session->unset_userdata('user');
		redirect('login','refresh');
	}
}
