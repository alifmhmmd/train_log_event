<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		is_not_login();
		$this->load->model('Dashboard_model');
	}
	
	public function index()
	{
		//get_keyword
        if($this->input->post('submit'))
        {
		    $data['key_bulan'] = $this->input->post('key_bulan');
            $data['key_tahun'] = $this->input->post('key_tahun');
            $this->session->set_tempdata('key_bulan', $data['key_bulan'],60);
            $this->session->set_tempdata('key_tahun', $data['key_tahun'],60);
        } else {
            $data['key_bulan'] = $this->session->tempdata('key_bulan');
            $data['key_tahun'] = $this->session->tempdata('key_tahun');
        }
		
		$data['judul'] = 'Train Log Event | Dashboard';
		$data['user'] = $this->db->get_where('user', ['nipp' => $this->session->userdata('nipp')])->row_array();
		$data['gangguan'] = $this->Dashboard_model->getDataGangguan($data['key_bulan'], $data['key_tahun']);
		$data['tahun'] = $this->Dashboard_model->getTahun();
		$data['jumlah_sintelis'] = $this->Dashboard_model->getJumlahDataSintelis($data['key_bulan'], $data['key_tahun']);
		$data['jumlah_jj'] = $this->Dashboard_model->getJumlahDataJJ($data['key_bulan'], $data['key_tahun']);
		$data['jumlah_eksternal'] = $this->Dashboard_model->getJumlahDataEksternal($data['key_bulan'], $data['key_tahun']);
		$data['jumlah_kamtib'] = $this->Dashboard_model->getJumlahDataKamtib($data['key_bulan'], $data['key_tahun']);
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer');
	}

	function tampil_allData(){
		$this->session->unset_tempdata('key_bulan');
		$this->session->unset_tempdata('key_bulan');
		redirect('dashboard');
	}
}