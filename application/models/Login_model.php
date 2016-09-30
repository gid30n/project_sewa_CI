<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function check_username($username)
        {

                $query = $this->db->get_where("tb_users", array("username", $username));
                $res = $query->result_array();
                var_dump($res);
        }

        public function check_password($username, $password){

        }
}
?>