<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_ppdb extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Calon_siswa_model');
    }

    public function index() {
        $data['siswa'] = $this->Calon_siswa_model->get_all_siswa();
        $this->load->view('ppdb/index', $data);
    }

    public function seleksi() {
        $data['siswa'] = $this->Calon_siswa_model->get_sorted_siswa();
        $this->load->view('ppdb/seleksi', $data);
    }

    public function tambah() {
        $this->load->view('ppdb/tambah');
    }

    public function simpan() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nilai' => $this->input->post('nilai')
        );
        $this->Calon_siswa_model->insert_siswa($data);
        redirect('ppdb');
    }
}
?>
