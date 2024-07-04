<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->library('session');
        $this->load->model('Upload_model'); // Memuat model
    }

    public function index() {
        $this->load->view('upload_form', array('error' => ' '));
    }

    public function do_upload() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
        $config['max_size'] = 10000; // dalam kilobytes (10 MB)
        $config['max_width'] = 10240;
        $config['max_height'] = 7680;

        $this->load->library('upload', $config);

        $files = $_FILES;
        $count = count($_FILES['userfiles']['name']);

        $upload_data = array();
        $errors = array();
        $saved_data = array();

        for ($i = 0; $i < $count; $i++) {
            $_FILES['userfile']['name'] = $files['userfiles']['name'][$i];
            $_FILES['userfile']['type'] = $files['userfiles']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['userfiles']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files['userfiles']['error'][$i];
            $_FILES['userfile']['size'] = $files['userfiles']['size'][$i];

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('userfile')) {
                $errors[] = $this->upload->display_errors();
            } else {
                $data = $this->upload->data();
                $upload_data[] = $data;

                // Simpan informasi file ke array
                switch ($i) {
                    case 0:
                        $saved_data['ijazah'] = $data['file_name'];
                        break;
                    case 1:
                        $saved_data['kk'] = $data['file_name'];
                        break;
                    case 2:
                        $saved_data['akte'] = $data['file_name'];
                        break;
                    case 3:
                        $saved_data['ktp'] = $data['file_name'];
                        break;
                }
            }
        }

        if (!empty($errors)) {
            $this->load->view('upload_form', array('error' => implode('<br>', $errors)));
        } else {
            // Simpan informasi ke database
            if ($this->Upload_model->save_file_info($saved_data)) {
                // Get registration data from session
                $registration_data = $this->session->userdata('registration_data');

                // Merge upload data and registration data
                $view_data = array_merge($registration_data, $saved_data);

                // Save view data to session
                $this->session->set_userdata('view_data', $view_data);

                // Load the success view
                $this->load->view('upload_success');
            } else {
                echo "Error inserting data into database.";
            }
        }
    }
}
