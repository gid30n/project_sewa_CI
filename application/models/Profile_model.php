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
                $query = $this->db->get_where("tb_business_profile", array("id_user" => $id_user));
                return $query->row_array();
        }

        public function change_photo_profile($id_user, $avatar){
                $this->db->update("tb_users", $avatar, array("id_user" => $id_user));
        }
}
?>