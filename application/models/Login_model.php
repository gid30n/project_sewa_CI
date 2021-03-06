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

                $query = $this->db->get_where("tb_users", array("username" => $username));
                $res = $query->row_array();
                if(!empty($res['id_user'])){
                        return TRUE;
                }else{
                        return FALSE;
                }
                
        }

        public function check_email($email)
        {

                $query = $this->db->get_where("tb_users", array("email" => $email));
                $res = $query->row_array();
                if(!empty($res['id_user'])){
                        return TRUE;
                }else{
                        return FALSE;
                }
                
        }

        public function check_password($username, $password){
                $this->db->or_where(array("username" => $username, "email" => $username));
                $query = $this->db->get("tb_users");
                $res = $query->row_array();
                if(!empty($res['id_user'])){
                        if($this->encryption->decrypt($res['password']) === $password){
                                return $res;
                        }else{
                                return FALSE;
                        }
                }else{
                        return FALSE;
                }
        }

        public function update_logout($id_user){
                $this->db->where("id_user", $id_user);
                $this->db->update('tb_users', array('last_login' => date('Y-m-d H:i:s'), 'ip_last' => $this->input->ip_address()));
        }

        public function cek_status($username){
                $this->db->or_where(array("username" => $username, "email" => $username));
                $this->db->where(array("status" => FALSE));
                $query = $this->db->get("tb_users");
                $res = $query->row_array();                
                if(!empty($res['id_user'])){                        
                        return TRUE;
                }else{
                        return FALSE;
                }
        }
}
?>