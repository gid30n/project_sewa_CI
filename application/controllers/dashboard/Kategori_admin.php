<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model');
	}

	public function index()
	{
		redirect('dashboard','refresh');	
	}

	public function post_super(){
		$name = $this->input->post("nama_super_sub", TRUE);
		$kategori = $this->input->post("sub_kategori",TRUE);

		if (!empty($name)) {			

			if ($this->kategori_model->cek_add_sub($name)) {
				
				if (!empty($kategori)) {
					$id = $this->kategori_model->ambil_id_sub($kategori);
					$id_kategori = $id[0]->id_kategori;
					$data  = array(
						'name' => $name,
						'slug' => strtolower($name),
						'id_sub_kategori' => $kategori,
						'id_kategori' => $id_kategori,						
					);
					$this->kategori_model->add_super_sub_kategori($data);
					$this->session->set_userdata('msg_kategori', array('msg' => 'Super Sub Kategori Berhasil Ditambahkan !.', 'status' => true));
					redirect('dashboard','refresh');						
				}else{
					$this->session->set_userdata('msg_kategori', array('msg' => 'Silakan memilih kategori !.', 'status' => false));
					redirect('dashboard','refresh');
				}
			}else{
				$this->session->set_userdata('msg_kategori', array('msg' => 'Nama Dari Super Sub Kategori Sudah Tersedia !.', 'status' => false));
				redirect('dashboard','refresh');
			}
			
		} else {
			$this->session->set_userdata('msg_kategori', array('msg' => 'Silakan mengisikan nama super sub kategori!.', 'status' => false));
			redirect('dashboard','refresh');
		}
		
	}

	public function post_sub(){
		$name = $this->input->post("nama_sub", TRUE);
		$kategori = $this->input->post("kategori",TRUE);

		if (isset($name)) {

			if ($this->kategori_model->cek_add_sub($name)) {
				
				if (isset($kategori)) {
					$data  = array(
						'name' => $name,
						'slug' => strtolower($name),
						'id_kategori' => $kategori
					);
					$this->kategori_model->add_sub_kategori($data);
					$this->session->set_userdata('msg_kategori', array('msg' => 'Sub Kategori Berhasil Ditambahkan !.', 'status' => true));
					redirect('dashboard','refresh');
				}else{
					$this->session->set_userdata('msg_kategori', array('msg' => 'Silakan memilih kategori !.', 'status' => false));
					redirect('dashboard','refresh');						
				}

			}else{				
				$this->session->set_userdata('msg_kategori', array('msg' => 'Nama Dari Sub Kategori Sudah Tersedia !.', 'status' => false));
				redirect('dashboard','refresh');				
			}

		}else{			
			$this->session->set_userdata('msg_kategori', array('msg' => 'Silakan mengisikan nama sub kategori!.', 'status' => false));
			redirect('dashboard','refresh');
		}
	}

}

/* End of file Kategori_admin.php */
/* Location: ./application/controllers/dashboard/Kategori_admin.php */ ?>