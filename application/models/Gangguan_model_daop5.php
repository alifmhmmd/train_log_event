<?php
class Gangguan_model_daop5 extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function getData(){
        return $this->db->select('*')
                    ->from('laporan_gangguan')
                    ->join('daerah_operasi', 'daerah_operasi.id_daop = laporan_gangguan.id_daop', 'left')
                    ->join('jenis_gangguan', 'jenis_gangguan.id_jenis = laporan_gangguan.id_jenis', 'left')
                    ->where('daerah_operasi', 'DAOP 5')
                    ->get()->result_array();
    }

    public function getAllData($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('tempat_kejadian', $keyword);
        }
        return $this->db->select('*')
                    ->from('laporan_gangguan')
                    ->limit($limit, $start)
                    ->join('daerah_operasi', 'daerah_operasi.id_daop = laporan_gangguan.id_daop', 'left')
                    ->join('jenis_gangguan', 'jenis_gangguan.id_jenis = laporan_gangguan.id_jenis', 'left')
                    ->where('daerah_operasi', 'DAOP 5')
                    ->order_by('tempat_kejadian', 'ASC')
                    ->get()->result_array();
    }

    function getJumlahDataLaporan(){
		return $this->db->get('laporan_gangguan')->num_rows();
	}
    
    public function getDataJenisGangguan() 
    {
        return $this->db->get("jenis_gangguan")->result_array();
    }

    public function getDataDaerahOperasi() 
    {
        return $this->db->get("daerah_operasi")->result_array();
    }

    public function getJumlahDataSintelis()
    {
        $query = $this->db->select('id_jenis')->from('laporan_gangguan')->where('id_jenis', '1')->where('id_daop', '5')->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }
    
    public function getJumlahDataJJ()
    {
        $query = $this->db->select('id_jenis')->from('laporan_gangguan')->where('id_daop', '5')->where('id_jenis', '2')->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }

    public function getJumlahDataEksternal()
    {
        $query = $this->db->select('id_jenis')->from('laporan_gangguan')->where('id_daop', '5')->where('id_jenis', '3')->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }
    
    public function getJumlahDataKamtib()
    {
        $query = $this->db->select('id_jenis')->from('laporan_gangguan')->where('id_daop', '5')->where('id_jenis', '4')->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }

    //Create Data
    public function save($data)
    {
        return $this->db->insert("laporan_gangguan", $data);
    }

    //Delete Data
    public function delete($id_laporan)
    {
        return $this->db->delete("laporan_gangguan", array('id_laporan' => $id_laporan));
    }

    //Upadate Data
    public function update($id_laporan, $data)
    {
        return $this->db->update('laporan_gangguan', $data, array('id_laporan' => $id_laporan));
    }

}