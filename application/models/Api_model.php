<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Api_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_all_jasa(){
            $query = $this->db->get('tb_jenis_jasa');
            return $query->result_array();
        }

        public function get_province(){
                $query = $this->db->get('tb_province');
                return $query->result_array();
        }
        public function get_province_where($id = ''){
                $query = $this->db->get_where('tb_province', array('id_province' => $id));
                return $query->result_array();
        }

        public function get_all_sub_kategori(){
            $query = $this->db->get('tb_sub_kategori');
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
                $this->db->limit(6);
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

                        // fix price
                        $price = $row_ads['price'];
                        unset($row_ads['price']);
                        $row_ads['price'] = convert_rp($price);

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

        public function get_ads($id_ads){
                $result = array();
                $ads = $this->db->get_where('tb_ads', array("id_ads" => $id_ads));
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

                        // fix price
                        $price = $row_ads['price'];
                        unset($row_ads['price']);
                        $row_ads['price'] = convert_rp($price);

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

        public function get_ads_by_kategori($id_kategori,$limit,$offset){
                $result = array();
                $ads = $this->db->get_where('tb_ads', array("id_kategori" => $id_kategori), $offset,$limit);
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

                        // fix price
                        $price = $row_ads['price'];
                        unset($row_ads['price']);
                        $row_ads['price'] = convert_rp($price);

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

        public function get_ads_by_kategori_client($id_kategori,$limit,$offset){
                $result = array();
                if(!empty($this->session->userdata("user")['id_user'])){
                    $ads = $this->db->get_where('tb_ads', array("id_kategori" => $id_kategori, "id_user" => $this->session->userdata("user")['id_user']), $offset,$limit);
                    $res_ads = $ads->result_array();
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

                        // fix price
                        $price = $row_ads['price'];
                        unset($row_ads['price']);
                        $row_ads['price'] = convert_rp($price);

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
                }
                
                return $result;
        }

        public function get_all_ads_kategotri_count($id_kategori){      
                $result = array();          
                $ads = $this->db->get_where('tb_ads', array("id_kategori" => $id_kategori));  
                $result['count'] = $ads->num_rows();
                $last = $this->db->order_by('id_ads', 'DESC')->get_where("tb_ads", array("id_kategori" => $id_kategori), 1);
                if(!empty($last->row()->id_ads)){
                        $result['last_id'] = $last->row()->id_ads;
                }else{
                        $result['last_id'] = 0;
                }
                return $result;
        }

        public function get_all_ads_kategotri_count_client($id_kategori){
                $result = array();
                if(!empty($this->session->userdata('user')['id_user'])){
                        $ads = $this->db->get_where('tb_ads', array("id_kategori" => $id_kategori, "id_user" => $this->session->userdata('user')['id_user']));  
                        $result['count'] = $ads->num_rows();
                        $last = $this->db->order_by('id_ads', 'DESC')->get_where("tb_ads", array("id_kategori" => $id_kategori), 1);
                        if(!empty($last->row()->id_ads)){
                                $result['last_id'] = $last->row()->id_ads;
                        }
                }else{
                        $result['count'] = 0;
                        $result['last_id'] = 0;
                }
                return $result;
        }

        public function get_ads_by_slug_sub($slug){
                $result = array();
                $this->db->select('*');
                $this->db->from('tb_ads');
                $this->db->join('tb_sub_kategori', 'tb_ads.id_sub_kategori = tb_sub_kategori.id_sub_kategori');
                $this->db->where('tb_sub_kategori.slug', $slug);
                $this->db->limit(0, 6);

                $ads = $this->db->get();
                $res_ads = $ads->result_array();
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

                        // fix price
                        $price = $row_ads['price'];
                        unset($row_ads['price']);
                        $row_ads['price'] = convert_rp($price);

                        // fect user
                        $users = $this->db->get_where('tb_users', array("id_user" => $row_ads['id_user']));
                        $user = $users->row();
                        $row_ads['user'] = $user->first_name.' '.$user->last_name;
                        $brands = $this->db->get_where('tb_business_profile', array("id_user" => $row_ads['id_user']));
                        $brand = $brands->row();
                        $row_ads['brand'] = $brand->brand_name;
                        $regions = $this->db->get_where('tb_region', array('id_region' => $brand->id_region));
                        $region = $regions->row();
                        $row_ads['brand_loc'] = $region->name;
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

        public function get_range_price(){
            $result = array();
            $this->db->select_max('price', 'max_price');
            $this->db->select_min('price', 'min_price');
            $query = $this->db->get('tb_ads');
            return $query->result_array()[0];
        }

        public function search($keyword, $min_price, $max_price, $sort){
            $result = array();
            if ($sort === "asc") {
                $this->db->order_by('date_publish', 'asc');
            }else{
                $this->db->order_by('date_publish', 'desc');
            }
            $this->db->like('title', $keyword);
            $this->db->where(array('price >=' => $min_price, 'price <=' => $max_price));
            $ads = $this->db->get('tb_ads');
            
            $res_ads = $ads->result_array();

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

                        // fix price
                $price = $row_ads['price'];
                unset($row_ads['price']);
                $row_ads['price'] = convert_rp($price);

                        // fect user
                $users = $this->db->get_where('tb_users', array("id_user" => $row_ads['id_user']));
                $user = $users->row();
                $row_ads['user'] = $user->first_name.' '.$user->last_name;
                $brands = $this->db->get_where('tb_business_profile', array("id_user" => $row_ads['id_user']));
                $brand = $brands->row();
                $row_ads['brand'] = $brand->brand_name;
                $regions = $this->db->get_where('tb_region', array('id_region' => $brand->id_region));
                $region = $regions->row();
                $row_ads['brand_loc'] = $region->name;
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