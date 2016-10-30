<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi_model extends CI_Model {

	public function insert_konsultasi($data)
    {
        return $this->db->insert('tb_konsult', $data) ? $this->db->insert_id() : false;
    }

    public function count_konsultasi()
    {
    	return $this->db->count_all_results('tb_konsult');
    }
}

/* End of file Konsultasi_model.php */
/* Location: ./application/models/Konsultasi_model.php */ ?>