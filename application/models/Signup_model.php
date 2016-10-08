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
                return $this->db->insert('tb_users', $data) ? $this->db->insert_id() : false;
        }
        public function insert_business($data)
        {
                return $this->db->insert('tb_business_profile', $data) ? $this->db->insert_id() : false;
        }
}
?>