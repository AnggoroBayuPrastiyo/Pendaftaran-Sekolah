<?php
class Seleksi_model extends CI_Model {
    public function get_hasil_seleksi($nomor_pendaftaran, $nama_peserta, $tanggal_lahir) {
        $this->db->select('s.hasil');
        $this->db->from('seleksi s');
        $this->db->join('registrations r', 'r.nomor_pendaftaran = s.nomor_pendaftaran');
        $this->db->where('r.nomor_pendaftaran', $nomor_pendaftaran);
        $this->db->where('r.nama_peserta', $nama_peserta);
        $this->db->where('r.tanggal_lahir', $tanggal_lahir);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->hasil;
        } else {
            return false;
        }
    }
}