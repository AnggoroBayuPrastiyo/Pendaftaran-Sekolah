<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Registration_model');
    }

    public function index() {
        $this->load->view('registration_form');
    }

    public function process_form() {
        if ($this->input->method() === 'post') {
            $data = array(
                'nomor_pendaftaran' => rand(100000, 999999),
                'nama_peserta' => $this->input->post('nama_peserta', TRUE),
                'tempat_lahir' => $this->input->post('tempat_lahir', TRUE),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
                'nomor_akta' => $this->input->post('nomor_akta', TRUE),
                'nik' => $this->input->post('nik', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'nama_wali' => $this->input->post('nama_wali', TRUE),
                'nomor_hp' => $this->input->post('nomor_hp', TRUE),
                'pilihan_sekolah' => $this->input->post('pilihan_sekolah', TRUE)
            );

            // Save the data to the database
            $this->Registration_model->save_registration($data);

            // Pass data to the view
            $this->load->view('registration_result', $data);
        } else {
            redirect('registration');
        }
    }
}