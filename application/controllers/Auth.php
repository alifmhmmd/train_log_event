<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		// is_already_login()
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('Auth_model');
	}

	public function index()
	{	
		is_already_login();
		//form validation
		$this->form_validation->set_rules('nipp', 'NIPP', 'required|trim|numeric');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan diisi!!');
		$this->form_validation->set_message('numeric', '{field} harus angka!!');
		$this->form_validation->set_message('min_length', '{field} terlalu pendek, minimal 8 karakter!!');

		$this->form_validation->set_error_delimiters('<span class="help-block text-danger">','</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Train Log Event | Login';			
			$this->load->view('templates/auth_header',$data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		}else{
			//login proccess
			$this->_login();
		}
	}

	private function _login()
	{
		$nipp = $this->input->post('nipp');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['nipp' => $nipp])->row_array();

		//jika usernya add_data
		if ($nipp) {
			//cek password
			if (password_verify($password, $user['password'])) {
				$data = [
					'nama' => $user['nama'],
					'nipp' => $user['nipp'],
					'id_role' => $user['id_role'],
					'id_daop' => $user['id_daop']
				];
				if ($user['id_role'] == 1) {
					$this->session->set_userdata($data);
					redirect(base_url('dashboard'));
				} elseif ($user['id_role'] == 2) {
					$this->session->set_userdata($data);
					redirect(base_url('dashboard'));
				} elseif ($user['id_role'] == 3  && $user['id_daop'] == 1) {
					$this->session->set_userdata($data);
					redirect(base_url('daop_1/gangguan'));
				} elseif ($user['id_role'] == 3  && $user['id_daop'] == 2) {
					$this->session->set_userdata($data);
					redirect(base_url('daop_2/gangguan'));
				} elseif ($user['id_role'] == 3  && $user['id_daop'] == 3) {
					$this->session->set_userdata($data);
					redirect(base_url('daop_3/gangguan'));
				} elseif ($user['id_role'] == 3  && $user['id_daop'] == 4) {
					$this->session->set_userdata($data);
					redirect(base_url('daop_4/gangguan'));
				} elseif ($user['id_role'] == 3  && $user['id_daop'] == 5) {
					$this->session->set_userdata($data);
					redirect(base_url('daop_5/gangguan'));
				} elseif ($user['id_role'] == 3  && $user['id_daop'] == 6) {
					$this->session->set_userdata($data);
					redirect(base_url('daop_6/gangguan'));
				} elseif ($user['id_role'] == 3  && $user['id_daop'] == 7) {
					$this->session->set_userdata($data);
					redirect(base_url('daop_7/gangguan'));
				} elseif ($user['id_role'] == 3  && $user['id_daop'] == 8) {
					$this->session->set_userdata($data);
					redirect(base_url('daop_8/gangguan'));
				} elseif ($user['id_role'] == 3  && $user['id_daop'] == 9) {
					$this->session->set_userdata($data);
					redirect(base_url('daop_9/gangguan'));
				} 
			}else{
				$this->session->set_flashdata('message', '  <div class="alert alert-danger solid alert-dismissible fade show">
                                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                                            </button>
                                                            <strong>Gagal!</strong> Password anda salah!!
                                                        </div>'
                                        );
			redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '  <div class="alert alert-danger solid alert-dismissible fade show">
                                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                                            </button>
                                                            <strong>Gagal!</strong> Akun tidak ditemukan. Silahkan register.
                                                        </div>'
                                        );
			redirect('auth');
		}
		
	}

	public function registration()
	{
		//form validation
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nipp', 'NIPP', 'required|trim|numeric|is_unique[user.nipp]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan diisi!!');
		$this->form_validation->set_message('numeric', '{field} harus angka!!');
		$this->form_validation->set_message('min_length', '{field} terlalu pendek, minimal 8 karakter!!');
		$this->form_validation->set_message('matches', '{field} tidak sama!!');
		$this->form_validation->set_message('is_unique', '{field} sudah terdaftar!!');
        
        $this->form_validation->set_error_delimiters('<span class="help-block text-danger">','</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Train Log Event | Registration';			
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		}else{
			$data = [
                'nama' => htmlspecialchars($this->input->post('nama'), true),
                'nipp' => htmlspecialchars($this->input->post('nipp'), true),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'image' => "default.jpg",
                'id_role' => 1,
                'date_created' => date('Y-m-d')
            ];

			$this->Auth_model->save($data);
			$this->session->set_flashdata('message', '  <div class="alert alert-success solid alert-dismissible fade show">
                                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                                            </button>
                                                            <strong>Berhasil!</strong> Pengguna baru berhasil ditambahkan. Silahkan login.
                                                        </div>'
                                        );
			redirect('auth');
		}

		
	}

	public function logout()
	{
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('nipp');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '  <div class="alert alert-success solid alert-dismissible fade show">
                                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                                            </button>
                                                            <strong>Berhasil!</strong> Anda telah logout.
                                                        </div>'
                                        );
			redirect('auth');
	}
}