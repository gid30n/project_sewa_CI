<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order_model extends CI_Model {

	public function __construct()
	{
                // Call the CI_Model constructor
		parent::__construct();
	}

        public function get_all_order(){
                $result = array();
                $this->db->select('*');
                $this->db->from('tb_order');
                $this->db->join('tb_ads', 'tb_order.id_ads = tb_ads.id_ads');
                $this->db->join('tb_users', 'tb_order.id_user = tb_users.id_user');
                $this->db->join('tb_super_sub_kategori', 'tb_ads.id_super_sub_kategori = tb_super_sub_kategori.id_super_sub_kategori');
                $ads = $this->db->get();
                $res_ads = $ads->result_array();
                return $res_ads;
        }

        public function get_order_by_user($id_user){
                $result = array();
                $this->db->select('*');
                $this->db->from('tb_order');
                $this->db->join('tb_ads', 'tb_order.id_ads = tb_ads.id_ads');
                $this->db->join('tb_users', 'tb_order.id_user = tb_users.id_user');
                $this->db->join('tb_super_sub_kategori', 'tb_ads.id_super_sub_kategori = tb_super_sub_kategori.id_super_sub_kategori');
                $this->db->where(array('tb_users.id_user' => $id_user));
                $ads = $this->db->get();
                $res_ads = $ads->result_array();
                return $res_ads;
        }
	
}