<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi_model extends CI_Model {

	public function insert_konsultasi($data)
    {
        return $this->db->insert('tb_konsult', $data) ? $this->db->insert_id() : false;
    }

    public function count_new_konsultasi()
    {
    	// return $this->db->count_all_results('tb_konsult');
    	$this->db->where('status', '0');
		$this->db->from('tb_konsult');
		return $this->db->count_all_results();
    }

    public function history_count_konsultasi()
    {
    	// return $this->db->count_all_results('tb_konsult');
    	$this->db->where('status', '1');
		$this->db->from('tb_konsult');
		return $this->db->count_all_results();
    }

    public function get_new_konsultasi(){
    	
    	$result = array();

		$this->db->where('status', '0');
		$this->db->from('tb_konsult');
		$this->db->order_by('id_konsult', "DESC");
		$data = $this->db->get()->result_array();

		foreach ($data as $row) {
			$id_regions = explode(",", $row['id_region']);
			$regions = array();
			for ($i=0; $i < count($id_regions); $i++) { 
				$region = $this->db->get_where('tb_region', array("id_region" => $id_regions[$i]));
				$reg = $region->row();
				array_push($regions, $reg->name);
			}
			$row['lokasi'] = $regions;
			unset($row['id_region']);

			array_push($result, $row);	
		}
		return $result;
    }

    public function get_history_konsultasi(){
    	
    	$result = array();

		$this->db->where('status', '1');
		$this->db->from('tb_konsult');
		$this->db->order_by('id_konsult', "DESC");
		$data = $this->db->get()->result_array();

		foreach ($data as $row) {
			$id_regions = explode(",", $row['id_region']);
			$regions = array();
			for ($i=0; $i < count($id_regions); $i++) { 
				$region = $this->db->get_where('tb_region', array("id_region" => $id_regions[$i]));
				$reg = $region->row();
				array_push($regions, $reg->name);
			}
			$row['lokasi'] = $regions;
			unset($row['id_region']);

			array_push($result, $row);	
		}
		return $result;
    }

    public function get_detail($id){
    	$result = array();

    	$data = $this->db->get_where('tb_konsult', array('id_konsult =' => $id))->result_array();
    	
    	foreach ($data as $row) {
			$id_regions = explode(",", $row['id_region']);
			$regions = array();
			for ($i=0; $i < count($id_regions); $i++) { 
				$region = $this->db->get_where('tb_region', array("id_region" => $id_regions[$i]));
				$reg = $region->row();
				array_push($regions, $reg->name);
			}
			$row['lokasi'] = $regions;
			unset($row['id_region']);

			array_push($result, $row);	
		}
		return $result;    	
    }

    public function update_status($id){
    	$this->db->where('id_konsult', $id);
    	$this->db->update('tb_konsult', array('status' => 1));
    	return;
    }
}

/* End of file Konsultasi_model.php */
/* Location: ./application/models/Konsultasi_model.php */ ?>