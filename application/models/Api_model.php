<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Api_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_province(){
                $query = $this->db->get('tb_province');
                return $query->result_array();
        }
        public function get_province_where($id = ''){
                $query = $this->db->get_where('tb_province', array('id_province' => $id));
                return $query->result_array();
        }

        public function get_region($id_province = '')
        {
                $query = $this->db->get_where('tb_region', array('id_province' => $id_province));
                return $query->result_array();
        }

        public function get_sub_kategori($id_kategori = ''){
                $query = $this->db->get_where('tb_sub_kategori', array('id_kategori' => $id_kategori));
                return $query->result_array();
        }

        public function get_super_sub_kategori ($id_kategori = '', $id_sub_kategori = ''){
                $query = $this->db->get_where('tb_super_sub_kategori', array('id_kategori' => $id_kategori, 'id_sub_kategori' => $id_sub_kategori));
                return $query->result_array();
        }
}
?>