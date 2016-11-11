<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategori_model extends CI_Model {

	public function __construct()
	{
                // Call the CI_Model constructor
		parent::__construct();
	}
	public function get_ads_by_slug_sub($slug){
		$result = array();
		$this->db->select('*, tb_ads.slug as slug_ads');
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

	public function cek_add_sub($data){			
		$this->db->where('name', $data);
		$this->db->from('tb_sub_kategori');
		$kat = $this->db->get()->row();
		if ($kat === null) {
			return true;
		}else{
			return false;
		}  
	}

	public function cek_add_super($data){			
		$this->db->where('name', $data);
		$this->db->from('tb_super_sub_kategori');
		$kat = $this->db->get()->row();
		if ($kat === null) {
			return true;
		}else{
			return false;
		}  
	}

	public function ambil_id_sub($data){
		$this->db->where('id_sub_kategori', $data);
		$this->db->from('tb_sub_kategori');
		$kat = $this->db->get()->result();
		return $kat;
	}

	public function add_sub_kategori($data){
		return $this->db->insert('tb_sub_kategori', $data) ? $this->db->insert_id() : false;
	}

	public function add_super_sub_kategori($data){
		return $this->db->insert('tb_super_sub_kategori', $data) ? $this->db->insert_id() : false;
	}
}