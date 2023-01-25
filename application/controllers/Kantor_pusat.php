<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kantor_pusat extends CI_Controller {

    function __construct(){
		parent::__construct();
		is_not_login();
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->library('form_validation');
		$this->load->model('Kantor_pusat_model');
	}

    public function index()
	{
        
        //get_keyword
        if($this->input->post('submit'))
        {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_tempdata('keyword', $data['keyword'],60);
        } else {
            $data['keyword'] = $this->session->tempdata('keyword');
        }
        //config pagination
        $config['base_url'] = base_url().'kantor_pusat';
        $this->db->like('tempat_kejadian', $data['keyword']);
        $this->db->from('laporan_gangguan');
        $config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 10;
        $data['start'] = $this->uri->segment(3);

        //styling pagination
        $config['full_tag_open'] ='<nav><ul class="pagination pagination-sm pagination-circle justify-content-end">';
        $config['full_tag_close'] ='</ul></nav>';
        $config['first_link'] ='Awal';
        $config['first_tag_open'] ='<li class="page-item page-indicator">';
        $config['first_tag_close'] ='</li>';
        $config['last_link'] ='Akhir';
        $config['last_tag_open'] ='<li class="page-item page-indicator">';
        $config['last_tag_close'] ='</li>';
        $config['next_link'] ='&raquo';
        $config['next_tag_open'] ='<li class="page-item page-indicator">';
        $config['next_tag_close'] ='</li>';
        $config['prev_link'] ='&laquo';
        $config['prev_tag_open'] ='<li class="page-item page-indicator">';
        $config['prev_tag_close'] ='</li>';
        $config['cur_tag_open'] ='<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] ='</a></li>';
        $config['num_tag_open'] ='<li class="page-item ">';
        $config['num_tag_close'] ='</li>';
        $config['attributes'] = array('class' => 'page-link');

        //initialize pagination
        $this->pagination->initialize($config);	

        $data['judul'] = 'Train Log Event | Monitoring';
		$data['laporan'] = $this->Kantor_pusat_model->getDataGangguan($config['per_page'],  $data['start'],  $data['keyword']);
		$data['daerah'] = $this->Kantor_pusat_model->getDataDaerahOperasi();
        $data['jenis'] = $this->Kantor_pusat_model->getDataJenisGangguan();
		$data['jumlah_sintelis'] = $this->Kantor_pusat_model->getJumlahDataSintelis();
		$data['jumlah_jj'] = $this->Kantor_pusat_model->getJumlahDataJJ();
		$data['jumlah_eksternal'] = $this->Kantor_pusat_model->getJumlahDataEksternal();
		$data['jumlah_kamtib'] = $this->Kantor_pusat_model->getJumlahDataKamtib();

        $data['user'] = $this->db->get_where('user', ['nipp' => $this->session->userdata('nipp')])->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('kantor_pusat/index', $data);
		$this->load->view('templates/footer');
	}
}