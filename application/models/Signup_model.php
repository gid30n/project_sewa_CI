<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Signup_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function insert_user($data)
        {
                $this->db->insert('tb_users', $data) ? return $this->db->insert_id() : return false;
        }
        public function insert_business($data)
        {
                $this->db->insert('tb_business_profile', $data) ? return $this->db->insert_id() : return false;
        }
}
?>