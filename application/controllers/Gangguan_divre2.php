<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Gangguan_divre2 extends CI_Controller {

	function __construct(){
		parent::__construct();
		is_not_login();
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->library('form_validation');
		$this->load->model('Gangguan_model_divre2');
	}

    // DAOP 1
	public function index()
	{
        //get_keyword
        if($this->input->post('submit'))
        {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_tempdata('keyword', $data['keyword'], 60); //set  temp_data 60 second for searching
        } else {
            $data['keyword'] = $this->session->tempdata('keyword');
        }
        //config pagination
        $config['base_url'] = base_url().'divre_2/gangguan';
        $this->db->like('tempat_kejadian', $data['keyword']);
        $this->db->from('laporan_gangguan');
        $this->db->where('id_daop', 16);
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
		$data['laporan'] = $this->Gangguan_model_divre2->getAllData($config['per_page'],  $data['start'],  $data['keyword']);
		$data['daerah'] = $this->Gangguan_model_divre2->getDataDaerahOperasi();
        $data['jenis'] = $this->Gangguan_model_divre2->getDataJenisGangguan();
		$data['jumlah_sintelis'] = $this->Gangguan_model_divre2->getJumlahDataSintelis();
		$data['jumlah_jj'] = $this->Gangguan_model_divre2->getJumlahDataJJ();
		$data['jumlah_eksternal'] = $this->Gangguan_model_divre2->getJumlahDataEksternal();
		$data['jumlah_kamtib'] = $this->Gangguan_model_divre2->getJumlahDataKamtib();

        $data['user'] = $this->db->get_where('user', ['nipp' => $this->session->userdata('nipp')])->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('divre_2/monitoring', $data);
		$this->load->view('templates/footer');
	}

    public function add_data()
    {
        $data['judul'] = 'Train Log Event | Input Data';
        $data['jenis'] = $this->Gangguan_model_divre2->getDataJenisGangguan();
		$data['daerah'] = $this->Gangguan_model_divre2->getDataDaerahOperasi();

        $data['user'] = $this->db->get_where('user', ['nipp' => $this->session->userdata('nipp')])->row_array();

        //form validation
        $this->form_validation->set_rules('tempat_kejadian', 'Tempat kejadian', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal gangguan', 'required');
        $this->form_validation->set_rules('jam_mulai', 'Jam mulai', 'required');
        $this->form_validation->set_rules('jam_selesai', 'Jam selesai', 'required');
        $this->form_validation->set_rules('uraian', 'Uraian', 'required');
        //set message
        $this->form_validation->set_message('required', '{field} masih kosong, silahkan diisi!!');
        
        $this->form_validation->set_error_delimiters('<span class="help-block text-danger">','</span>');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('divre_2/input_gangguan',$data);
            $this->load->view('templates/footer');
        }else{
            
            //menghitung lama gangguan
            $jam_selesai = strtotime($this->input->post('jam_selesai'));
            $jam_mulai = strtotime($this->input->post('jam_mulai'));
            $selisih = $jam_selesai - $jam_mulai;
            $jam = floor($selisih/(60*60));
            $menit = number_format(($selisih/60));
            if ($jam > 0 && $menit < 60) {
                $hasil = $jam." Jam".", ".$menit." Menit";
            } elseif($jam >= 1 && $menit <= 60){
                $hasil = $jam." Jam";
            } elseif($jam >= 1 && $menit >= 60) {
                $menit = $menit - ($jam*60);
                $hasil = $jam." Jam".", ".$menit." Menit";
            }else {
                $hasil = $menit." Menit";
            }
            $data = [
                'tempat_kejadian' => $this->input->post('tempat_kejadian'),
                'tanggal' => $this->input->post('tanggal'),
                'id_daop' => "16",
                'id_jenis' => $this->input->post('id_jenis'),
                'jam_mulai' => $this->input->post('jam_mulai'),
                'jam_selesai' => $this->input->post('jam_selesai'),
                'lama_gangguan' => $hasil,
                'uraian' => $this->input->post('uraian')
            ];
            $this->Gangguan_model_divre2->save($data);
            $this->session->set_flashdata('message', '  <div class="alert alert-success solid alert-dismissible fade show">
                                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                                            </button>
                                                            <strong>Success!</strong> Data berhasil ditambahkan.
                                                        </div>'
                                        );
            redirect(base_url("divre_2/gangguan"));
        }
    }

    public function delete_data($id_laporan)
	{
		$this->Gangguan_model_divre2->delete($id_laporan);
        $this->session->set_flashdata('message', '  <div class="alert alert-success solid alert-dismissible fade show">
                                                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                                        </button>
                                                        <strong>Success!</strong> Data berhasil dihapus.
                                                    </div>'
                                    );
		redirect(base_url("divre_2/gangguan"));
	}

    public function edit_data($id_laporan)
    {
        //menghitung lama gangguan
        $jam_selesai = strtotime($this->input->post('jam_selesai'));
        $jam_mulai = strtotime($this->input->post('jam_mulai'));
        $selisih = $jam_selesai - $jam_mulai;
        $jam = floor($selisih/(60*60));
        $menit = number_format(($selisih/60));
        if ($jam > 0 && $menit < 60) {
            $hasil = $jam." Jam".", ".$menit." Menit";
        } elseif($jam >= 1 && $menit <= 60){
            $hasil = $jam." Jam";
        } elseif($jam >= 1 && $menit >= 60) {
            $menit = $menit - ($jam*60);
            $hasil = $jam." Jam".", ".$menit." Menit";
        }else {
            $hasil = $menit." Menit";
        }
        $data = [
            'id_laporan' => $this->input->post('id_laporan'),
            'tempat_kejadian' => $this->input->post('tempat_kejadian'),
            'tanggal' => $this->input->post('tanggal'),
            'id_daop' => $this->input->post('id_daop'),
            'id_jenis' => $this->input->post('id_jenis'),
            'jam_mulai' => $this->input->post('jam_mulai'),
            'jam_selesai' => $this->input->post('jam_selesai'),
            'lama_gangguan' => $hasil,
            'uraian' => $this->input->post('uraian')
        ];
        $this->Gangguan_model_divre2
        ->update($id_laporan, $data);
        $this->session->set_flashdata('message', '  <div class="alert alert-success solid alert-dismissible fade show">
                                                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                                        </button>
                                                        <strong>Success!</strong> Data berhasil diubah.
                                                    </div>'
                                    );
        redirect(base_url("divre_2/gangguan"));
    }

    public function export_data_excel()
    {
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Data Laporan Gangguan - Divre 2');

        foreach (range('A','I') as $coulumnID) {
            $spreadsheet->getActiveSheet()->getColumnDimensions($coulumnID);
        }

        $sheet->setCellValue('A3', 'No');
        $sheet->setCellValue('B3', 'Tempat Kejadian');
        $sheet->setCellValue('C3', 'Tanggal');
        $sheet->setCellValue('D3', 'Daop/Divre');
        $sheet->setCellValue('E3', 'Jenis Gangguan');
        $sheet->setCellValue('F3', 'Jam Mulai');
        $sheet->setCellValue('G3', 'Jam Selesai');
        $sheet->setCellValue('H3', 'Lama Gangguan');
        $sheet->setCellValue('I3', 'Uraian');

        $data = $this->Gangguan_model_divre2->getData();
        $x= 4;
        foreach ($data as $row) {
            $no=1;
            $sheet->setCellValue('A'.$x, $no);
            $sheet->setCellValue('B'.$x, $row['tempat_kejadian']);
            $sheet->setCellValue('C'.$x, $row['tanggal']);
            $sheet->setCellValue('D'.$x, $row['daerah_operasi']);
            $sheet->setCellValue('E'.$x, $row['jenis_gangguan']);
            $sheet->setCellValue('F'.$x, $row['jam_mulai']);
            $sheet->setCellValue('G'.$x, $row['jam_selesai']);
            $sheet->setCellValue('H'.$x, $row['lama_gangguan']);
            $sheet->setCellValue('I'.$x, $row['uraian']);
            $no++;
            $x++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = 'laporan_gangguan_divre2.xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename= "'.$filename.'"');
        $writer->save('php://output');
        redirect(base_url("divre_2/gangguan"));
    }
    //End Daop 1

}