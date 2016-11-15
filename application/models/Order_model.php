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

        public function get_order_by_id($id){
                $this->db->select("*");
                $this->db->from("tb_detail_order");
                $this->db->join("tb_order", 'tb_order.id_order = tb_detail_order.id_order');
                $this->db->join("tb_ads", "tb_ads.id_ads = tb_detail_order.id_ads");
                $this->db->where(array("tb_order.id_order" => $id));
                $query = $this->db->get();
                return $query->result_array();
        }

        public function get_order($status)
        {
                $result = array();
                $query_order = $this->db->get_where('tb_order', array("status_order" => "new"));
                foreach ($query_order->result_array() as $row) {
                        $res = array();
                        $res['id'] = $row['id_order'];
                        $res['nama'] = $row['nama'];
                        $res['date'] = convert_date($row['date_order'], "d/m/Y");
                        $query_detail = $this->db->get_where('tb_detail_order', array("id_order" => $row['id_order']));
                        $res['total_item'] = 0;
                        foreach ($query_detail->result_array() as $row_detail) {
                                $jum_item = $row_detail['jum_item'];
                                $query_ads = $this->db->get_where('tb_ads', array('id_ads' => $row_detail['id_ads']));
                                $res['price'] = 0;
                                foreach ($query_ads->result_array() as $row_ads) {
                                        $res['price'] += $row_ads['price'];
                                }
                                $res['price'] = convert_rp($res['price'] * $jum_item);
                                $res['total_item']++;
                        }
                        array_push($result, $res);
                }
                return $result;
        }

        public function del($id){
                $this->db->delete('tb_detail_order', array("id_ads" => $id));
                return !$this->db->affected_rows() ? true : false;
        }
	
}