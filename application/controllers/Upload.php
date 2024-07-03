<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index() {
        $this->load->view('upload_form', array('error' => ' ' ));
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

        for ($i = 0; $i < $count; $i++) {
            $_FILES['userfile']['name'] = $files['userfiles']['name'][$i];
            $_FILES['userfile']['type'] = $files['userfiles']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['userfiles']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files['userfiles']['error'][$i];
            $_FILES['userfile']['size'] = $files['userfiles']['size'][$i];

            $this->upload->initialize($config);

            if ($this->upload->do_upload('userfile')) {
                $upload_data[] = $this->upload->data();
            } else {
                $errors[] = $this->upload->display_errors();
            }
        }

        if (!empty($errors)) {
            $this->load->view('upload_form', array('error' => implode('<br>', $errors)));
        } else {
            $this->load->view('upload_success', array('upload_data' => $upload_data));
        }
    }
}
