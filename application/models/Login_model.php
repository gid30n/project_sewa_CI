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

                $query = $this->db->get_where("tb_users", array("email" => $username));
                $res = $query->row_array();
                if(!empty($res['id_user'])){
                        return TRUE;
                }else{
                        return FALSE;
                }
                
        }

        public function check_password($username, $password){
                $query = $this->db->get_where("tb_users", array("email" => $username));
                $res = $query->row_array();
                if(!empty($res['id_user'])){
                        if($this->encryption->decrypt($res['password']) === $password){
                                $this->db->where("id_user", $res['id_user']);
                                $this->db->update('tb_users', array('last_login' => date('Y-m-d H:i:s'), 'ip_last' => $this->input->ip_address()));
                                return $res;
                        }else{
                                return FALSE;
                        }
                }else{
                        return FALSE;
                }
        }
}
?>