<?php
class Auth_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    //Create User
    public function save($data)
    {
        return $this->db->insert("user", $data);
    }

}