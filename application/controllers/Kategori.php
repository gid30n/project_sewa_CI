<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	/*
		Disini untuk yang signup menu.
	*/
	public function index()
	{
		$data = array(
			'title' => "Sewania - Sewa Peralatan Pesta Online",
			'content' => "front/kategori", 
			);
		$this->load->view('layout/wrapper', $data);
	}
}
