<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
    public function index() {
        $this->load->model('Pengumuman_model');
        $data['pengumuman'] = $this->Pengumuman_model->get_all_pengumuman();
        $data['siswa'] = $this->Pengumuman_model->get_all_pengumuman();

        // echo json_encode($data);exit;
        $this->load->view('pengumuman/index', $data);
    }
}


