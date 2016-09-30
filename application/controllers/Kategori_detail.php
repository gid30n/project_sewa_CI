<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_detail extends CI_Controller {
	/*
		Disini untuk yang signup menu.
	*/
	public function index()
	{
		$data = array(
			'title' => "Sewania - Sewa Peralatan Pesta Online",
			'content' => "front/kategori-detail", 
			);
		$this->load->view('layout/wrapper', $data);
	}
}
