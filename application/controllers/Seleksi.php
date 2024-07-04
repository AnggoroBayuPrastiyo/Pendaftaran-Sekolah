<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seleksi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Seleksi_model');
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('seleksi_form');
    }

    public function process_form() {
        $nomor_pendaftaran = $this->input->post('nomor_pendaftaran');
        $nama_peserta = $this->input->post('nama_peserta');
        $tanggal_lahir = $this->input->post('tanggal_lahir');

        // Validasi input user
        $is_valid = $this->Seleksi_model->validate_registration($nomor_pendaftaran, $nama_peserta, $tanggal_lahir);

        if ($is_valid) {
            $result = $this->Seleksi_model->get_hasil_seleksi($nomor_pendaftaran, $nama_peserta, $tanggal_lahir);
            $data['nomor_pendaftaran'] = $nomor_pendaftaran;
            $data['nama_peserta'] = $nama_peserta;
            $data['tanggal_lahir'] = $tanggal_lahir;

            if ($result !== false) {
                $data['hasil_seleksi'] = $result;
            } else {
                $data['hasil_seleksi'] = 'Ditolak';
            }

            $this->load->view('hasil', $data);
        } else {
            // Data tidak valid
            $data['error'] = 'Data tidak valid. Silakan periksa kembali input Anda.';
            $this->load->view('seleksi_form', $data);
        }
    }
    public function full_join_results() {
        $data['results'] = $this->Seleksi_model->get_full_hasil_seleksi();
        $this->load->view('full_join_results', $data);
}
}