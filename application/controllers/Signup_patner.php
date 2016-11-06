<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_patner extends CI_Controller {
	/*
		Disini untuk yang signup-patner menu.
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
		}

		if($this->session->userdata('data_signup_patner')){
			$data = array(
				'title' => "Sewania - Sewa Peralatan Pesta Online",
				'content' => "front/signup-patner", 
				'data' => $this->session->userdata('data_signup_patner'),
				'msg_signup_patner' => $this->session->userdata('msg_signup_patner'),				
				);
		}else{
			$data = array(
				'title' => "Sewania - Sewa Peralatan Pesta Online",
				'content' => "front/signup-patner",
				'user' => $user, 
				);
		}
		
		$this->load->view('layout/wrapper', $data);
	}

	public function validation()
	{
		$first_name = $this->input->post("first_name", TRUE);
		$last_name = $this->input->post("last_name", TRUE);
		$acc_user = $this->input->post("acc_user", TRUE);
		$acc_email = $this->input->post("acc_email", TRUE);
		$acc_pass = $this->input->post("acc_pass", TRUE);
		$re_acc_pass = $this->input->post("re-acc_pass", TRUE);
		$brand_name = $this->input->post("brand_name", TRUE);
		$type_service = $this->input->post("jenis_service", TRUE);
		$address = $this->input->post("alamat_usaha", TRUE);
		$province = $this->input->post("provinsi", TRUE);
		$region = $this->input->post("kabupaten", TRUE);
		$descript = $this->input->post("des_usaha", TRUE);
		$term = $this->input->post("term", TRUE);
		$tlp = $this->input->post("acc_tlp", TRUE);

		// captcha google kang
		$captcha_answer = $this->input->post('g-recaptcha-response');
		$captcha_response = $this->recaptcha->verifyResponse($captcha_answer);

		if ($captcha_response['success']) {
			
			if($term === "on"){

				if(!empty($first_name)){

					if(!empty($last_name)){

						if(!empty($acc_user)){
							if ($this->signup_model->cek_username($acc_user)) {

								if(!empty($acc_email)){
									if ($this->signup_model->cek_email($acc_email)) {

										if(check_valid_email_with_mailgun($acc_email)){

											if(!empty($acc_pass)){

												if($acc_pass === $re_acc_pass){

													if(!empty($brand_name)){
														if ($this->signup_model->cek_brand($brand_name)) {

															if(!empty($type_service)){

																if(!empty($address)){

																	if(!empty($province)){

																		if(!empty($region)){

																			if (!empty($tlp)) {
																				
																				/*Melakukan insert ke database dengan memanggil model*/
																				/*Insert data user*/
																				$data_user = array(
																					"first_name" => $first_name,
																					"last_name" => $last_name,
																					"username" => $acc_user,
																					"email" => $acc_email,
																					"no_telp" => $tlp,
																					"password" => $this->encryption->encrypt($acc_pass),
																					"joined" => date('Y-m-d H:i:s'),
																					"admin" => 1,
																					"avatar" => "assets/img/ava/1.png"
																					);
																				$user_id = $this->signup_model->insert_user($data_user);

																				/*Insert data business*/
																				$data_business = array(
																					"brand_name" => $brand_name,
																					"type_service" => $type_service,
																					"address" => $address,
																					"id_province" => $province,
																					"id_region" => $region,
																					"description" => $descript,
																					"id_user" => $user_id,
																					);
																				$this->session->set_userdata('uname', $acc_user);
																				$this->session->set_userdata('password', $acc_pass);
																				$this->session->set_userdata('brand', $brand_name);
																				$business_user = $this->signup_model->insert_business($data_business);																			
																				// $this->session->set_userdata('msg_registrasi', array('msg' => '', 'status' => true));
																				// redirect('login','refresh');	
																			}else{
																				$data = array(
																				"first_name" => $first_name,
																				"last_name" => $last_name,
																				"acc_user" => $acc_user,
																				"acc_email" => $acc_email,
																				"acc_pass" => $acc_pass,
																				"re_acc_pass" => $re_acc_pass,
																				"brand_name" => $brand_name,
																				"type_service" => $type_service,
																				"address" => $address,
																				"province" => $province,
																				"region" => $region,
																				"descript" => $descript,
																				"acc_tlp" => $tlp,
																				);
																			$this->session->set_userdata('data_signup_patner', $data);
																			$this->session->set_userdata('msg_signup_patner', array('msg' => 'Silakan Mengisi No Telephone!.', 'status' => false));
																			redirect('signup-patner','refresh');
																			}																		

																		}else{
																			$data = array(
																				"first_name" => $first_name,
																				"last_name" => $last_name,
																				"acc_user" => $acc_user,
																				"acc_email" => $acc_email,
																				"acc_pass" => $acc_pass,
																				"re_acc_pass" => $re_acc_pass,
																				"brand_name" => $brand_name,
																				"type_service" => $type_service,
																				"address" => $address,
																				"province" => $province,
																				"region" => $region,
																				"descript" => $descript,
																				);
																			$this->session->set_userdata('data_signup_patner', $data);
																			$this->session->set_userdata('msg_signup_patner', array('msg' => 'Silakan pilih Kabupaten!.', 'status' => false));
																			redirect('signup-patner','refresh');
																		}

																	}else{
																		$data = array(
																			"first_name" => $first_name,
																			"last_name" => $last_name,
																			"acc_user" => $acc_user,
																			"acc_email" => $acc_email,
																			"acc_pass" => $acc_pass,
																			"re_acc_pass" => $re_acc_pass,
																			"brand_name" => $brand_name,
																			"type_service" => $type_service,
																			"address" => $address,
																			"province" => $province,
																			"descript" => $descript,
																			);
																		$this->session->set_userdata('data_signup_patner', $data);
																		$this->session->set_userdata('msg_signup_patner', array('msg' => 'Silakan pilih provinsi!.', 'status' => false));
																		redirect('signup-patner','refresh');
																	}

																}else{
																	$data = array(
																		"first_name" => $first_name,
																		"last_name" => $last_name,
																		"acc_user" => $acc_user,
																		"acc_email" => $acc_email,
																		"acc_pass" => $acc_pass,
																		"re_acc_pass" => $re_acc_pass,
																		"brand_name" => $brand_name,
																		"type_service" => $type_service,
																		"province" => $province,
																		"region" => $region,
																		"descript" => $descript,
																		);
																	$this->session->set_userdata('data_signup_patner', $data);
																	$this->session->set_userdata('msg_signup_patner', array('msg' => 'Silakan isi Alamat Usaha!.', 'status' => false));
																	redirect('signup-patner','refresh');
																}

															}else{
																$data = array(
																	"first_name" => $first_name,
																	"last_name" => $last_name,
																	"acc_user" => $acc_user,
																	"acc_email" => $acc_email,
																	"acc_pass" => $acc_pass,
																	"re_acc_pass" => $re_acc_pass,
																	"brand_name" => $brand_name,
																	"address" => $address,
																	"province" => $province,
																	"region" => $region,
																	"descript" => $descript,
																	);
																$this->session->set_userdata('data_signup_patner', $data);
																$this->session->set_userdata('msg_signup_patner', array('msg' => 'Silakan isi Jenis Jasa!.', 'status' => false));
																redirect('signup-patner','refresh');
															}
														}else{
															$data = array(
															"first_name" => $first_name,
															"last_name" => $last_name,
															"acc_user" => $acc_user,
															"acc_email" => $acc_email,
															"acc_pass" => $acc_pass,
															"re_acc_pass" => $re_acc_pass,
															"type_service" => $type_service,
															"address" => $address,
															"province" => $province,
															"region" => $region,
															"descript" => $descript,
															);
														$this->session->set_userdata('data_signup_patner', $data);
														$this->session->set_userdata('msg_signup_patner', array('msg' => 'Nama Brand Sudah Terdaftar!.', 'status' => false));
														redirect('signup-patner','refresh');
														}

													}else{
														$data = array(
															"first_name" => $first_name,
															"last_name" => $last_name,
															"acc_user" => $acc_user,
															"acc_email" => $acc_email,
															"acc_pass" => $acc_pass,
															"re_acc_pass" => $re_acc_pass,
															"type_service" => $type_service,
															"address" => $address,
															"province" => $province,
															"region" => $region,
															"descript" => $descript,
															);
														$this->session->set_userdata('data_signup_patner', $data);
														$this->session->set_userdata('msg_signup_patner', array('msg' => 'Nama Brand Belum Terisi!.', 'status' => false));
														redirect('signup-patner','refresh');
													}

												}else{
													$data = array(
														"first_name" => $first_name,
														"last_name" => $last_name,
														"acc_user" => $acc_user,
														"acc_email" => $acc_email,
														"brand_name" => $brand_name,
														"type_service" => $type_service,
														"address" => $address,
														"province" => $province,
														"region" => $region,
														"descript" => $descript,
														);
													$this->session->set_userdata('data_signup_patner', $data);
													$this->session->set_userdata('msg_signup_patner', array('msg' => 'Konfirmasi Password salah!.', 'status' => false));
													redirect('signup-patner','refresh');
												}

											}else{
												$data = array(
													"first_name" => $first_name,
													"last_name" => $last_name,
													"acc_user" => $acc_user,
													"acc_email" => $acc_email,
													"brand_name" => $brand_name,
													"type_service" => $type_service,
													"address" => $address,
													"province" => $province,
													"region" => $region,
													"descript" => $descript,
													);
												$this->session->set_userdata('data_signup_patner', $data);
												$this->session->set_userdata('msg_signup_patner', array('msg' => 'Silakan isi password!.', 'status' => false));
												redirect('signup-patner','refresh');
											}
										}else{
											$data = array(
												"first_name" => $first_name,
												"last_name" => $last_name,
												"acc_user" => $acc_user,
												"acc_pass" => $acc_pass,
												"re_acc_pass" => $re_acc_pass,
												"brand_name" => $brand_name,
												"type_service" => $type_service,
												"address" => $address,
												"province" => $province,
												"region" => $region,
												"descript" => $descript,
												);
											$this->session->set_userdata('data_signup_patner', $data);
											$this->session->set_userdata('msg_signup_patner', array('msg' => 'Silakan menggunakan email yang valid!.', 'status' => false));
											redirect('signup-patner','refresh');
										}
									}else{
										$data = array(
											"first_name" => $first_name,
											"last_name" => $last_name,
											"acc_user" => $acc_user,
											"acc_pass" => $acc_pass,
											"re_acc_pass" => $re_acc_pass,
											"brand_name" => $brand_name,
											"type_service" => $type_service,
											"address" => $address,
											"province" => $province,
											"region" => $region,
											"descript" => $descript,
											);
										$this->session->set_userdata('data_signup_patner', $data);
										$this->session->set_userdata('msg_signup_patner', array('msg' => 'Email Telah Terdaftar!.', 'status' => false));
										redirect('signup-patner','refresh');
									}
								}else{
									$data = array(
										"first_name" => $first_name,
										"last_name" => $last_name,
										"acc_user" => $acc_user,
										"acc_pass" => $acc_pass,
										"re_acc_pass" => $re_acc_pass,
										"brand_name" => $brand_name,
										"type_service" => $type_service,
										"address" => $address,
										"province" => $province,
										"region" => $region,
										"descript" => $descript,
										);
									$this->session->set_userdata('data_signup_patner', $data);
									$this->session->set_userdata('msg_signup_patner', array('msg' => 'Silakan isi Email!.', 'status' => false));
									redirect('signup-patner','refresh');
								}

							}else{
								$data = array(
									"first_name" => $first_name,
									"last_name" => $last_name,
									"acc_email" => $acc_email,
									"acc_pass" => $acc_pass,
									"re_acc_pass" => $re_acc_pass,
									"brand_name" => $brand_name,
									"type_service" => $type_service,
									"address" => $address,
									"province" => $province,
									"region" => $region,
									"descript" => $descript,
									);
								$this->session->set_userdata('data_signup_patner', $data);
								$this->session->set_userdata('msg_signup_patner', array('msg' => 'Username Telah Terdaftar!.', 'status' => false));
								redirect('signup-patner','refresh');
							}

						}else{
							$data = array(
									"first_name" => $first_name,
									"last_name" => $last_name,
									"acc_email" => $acc_email,
									"acc_pass" => $acc_pass,
									"re_acc_pass" => $re_acc_pass,
									"brand_name" => $brand_name,
									"type_service" => $type_service,
									"address" => $address,
									"province" => $province,
									"region" => $region,
									"descript" => $descript,
									);
							$this->session->set_userdata('data_signup_patner', $data);
							$this->session->set_userdata('msg_signup_patner', array('msg' => 'Silakan isi Username!.', 'status' => false));
							redirect('signup-patner','refresh');
						}

					}else{
						$data = array(
							"first_name" => $first_name,
							"acc_user" => $acc_user,
							"acc_email" => $acc_email,
							"acc_pass" => $acc_pass,
							"re_acc_pass" => $re_acc_pass,
							"brand_name" => $brand_name,
							"type_service" => $type_service,
							"address" => $address,
							"province" => $province,
							"region" => $region,
							"descript" => $descript,
							);
						$this->session->set_userdata('data_signup_patner', $data);
						$this->session->set_userdata('msg_signup_patner', array('msg' => 'Silakan isi Nama Belakang!.', 'status' => false));
						redirect('signup-patner','refresh');
					}

				}else{
					$data = array(
						"last_name" => $last_name,
						"acc_user" => $acc_user,
						"acc_email" => $acc_email,
						"acc_pass" => $acc_pass,
						"re_acc_pass" => $re_acc_pass,
						"brand_name" => $brand_name,
						"type_service" => $type_service,
						"address" => $address,
						"province" => $province,
						"region" => $region,
						"descript" => $descript,
						);
					$this->session->set_userdata('data_signup_patner', $data);
					$this->session->set_userdata('msg_signup_patner', array('msg' => 'Silakan isi Nama Depan!.', 'status' => false));
					redirect('signup-patner','refresh');
				}
			}
		}else{
			$data = array(
				"first_name" => $first_name,
				"last_name" => $last_name,
				"acc_user" => $acc_user,
				"acc_email" => $acc_email,
				"acc_pass" => $acc_pass,
				"re_acc_pass" => $re_acc_pass,
				"brand_name" => $brand_name,
				"type_service" => $type_service,
				"address" => $address,
				"province" => $province,
				"region" => $region,
				"descript" => $descript,
				);
			$this->session->set_userdata('data_signup_patner', $data);
			$this->session->set_userdata('msg_signup_patner', array('msg' => 'Silakan menyetujui peraturan main.', 'status'=> false));
			redirect('signup-patner','refresh');
		}
	}
}
