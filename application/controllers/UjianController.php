<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UjianController extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    // Fungsi untuk menampilkan form login
    public function index() {
        //echo "Masuk ke halaman login";
        $this->load->view('form_login');
    }

    // Fungsi untuk memproses form login
    public function proses_login() {
        // Validasi input
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('nomor_pendaftaran', 'Nomor Pendaftaran', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke form login dengan pesan error
            $this->load->view('form_login');
        } else {
            // Jika validasi berhasil, simpan data di session dan alihkan ke halaman panduan
            $data = [
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'nomor_pendaftaran' => $this->input->post('nomor_pendaftaran'),
                'is_logged_in' => TRUE,
            ];
            $this->session->set_userdata($data);

            // Redirect ke halaman panduan
            redirect('ujiancontroller/panduan');
        }
    }

    // Fungsi untuk menampilkan halaman panduan ujian
    public function panduan() {
        // Cek apakah user sudah login
        if ($this->session->userdata('is_logged_in') !== TRUE) {
            redirect('ujiancontroller');
        }

        // Ambil data session
        $data = [
        'nama_lengkap' => $this->session->userdata('nama_lengkap'),
        'nomor_pendaftaran' => $this->session->userdata('nomor_pendaftaran')
        ];
        $this->load->view('ujian_panduan', $data);
    }

    // Fungsi untuk logout
    public function logout() {
        // Hapus session dan kembalikan ke halaman login
        $this->session->sess_destroy();
        redirect('ujiancontroller');
    }
}