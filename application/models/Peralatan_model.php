<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Peralatan_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function post_ads($data)
        {
                return $this->db->insert('tb_ads', $data) ? $this->db->insert_id() : false;       
        }
        public function post_gallerys($data =  array()){
                $this->db->insert_batch('tb_gallerys', $data) ? $this->db->insert_id() : false;
        }
}
?>