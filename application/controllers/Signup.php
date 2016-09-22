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
	}
	public function index()
	{
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
		$brand_name = $this->input->post("brand_name", TRUE);
		$type_service = $this->input->post("jenis_service", TRUE);
		$address = $this->input->post("alamat_usaha", TRUE);
		$province = $this->input->post("provinsi", TRUE);
		$region = $this->input->post("kabupaten", TRUE);
		$descript = $this->input->post("des_usaha", TRUE);
		$term = $this->input->post("term", TRUE);

		if($term === "on"){

			if(!empty($first_name)){

				if(!empty($last_name)){

					if(!empty($acc_email)){

						if(check_valid_email_with_mailgun($acc_email)){

							if(!empty($acc_pass)){

								if($acc_pass === $re_acc_pass){

									if(!empty($brand_name)){

										if(!empty($type_service)){

											if(!empty($address)){

												if(!empty($province)){

													if(!empty($region)){

														/*Melakukan insert ke database dengan memanggil model*/
														/*Insert data user*/
														$data_user = array(
															"first_name" => $first_name,
															"last_name" => $last_name,
															"email" => $acc_email,
															"password" => $acc_pass,
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
														$business_user = $this->signup_model->insert_business($data_business);

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
														$this->session->set_userdata('data_signup', $data);
														$this->session->set_userdata('msg_signup', 'Silakan pilih Kabupaten!.');
														redirect('signup','refresh');
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
													$this->session->set_userdata('data_signup', $data);
													$this->session->set_userdata('msg_signup', 'Silakan pilih provinsi!.');
													redirect('signup','refresh');
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
												$this->session->set_userdata('data_signup', $data);
												$this->session->set_userdata('msg_signup', 'Silakan isi Alamat Usaha!.');
												redirect('signup','refresh');
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
											$this->session->set_userdata('data_signup', $data);
											$this->session->set_userdata('msg_signup', 'Silakan isi Jenis Jasa!.');
											redirect('signup','refresh');
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
										$this->session->set_userdata('data_signup', $data);
										$this->session->set_userdata('msg_signup', 'Silakan isi Nama Brand!.');
										redirect('signup','refresh');
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
									$this->session->set_userdata('data_signup', $data);
									$this->session->set_userdata('msg_signup', 'Konfirmasi Password salah!.');
									redirect('signup','refresh');
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
								$this->session->set_userdata('data_signup', $data);
								$this->session->set_userdata('msg_signup', 'Silakan isi password!.');
								redirect('signup','refresh');
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
							$this->session->set_userdata('data_signup', $data);
							$this->session->set_userdata('msg_signup', 'Silakan menggunakan email yang valid!.');
							redirect('signup','refresh');
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
						$this->session->set_userdata('data_signup', $data);
						$this->session->set_userdata('msg_signup', 'Silakan isi Email!.');
						redirect('signup','refresh');
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
					$this->session->set_userdata('data_signup', $data);
					$this->session->set_userdata('msg_signup', 'Silakan isi Nama Belakang!.');
					redirect('signup','refresh');
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
				$this->session->set_userdata('data_signup', $data);
				$this->session->set_userdata('msg_signup', 'Silakan isi Nama Depan!.');
				redirect('signup','refresh');
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
			$this->session->set_userdata('data_signup', $data);
			$this->session->set_userdata('msg_signup', 'Silakan menyetujui peraturan main.');
			redirect('signup','refresh');
		}
	}
}
