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

        public function get_all_ads(){
                $result = array();
                $ads = $this->db->get('tb_ads');
                $res_ads = $ads->result_array();
                // var_dump($res_ads);
                foreach ($res_ads as $row_ads) {
                        // fect gallerys
                        $gallery = $this->db->get_where("tb_gallerys", array("id_ads" => $row_ads["id_ads"]));
                        $gallerys = array();
                        foreach ($gallery->result_array() as $row_gallery) {
                                unset($row_gallery['id_ads']);
                                unset($row_gallery['id_gallery']);
                                array_push($gallerys, $row_gallery);
                        }
                        $row_ads['gallery'] = $gallerys;

                        // fect user
                        $users = $this->db->get_where('tb_users', array("id_user" => $row_ads['id_user']));
                        $user = $users->row();
                        $row_ads['user'] = $user->first_name.' '.$user->last_name;
                        unset($row_ads['id_user']);

                        // fect kategori
                        $kategori = $this->db->get_where('tb_kategori', array("id_kategori" => $row_ads['id_kategori']));
                        $kat = $kategori->row();
                        $row_ads['kategori'] = $kat->name;
                        unset($row_ads['id_kategori']);

                        // fect sub kategori
                        $sub_kategori = $this->db->get_where('tb_sub_kategori', array("id_sub_kategori" => $row_ads['id_sub_kategori']));
                        $sub_kat = $sub_kategori->row();
                        $row_ads['sub_kategori'] = $sub_kat->name;
                        unset($row_ads['id_sub_kategori']);

                        // fect super sub kategori
                        $super_sub_kategori = $this->db->get_where('tb_super_sub_kategori', array("id_super_sub_kategori" => $row_ads['id_super_sub_kategori']));
                        $super_sub_kat = $super_sub_kategori->row();
                        $row_ads['super_sub_kategori'] = $super_sub_kat->name;
                        unset($row_ads['id_super_sub_kategori']);

                        // fect province
                        $province = $this->db->get_where('tb_province', array("id_province" => $row_ads['id_province']));
                        $prov = $province->row();
                        $row_ads['provinsi'] = $prov->name;
                        unset($row_ads['id_province']);

                        // fect region
                        $id_regions = explode(",", $row_ads['id_region']);
                        $regions = array();
                        for ($i=0; $i < count($id_regions); $i++) { 
                                $region = $this->db->get_where('tb_region', array("id_region" => $id_regions[$i]));
                                $reg = $region->row();
                                array_push($regions, $reg->name);
                        }
                        $row_ads['lokasi'] = $regions;
                        unset($row_ads['id_region']);

                        // push all after fect all data
                        array_push($result, $row_ads);
                }
                return $result;
        }
}
?>