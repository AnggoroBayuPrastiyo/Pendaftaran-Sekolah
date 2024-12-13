<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pengumuman_model');
    }

    public function index() {
        $data['pengumuman'] = $this->Pengumuman_model->get_all_pengumuman();
        $this->load->view('pengumuman/index', $data);
    }

    public function tambah() {
        if ($this->input->post()) {
            $data = [
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'tanggal' => date('Y-m-d')
            ];
            $this->Pengumuman_model->add_pengumuman($data);
            redirect('pengumuman');
        }
        $this->load->view('pengumuman/tambah');
    }

    public function hapus($id) {
        $this->Pengumuman_model->delete_pengumuman($id);
        redirect('pengumuman');
    }
}
