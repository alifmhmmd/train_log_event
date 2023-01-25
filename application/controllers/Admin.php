<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{	
        // var_dump($_SESSION);
        // $a = $this->session->userdata('nipp');
        // var_dump($a);die;
        $data['user'] = $this->db->get_where('user', ['nipp' => $this->session->userdata('nipp')])->row_array();
        // var_dump($data['user']);die;
        $data['judul'] = 'Train Log Event | Dashboard';
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/dashboard/index', $data);
		$this->load->view('templates/footer');
    }

}