<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Menu_model');
        $this->load->model('Registration_model'); // Load model Registrasi untuk mengakses data registrasi
    }

    public function index() {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        // Ambil data registrasi yang sudah disimpan ke dalam database
        $data['registrations'] = $this->Registration_model->get_all_registrations(); // Anda perlu membuat method get_all_registrations() di model Registration_model

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/index', $data); // Tampilkan data registrasi di dalam view menu/index.php
        $this->load->view('templates/footer');
    }

    public function submenu() {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');
        $data['submenu'] = $this->menu->getSubMenu();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/submenu', $data);
        $this->load->view('templates/footer');
    }
}
