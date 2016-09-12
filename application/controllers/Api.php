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
}
