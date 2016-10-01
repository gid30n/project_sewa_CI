<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads_detail extends CI_Controller {
	/*
		Disini untuk yang home menu atau halaman utama.
	*/
	public function index()
	{
		$data = array(
			'title' => "Sewania - Sewa Peralatan Pesta Online",
			'content' => "front/ads-detail", 
			);
		$this->load->view('layout/wrapper', $data);
	}
}
