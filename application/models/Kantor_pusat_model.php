<?php
class Kantor_pusat_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function getDataGangguan($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('tempat_kejadian', $keyword);
        }
        return $this->db->select('*')
                    ->from('laporan_gangguan')
                    ->limit($limit, $start)
                    ->join('daerah_operasi', 'daerah_operasi.id_daop = laporan_gangguan.id_daop', 'left')
                    ->join('jenis_gangguan', 'jenis_gangguan.id_jenis = laporan_gangguan.id_jenis', 'left')
                    ->order_by('daerah_operasi', 'ASC')
                    ->get()->result_array();
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
        $query = $this->db->select('id_jenis')->from('laporan_gangguan')->where('id_jenis', '1')->get();
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
        $query = $this->db->select('id_jenis')->from('laporan_gangguan')->where('id_jenis', '2')->get();
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
        $query = $this->db->select('id_jenis')->from('laporan_gangguan')->where('id_jenis', '3')->get();
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
        $query = $this->db->select('id_jenis')->from('laporan_gangguan')->where('id_jenis', '4')->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }
    
}