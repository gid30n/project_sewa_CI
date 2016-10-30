<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
	/*
		Disini untuk yang signup menu.
	*/
	public function __construct()
	{
    // Call the CI_Model constructor
		parent::__construct();
		$this->load->model('signup_model');
		$this->load->model('profile_model');		
	}
	public function index()
	{
		$user = null;
		if ($this->session->userdata('user')) {
			$ses_user = $this->session->userdata('user');			
			$user = $this->profile_model->get_user($ses_user['id_user']);																

			if($user['admin'] === 0){
				redirect('dashboard-cus','refresh');
			}elseif ($user['admin'] === -9){
				redirect('dashboard','refresh');
			}else{
				redirect('dashboard-cus','refresh');
			}
		}

		if($this->session->userdata('data_signup')){
			$data = array(
				'title' => "Sewania - Sewa Peralatan Pesta Online",
				'content' => "front/signup", 
				'data' => $this->session->userdata('data_signup'),
				'msg_signup' => $this->session->userdata('msg_signup')
				);
		}else{
			$data = array(
				'title' => "Sewania - Sewa Peralatan Pesta Online",
				'content' => "front/signup",
				'user' => $user,
				);
		}
		
		$this->load->view('layout/wrapper', $data);
	}

	public function validation()
	{
		$first_name = $this->input->post("first_name", TRUE);
		$last_name = $this->input->post("last_name", TRUE);
		$acc_email = $this->input->post("acc_email", TRUE);
		$acc_pass = $this->input->post("acc_pass", TRUE);
		$re_acc_pass = $this->input->post("re-acc_pass", TRUE);
		$term = $this->input->post("term", TRUE);

		// captcha google kang
		$captcha_answer = $this->input->post('g-recaptcha-response');
		$captcha_response = $this->recaptcha->verifyResponse($captcha_answer);

		if ($captcha_response['success']) {
			if($term === "on"){

				if(!empty($first_name)){

					if(!empty($last_name)){

						if(!empty($acc_email)){

							if(check_valid_email_with_mailgun($acc_email)){

								if(!empty($acc_pass)){

									if($acc_pass === $re_acc_pass){

										/*Melakukan insert ke database dengan memanggil model*/
										/*Insert data user*/
										$data_user = array(
											"first_name" => $first_name,
											"last_name" => $last_name,
											"email" => $acc_email,
											"password" => $this->encryption->encrypt($acc_pass),
											"joined" => date('Y-m-d H:i:s'),
											"admin" => 0,
											"avatar" => "assets/img/ava/1.png"
											);
										$this->signup_model->insert_user($data_user);

										$this->session->set_userdata('msg_signup', array('msg' => 'Login Success.', 'status' => true));
										redirect('login','refresh');

									}else{
										$data = array(
											"first_name" => $first_name,
											"last_name" => $last_name,
											"acc_email" => $acc_email,
											);
										$this->session->set_userdata('data_signup', $data);
										$this->session->set_userdata('msg_signup', array('msg' => 'Konfirmasi Password salah!.', 'status' => false));
										redirect('signup','refresh');
									}

								}else{
									$data = array(
										"first_name" => $first_name,
										"last_name" => $last_name,
										"acc_email" => $acc_email,
										);
									$this->session->set_userdata('data_signup', $data);
									$this->session->set_userdata('msg_signup', array('msg' => 'Silakan isi password!.', 'status' => false));
									redirect('signup','refresh');
								}
							}else{
								$data = array(
									"first_name" => $first_name,
									"last_name" => $last_name,
									"acc_pass" => $acc_pass,
									"re_acc_pass" => $re_acc_pass,
									);
								$this->session->set_userdata('data_signup', $data);
								$this->session->set_userdata('msg_signup', array('msg' => 'Silakan menggunakan email yang valid!.', 'status' => false));
								redirect('signup','refresh');
							}

						}else{
							$data = array(
								"first_name" => $first_name,
								"last_name" => $last_name,
								"acc_pass" => $acc_pass,
								"re_acc_pass" => $re_acc_pass,
								);
							$this->session->set_userdata('data_signup', $data);
							$this->session->set_userdata('msg_signup', array('msg' => 'Silakan isi Email!.', 'status' => false));
							redirect('signup','refresh');
						}

					}else{
						$data = array(
							"first_name" => $first_name,
							"acc_email" => $acc_email,
							"acc_pass" => $acc_pass,
							"re_acc_pass" => $re_acc_pass,
							);
						$this->session->set_userdata('data_signup', $data);
						$this->session->set_userdata('msg_signup', array('msg' => 'Silakan isi Nama Belakang!.', 'status' => false));
						redirect('signup','refresh');
					}

				}else{
					$data = array(
						"last_name" => $last_name,
						"acc_email" => $acc_email,
						"acc_pass" => $acc_pass,
						"re_acc_pass" => $re_acc_pass,
						);
					$this->session->set_userdata('data_signup', $data);
					$this->session->set_userdata('msg_signup', array('msg' => 'Silakan isi Nama Depan!.', 'status' => false));
					redirect('signup','refresh');
				}
			}	
		}else{
			$data = array(
				"first_name" => $first_name,
				"last_name" => $last_name,
				"acc_email" => $acc_email,
				"acc_pass" => $acc_pass,
				"re_acc_pass" => $re_acc_pass,
				);
			$this->session->set_userdata('data_signup', $data);
			$this->session->set_userdata('msg_signup', array('msg' => 'Silakan menyetujui peraturan main.', 'status'=> false));
			redirect('signup','refresh');
		}
	}
}
