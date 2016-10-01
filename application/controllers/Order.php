<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	/*
		Disini untuk yang home menu atau halaman utama.
	*/
	public function index()
	{
		$data = array(
			'title' => "Sewania - Sewa Peralatan Pesta Online",
			'content' => "front/order", 
			);
		$this->load->view('layout/wrapper', $data);
	}
}
