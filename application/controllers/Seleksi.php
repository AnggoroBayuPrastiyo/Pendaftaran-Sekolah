<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Seleksi_model');
    }

    public function index() {
        $this->load->view('seleksi_form');
    }

    public function process_form() {
        if ($this->input->method() === 'post') {
            $data = array(
                'nomor_pendaftaran' => $this->input->post('nomor_pendaftaran', TRUE),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
            );

            // Save the data to the database
            $this->Seleksi_model->save_seleksi($data);

            // Pass data to the view
            $this->load->view('seleksi_result', $data);
        } else {
            redirect('seleksi');
        }
    }
}