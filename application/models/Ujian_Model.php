<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian_Model extends CI_Model {

    public function get_all_soal() {
        // Ambil semua soal dari tabel soal
        return $this->db->get('soal')->result_array();
    }

    public function simpan_jawaban($data) {
        // Simpan jawaban peserta ke tabel jawaban
        return $this->db->insert('jawaban_peserta',$data);
    }
}