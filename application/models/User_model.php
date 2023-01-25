<?php
class User_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function getAllData($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
        }
        return $this->db->select('*')
                    ->from('user')
                    ->join('daerah_operasi', 'daerah_operasi.id_daop = user.id_daop', 'left')
                    ->join('user_role', 'user_role.id_role = user.id_role', 'left')
                    ->limit($limit, $start)
                    ->order_by('nama', 'ASC')
                    ->get()->result_array();
    }

    public function getDataDaerahOperasi() 
    {
        return $this->db->get("daerah_operasi")->result_array();
    }

    public function getDataRole() 
    {
        return $this->db->get("user_role")->result_array();
    }

    //Create Data
    public function save($data)
    {
        return $this->db->insert("user", $data);
    }

    //Delete Data
    public function delete($id_user)
    {
        return $this->db->delete("user", array('id_user' => $id_user));
    }

    //Upadate Data
    public function update($id_user, $data)
    {
        return $this->db->update('user', $data, ['id_user' => $id_user]);
    }

}