<?php
defined('BASEPATH') or exit('No direct script access allowed');

class payment extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Biaya Pendaftaran';
        $this->load->view('templates/header', $data);
        $this->load->view('user/payment', $data);
        $this->load->view('templates/footer');
    }
}