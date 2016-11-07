<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	/*
		Disini untuk yang home menu atau halaman utama.
	*/

	public function __construct()
	{
        // Call the CI_Model constructor
		parent::__construct();
		$this->load->model('api_model');
	}

	public function province()
	{
		$result = $this->api_model->get_province();
		$this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($result));
	}

	public function region($id_province=1){
		$result = $this->api_model->get_region($id_province);
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($result));
	}

	public function kategori($id_kategori = NULL){
		$result = $this->api_model->get_sub_kategori($id_kategori);
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($result));
	}

	public function sub_kategori($id_kategori = NULL, $id_sub_kategori = NULL){
		$result = $this->api_model->get_super_sub_kategori($id_kategori, $id_sub_kategori);
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($result));
	}

	public function jenis_jasa(){
		$result = $this->api_model->get_all_jasa();
		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

	public function all_ads(){
		$result = $this->api_model->get_all_ads();
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($result));
	}

	public function ads($id_ads = 1){
		$result = $this->api_model->get_ads($id_ads);
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($result));
	}

	public function ads_kategori($id_kategori = 1, $limit = 0, $offset = 0){		
		$result = $this->api_model->get_ads_by_kategori($id_kategori, $limit, $offset);		
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($result));
	}

	public function ads_kategori_client($id_kategori = 1, $limit = 0, $offset = 0){
		$result = $this->api_model->get_ads_by_kategori_client($id_kategori, $limit, $offset);		
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($result));
	}

	public function ads_sub_kategori($slug = '', $limit = 0, $offset = 0){
		$result = $this->api_model->get_ads_by_slug_sub($slug, $limit, $offset);		
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($result));
	}
	public function ads_kategori_count($id_kategori = 1){
		$result = $this->api_model->get_all_ads_kategotri_count($id_kategori);		
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($result));	
	}

	public function ads_kategori_count_client($id_kategori = 1){
		$result = $this->api_model->get_all_ads_kategotri_count_client($id_kategori);		
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($result));	
	}

	public function get_cart($rowid = ''){
		$cart = $this->cartsewania->get_item($rowid);
		$id = $cart['id'];
		unset($cart['id']);
		$cart['id'] = $this->encryption->encrypt($id);
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($cart));	
	}

	public function get_range_price(){
		$res = $this->api_model->get_range_price();
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($res));	
	}

	public function search(){
		$keyword = $this->input->post("search", TRUE);
		$min_price = $this->input->post("min_price", TRUE);
		$max_price = $this->input->post("max_price", TRUE);
		$sort = $this->input->post("sort", TRUE);
		if (isset($keyword) && isset($min_price) && isset($max_price) && isset($sort)) {
			$res = $this->api_model->search($keyword, $min_price, $max_price, $sort);
			$this->output
			->set_content_type('application/json')
			->set_output(json_encode($res));	
		}		
	}
}
