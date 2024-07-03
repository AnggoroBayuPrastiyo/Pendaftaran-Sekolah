<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seleksi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Seleksi_model');
        $this->load->library('session'); // Memastikan library session dimuat
    }

    public function index() {
        $this->load->view('seleksi_form');
    }

    public function process_form() {
        $nomor_pendaftaran = $this->input->post('nomor_pendaftaran');
        $nama_peserta = $this->input->post('nama_peserta');
        $tanggal_lahir = $this->input->post('tanggal_lahir');

        $this->db->where('nomor_pendaftaran', $nomor_pendaftaran);
        $this->db->where('nama_peserta', $nama_peserta);
        $this->db->where('tanggal_lahir', $tanggal_lahir);
        $result = $this->db->get('registrations');

        // Siapkan data untuk ditampilkan di halaman hasil
        $data['nomor_pendaftaran'] = $nomor_pendaftaran;
        $data['nama_peserta'] = $nama_peserta;
        $data['tanggal_lahir'] = $tanggal_lahir;

        if ($result->num_rows() > 0) {
            $data['hasil_seleksi'] = 'Diterima';
        } else {
            $data['hasil_seleksi'] = 'Ditolak';
        }

        // Tandai hasil seleksi sudah dilihat
        $this->User_model->mark_result_as_seen($user_id);

        // Pass data to the view
        $this->load->view('hasil', $data);

        // Uncomment the following line if you want to save the data to the database
        // $this->Seleksi_model->save_seleksi($data);
    }
}
?>
