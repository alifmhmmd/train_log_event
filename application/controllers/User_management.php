<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_management extends CI_Controller {

	function __construct(){
		parent::__construct();
		is_not_login();
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->library('form_validation');
		$this->load->model('User_model');
	}

	public function index()
	{	
        //get_keyword
        if($this->input->post('submit'))
        {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_tempdata('keyword', $data['keyword'],30);
        } else {
            $data['keyword'] = $this->session->tempdata('keyword');
        }
        //config pagination
        $config['base_url'] = base_url().'user_management';
        $this->db->like('nama', $data['keyword']);
        $this->db->from('user');
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
	
		$data['judul'] = 'Train Log Event | Manajemen Akun';
        $data['akun'] = $this->User_model->getAllData($config['per_page'],  $data['start'],  $data['keyword']);
        $data['daerah'] = $this->User_model->getDataDaerahOperasi();
        $data['role'] = $this->User_model->getDataRole();
		$data['user'] = $this->db->get_where('user', ['nipp' => $this->session->userdata('nipp')])->row_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}

    public function add_data()
    {
       //form validation
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nipp', 'NIPP', 'required|trim|numeric|is_unique[user.nipp]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('id_role', 'User Role', 'required|trim');
        $this->form_validation->set_rules('id_daop', 'Daerah Operasi', 'required|trim');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan diisi!!');
		$this->form_validation->set_message('numeric', '{field} harus angka!!');
		$this->form_validation->set_message('min_length', '{field} terlalu pendek, minimal 8 karakter!!');
		$this->form_validation->set_message('matches', '{field} tidak sama!!');
		$this->form_validation->set_message('is_unique', '{field} sudah terdaftar!!');
        
        $this->form_validation->set_error_delimiters('<span class="help-block text-danger">','</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Train Log Event | Tambah Data Akun';
            $data['daerah'] = $this->User_model->getDataDaerahOperasi();
            $data['role'] = $this->User_model->getDataRole();
            $data['user'] = $this->db->get_where('user', ['nipp' => $this->session->userdata('nipp')])->row_array();		
			$this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar');
            $this->load->view('user/tambah');
            $this->load->view('templates/footer');
		}else{
			$data = [
                'nama' => htmlspecialchars($this->input->post('nama'), true),
                'nipp' => htmlspecialchars($this->input->post('nipp'), true),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'image' => "default.png",
                'id_role' => htmlspecialchars($this->input->post('id_role'), true),
                'id_daop' => htmlspecialchars($this->input->post('id_daop'), true),
                'date_created' => date('Y-m-d')
            ];

			$this->User_model->save($data);
			$this->session->set_flashdata('message', '  <div class="alert alert-success solid alert-dismissible fade show">
                                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                                            </button>
                                                            <strong>Berhasil!</strong> Pengguna baru berhasil ditambahkan.
                                                        </div>'
                                        );
			redirect('user_management');
		}

		
    }

    public function delete_data($id_laporan)
	{
		$this->User_model->delete($id_laporan);
        $this->session->set_flashdata('message', '  <div class="alert alert-success solid alert-dismissible fade show">
                                                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                                        </button>
                                                        <strong>Success!</strong> Data berhasil dihapus.
                                                    </div>'
                                    );
		redirect('user_management');
	}

    public function edit_data($id_user)
    {
        $data = [
            'id_user' => $this->input->post('id_user'),
            'nama' => $this->input->post('nama'),
            'nipp' => $this->input->post('nipp'),
            'id_role' => $this->input->post('id_role'),
            'id_daop' => $this->input->post('id_daop')
        ];
        $this->User_model->update($id_user, $data);
        $this->session->set_flashdata('message', '  <div class="alert alert-success solid alert-dismissible fade show">
                                                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                                        </button>
                                                        <strong>Success!</strong> Data berhasil diubah.
                                                    </div>'
                                    );
        redirect('user_management');
    }
}