<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct(){
		parent::__construct();
		is_not_login();
        $this->load->library('session');
        $this->load->library('form_validation');
		$this->load->model('User_model');
	}

	public function index()
	{		
		$data['judul'] = 'Train Log Event | Profile';
		$data['user'] = $this->db->select('*')
								->from('user')
                                ->join('daerah_operasi', 'daerah_operasi.id_daop = user.id_daop', 'left')
                                ->join('user_role', 'user_role.id_role = user.id_role', 'left')
                                ->where('nipp', $this->session->userdata('nipp'))
                                ->get()->row_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('profile/index', $data);
		$this->load->view('templates/footer');
	}

	public function change_password()
	{		
		//form validation
        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim|min_length[8]');
        $this->form_validation->set_rules('password_baru1', 'Password Baru', 'required|trim');
        $this->form_validation->set_rules('password_baru2', 'Konfirmasi Password Baru', 'required|trim|matches[password_baru1]');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan diisi!!');
		$this->form_validation->set_message('min_length', '{field} terlalu pendek, minimal 8 karakter!!');
		$this->form_validation->set_message('matches', '{field} tidak sama!!');
        
        $this->form_validation->set_error_delimiters('<span class="help-block text-danger">','</span>');

		$data['judul'] = 'Train Log Event | Change Password';
		$data['user'] = $this->db->select('*')
								->from('user')
								->join('daerah_operasi', 'daerah_operasi.id_daop = user.id_daop', 'left')
								->join('user_role', 'user_role.id_role = user.id_role', 'left')
								->where('nipp', $this->session->userdata('nipp'))
								->get()->row_array();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('profile/change_password', $data);
			$this->load->view('templates/footer');
		}else {
			$password_lama = $this->input->post('password_lama');
			$password_baru = $this->input->post('password_baru1');
			if (!password_verify($password_lama, $data['user']['password'])) {
				$this->session->set_flashdata('message', '  <div class="alert alert-danger solid alert-dismissible fade show">
                                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                                            </button>
                                                            <strong>Gagal!</strong> Password lama tidak sesuai.
                                                        </div>'
                                        );
				redirect('profile/change_password');
			} elseif ($password_lama == $password_baru) {
				$this->session->set_flashdata('message', '  <div class="alert alert-danger solid alert-dismissible fade show">
                                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                                            </button>
                                                            <strong>Gagal!</strong> Password baru tidak boleh sama password sebelumnya.
                                                        </div>'
                                        );
				redirect('profile/change_password');
			} else {
				//change password
				$id_user = $data['user']['id_user'];
				$password_hash = password_hash($this->input->post('password_baru1'), PASSWORD_DEFAULT);
				// var_dump($password_hash);die;
				$this->db->set('password', $password_hash);
				$this->db->where('nipp', $data['user']['nipp']);
				$this->db->update('user');

				// $data = [
				// 	'id_user' => $data['user']['id_user'],
				// 	'password' => password_hash($this->input->post('password_baru1'), PASSWORD_DEFAULT)
				// ];
				// $this->User_model->update($id_user, $data);

				$this->session->set_flashdata('message', '  <div class="alert alert-success solid alert-dismissible fade show">
                                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                                            </button>
                                                            <strong>Berhasil!</strong> Password baru berhasil diganti.
                                                        </div>'
                                        );
				redirect('profile/change_password');
			}
		}
    }

	public function edit_foto($id_user){

		$image = $_FILES['image'];
		if ($image=''){}else {
			$config['upload_path'] = './assets/images/profile';
			$config['allowed_types'] = 'jpg|png|jpeg|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<strong>Gagal Ubah Foto!</strong> Masukkan file dengan tipe jpg/png.
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
														</div>'
											);
				redirect('profile');
			}else{
				$image = $this->upload->data('file_name');
			}
		}
		$data = [
			'image' => $image
		];

		$this->User_model->update($id_user, $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
															<strong>Berhasil Ubah Foto!</strong>
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
														</div>'
											);
		redirect('profile');
	}
}