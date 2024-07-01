<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seleksi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Seleksi_model');
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
    
        if ($result->num_rows() > 0) {
          $data['hasil'] = 'Diterima';
        } else {
          $data['hasil'] = 'Ditolak';
        }
    
        $this->load->view('hasil', $data);

            // Save the data to the database
            // $this->Seleksi_model->save_seleksi($data);

            // Pass data to the view
            $this->load->view('hasil', $data);
            if ($hasil !== false) {
                // Jika data ditemukan, tampilkan hasil
                $data['hasil'] = $hasil;
                $this->load->view('hasil', $data);
            } else {
                // Jika data tidak ditemukan, arahkan kembali ke halaman seleksi
                redirect('seleksi');
        }
    }
}