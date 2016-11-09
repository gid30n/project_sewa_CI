<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_user($id_user)
        {

                $query = $this->db->get_where("tb_users", array("id_user" => $id_user));
                return $query->row_array();                
        }
        public function get_business_profile($id_user){
                $result = array();

                $this->db->where('id_user', $id_user);
                $this->db->from('tb_business_profile');                
                $data = $this->db->get()->result_array();
                if(isset($data)){
                        foreach ($data as $row) {
                                $id_jenisjasa = explode(",", $row['id_jenisjasa']);
                                $jasas = array();
                                for ($i=0; $i < count($id_jenisjasa); $i++) { 
                                        $jasa = $this->db->get_where('tb_jenis_jasa', array("id_jenisjasa" => $id_jenisjasa[$i]));
                                        $jas = $jasa->row();
                                        if (isset($jas)) {
                                                array_push($jasas, $jas->jenis_jasa);
                                        }
                                }
                                $row['type_service'] = $jasas;
                                unset($row['id_jenisjasa']);

                                array_push($result, $row);   
                        }   
                }
                return $result;
        }


        public function change_photo_profile($id_user, $avatar){
                $this->db->update("tb_users", $avatar, array("id_user" => $id_user));
        }
}
?>