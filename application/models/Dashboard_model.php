<?php

class Dashboard_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function getTahun(){
        return $this->db->select('YEAR(tanggal) as tahun')
                        ->from('laporan_gangguan')
                        ->group_by('YEAR(tanggal)')
                        ->get()->result_array();
    }

    // Get data by month and year
    public function getDataGangguan($key_bulan = null, $key_tahun = null)
    {
        if ($key_bulan && $key_tahun) {
            return $this->db->select('daerah_operasi, SUM(IF(id_jenis=1,1,0)) AS jumlah_sintelis, SUM(IF(id_jenis=2,1,0)) AS jumlah_jj, SUM(IF(id_jenis=3,1,0)) AS jumlah_eksternal, SUM(IF(id_jenis=4,1,0)) AS jumlah_kamtib, count(id_jenis) as jumlah_gangguan')
                        ->from('laporan_gangguan')
                        ->join('daerah_operasi', 'daerah_operasi.id_daop = laporan_gangguan.id_daop', 'left')
                        ->like('MONTH(tanggal)', $key_bulan)
                        ->like('YEAR(tanggal)', $key_tahun)
                        ->group_by('daerah_operasi')
                        ->get()->result_array();
        }
        return $this->db->select('daerah_operasi, SUM(IF(id_jenis=1,1,0)) AS jumlah_sintelis, SUM(IF(id_jenis=2,1,0)) AS jumlah_jj, SUM(IF(id_jenis=3,1,0)) AS jumlah_eksternal, SUM(IF(id_jenis=4,1,0)) AS jumlah_kamtib, count(id_jenis) as jumlah_gangguan')
                        ->from('laporan_gangguan')
                        ->join('daerah_operasi', 'daerah_operasi.id_daop = laporan_gangguan.id_daop', 'left')
                        ->group_by('daerah_operasi')
                        ->get()->result_array();
        
    }

    public function getJumlahDataSintelis($key_bulan = null, $key_tahun = null)
    {
        if ($key_bulan && $key_tahun) {
            return $this->db->select('id_jenis')
                            ->from('laporan_gangguan')
                            ->where('id_jenis', '1')
                            ->like('MONTH(tanggal)', $key_bulan)
                            ->like('YEAR(tanggal)', $key_tahun)
                            ->get()->num_rows();
        }
        return $this->db->select('id_jenis')
                            ->from('laporan_gangguan')
                            ->where('id_jenis', '1')
                            ->get()->num_rows();
        
    }
    
    public function getJumlahDataJJ($key_bulan = null, $key_tahun = null)
    {
        if ($key_bulan && $key_tahun) {
            return $this->db->select('id_jenis')
                            ->from('laporan_gangguan')
                            ->where('id_jenis', '2')
                            ->like('MONTH(tanggal)', $key_bulan)
                            ->like('YEAR(tanggal)', $key_tahun)
                            ->get()->num_rows();
        }
        return $this->db->select('id_jenis')
                            ->from('laporan_gangguan')
                            ->where('id_jenis', '2')
                            ->get()->num_rows();
    }

    public function getJumlahDataEksternal($key_bulan = null, $key_tahun = null)
    {
        if ($key_bulan && $key_tahun) {
            return $this->db->select('id_jenis')
                            ->from('laporan_gangguan')
                            ->where('id_jenis', '3')
                            ->like('MONTH(tanggal)', $key_bulan)
                            ->like('YEAR(tanggal)', $key_tahun)
                            ->get()->num_rows();
        }
        return $this->db->select('id_jenis')
                            ->from('laporan_gangguan')
                            ->where('id_jenis', '3')
                            ->get()->num_rows();
    }
    
    public function getJumlahDataKamtib($key_bulan = null, $key_tahun = null)
    {
        if ($key_bulan && $key_tahun) {
            return $this->db->select('id_jenis')
                            ->from('laporan_gangguan')
                            ->where('id_jenis', '4')
                            ->like('MONTH(tanggal)', $key_bulan)
                            ->like('YEAR(tanggal)', $key_tahun)
                            ->get()->num_rows();
        }
        return $this->db->select('id_jenis')
                            ->from('laporan_gangguan')
                            ->where('id_jenis', '4')
                            ->get()->num_rows();
    }

    //Get data by year only
    public function getDataGangguanByYear($key_tahun = null)
    {
        if ($key_tahun) {
            return $this->db->select('daerah_operasi, SUM(IF(id_jenis=1,1,0)) AS jumlah_sintelis, SUM(IF(id_jenis=2,1,0)) AS jumlah_jj, SUM(IF(id_jenis=3,1,0)) AS jumlah_eksternal, SUM(IF(id_jenis=4,1,0)) AS jumlah_kamtib, count(id_jenis) as jumlah_gangguan')
                        ->from('laporan_gangguan')
                        ->join('daerah_operasi', 'daerah_operasi.id_daop = laporan_gangguan.id_daop', 'left')
                        ->like('YEAR(tanggal)', $key_tahun)
                        ->group_by('daerah_operasi')
                        ->get()->result_array();
        }
        return $this->db->select('daerah_operasi, SUM(IF(id_jenis=1,1,0)) AS jumlah_sintelis, SUM(IF(id_jenis=2,1,0)) AS jumlah_jj, SUM(IF(id_jenis=3,1,0)) AS jumlah_eksternal, SUM(IF(id_jenis=4,1,0)) AS jumlah_kamtib, count(id_jenis) as jumlah_gangguan')
                        ->from('laporan_gangguan')
                        ->join('daerah_operasi', 'daerah_operasi.id_daop = laporan_gangguan.id_daop', 'left')
                        ->group_by('daerah_operasi')
                        ->get()->result_array();
        
    }

}