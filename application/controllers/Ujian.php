<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Ujian_Model');
    }

    public function index() {
        $this->load->view('ujian_panduan');
    }

    public function mulai() {
        // Set waktu berakhir 60 menit dari sekarang
        $end_time = time() + (60 * 60);

        // Ambil soal dari database
        $this->load->model('Ujian_Model');
        $soal = $this->Ujian_Model->get_all_soal(); // Asumsi get_all_soal() mengambil soal

        // Kirim data ke view (waktu berakhir dan soal)
        $data = [
            'soal' => $soal,
            'end_time' => $end_time
        ];
        $this->load->view('ujian_soal', $data);
    }

    public function submit() {
        // Ambil jawaban dari form
        $jawaban = $this->input->post('jawaban');
        $peserta_id = 1; // ID pengguna (sesuaikan dengan sistem Anda)
    
        // Ambil soal dari database untuk perhitungan
        $soal = $this->Ujian_Model->get_all_soal();
        $total_soal = count($soal);
        $jumlah_benar = 0;
    
        // Cek jawaban benar
        foreach ($soal as $item) {
            $soal_id = $item['id'];
            $jawaban_benar = $item['jawaban_benar']; // Asumsi kolom jawaban_benar di tabel soal
    
            if (isset($jawaban[$soal_id]) && $jawaban[$soal_id] == $jawaban_benar) {
                $jumlah_benar++;
            }
        }
    
        // Hitung skor murni dalam skala 0-100
        $skor_murni = ($jumlah_benar / $total_soal) * 100;
    
        // Simpan skor murni di session untuk ditampilkan di halaman hasil
        $this->session->set_userdata('nama_lengkap', $this->session->userdata('nama_lengkap'));
        $this->session->set_userdata('nomor_pendaftaran', $this->session->userdata('nomor_pendaftaran'));
        $this->session->set_userdata('skor_murni', $skor_murni);
    
        // Redirect ke halaman hasil
        redirect('ujian/selesai');
    }
    
    

    public function simpan_jawaban($data) {
        // Simpan jawaban peserta ke tabel jawaban
        return $this->db->insert('jawaban', $data);
    }
    
    
    public function selesai() {
        $data = [
            'nama_lengkap' => $this->session->userdata('nama_lengkap'),
            'nomor_pendaftaran' => $this->session->userdata('nomor_pendaftaran'),
            'skor_murni' => $this->session->userdata('skor_murni')
        ];
    
        // Load view untuk halaman hasil
        $this->load->view('selesai', $data);
    }
    
}