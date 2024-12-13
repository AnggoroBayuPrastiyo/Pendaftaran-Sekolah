<?php

class Seleksi_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_hasil_seleksi($nomor_pendaftaran, $nama_peserta, $tanggal_lahir) {
        $this->db->select('s.hasil_seleksi');
        $this->db->from('seleksi s');
        $this->db->join('registrations r', 'r.nomor_pendaftaran = s.nomor_pendaftaran');
        $this->db->where('r.nomor_pendaftaran', $nomor_pendaftaran);
        $this->db->where('r.nama_peserta', $nama_peserta);
        $this->db->where('r.tanggal_lahir', $tanggal_lahir);
        $query = $this->db->get();

        // Query untuk full join menggunakan UNION antara LEFT JOIN dan RIGHT JOIN
        $query = $this->db->query("
            SELECT r.nomor_pendaftaran, r.nama_peserta, r.tanggal_lahir, s.hasil_seleksi
            FROM registrations r
            LEFT JOIN seleksi s ON r.nomor_pendaftaran = s.nomor_pendaftaran
            WHERE r.nomor_pendaftaran = ? AND r.nama_peserta = ? AND r.tanggal_lahir = ?
            UNION
            SELECT r.nomor_pendaftaran, r.nama_peserta, r.tanggal_lahir, s.hasil_seleksi
            FROM registrations r
            RIGHT JOIN seleksi s ON r.nomor_pendaftaran = s.nomor_pendaftaran
            WHERE r.nomor_pendaftaran = ? AND r.nama_peserta = ? AND r.tanggal_lahir = ?
        ", array($nomor_pendaftaran, $nama_peserta, $tanggal_lahir, $nomor_pendaftaran, $nama_peserta, $tanggal_lahir));

        if ($query->num_rows() > 0) {
            return $query->row()->hasil_seleksi;
        } else {
            return false;
        }
    }

    // Tambahkan fungsi untuk validasi data registrasi
    public function validate_registration($nomor_pendaftaran, $nama_peserta, $tanggal_lahir) {
        $this->db->where('nomor_pendaftaran', $nomor_pendaftaran);
        $this->db->where('nama_peserta', $nama_peserta);
        $this->db->where('tanggal_lahir', $tanggal_lahir);
        $query = $this->db->get('registrations');

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
