<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Images extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		log_message('debug', 'Class '.__CLASS__.' initialized.');
		$this->load->library('ci_timthumb');
	}

	function _remap()
	{
		$params = array();
		if(empty($this->input->get("w"))){
			$params["w"] = 150;
		}else{
			$params["w"] = $this->input->get("w");
		}

		if(empty($this->input->get("h"))){
			$params["h"] = 150;
		}else{
			$params["h"] = $this->input->get("h");
		}
		// retorna a imagem ajustada
		return $this->ci_timthumb->load($this->input->get("src"), $params);

	}

}

/* End of file images.php */
/* Location: ./application/controllers/images.php */