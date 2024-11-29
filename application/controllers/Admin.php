<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_logged_in();
        $this->load->model('Registration_model'); // Load model Registration_model
    }

    public function index() {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
  
  
  
      $data['title'] = 'Role';
      $data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
  
      $data['role'] = $this->db->get('user_role')->result_array();
  
  
      $this->load->view('templates/header' , $data);
      $this->load->view('templates/sidebar' , $data);
      $this->load->view('templates/topbar' , $data);
      $this->load->view('admin/role' , $data);
      $this->load->view('templates/footer');
    }
  
    public function roleAccess($role_id)
    {
  
  
  
      $data['title'] = 'Role Access';
      $data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
  
  
      
      $data['role'] = $this->db->get_where('user_role', ['id' =>$role_id])->row_array();
      $this->db->where('id !=', 1);
      $data['menu'] = $this->db->get('user_menu')->result_array();
  
  
      $this->load->view('templates/header' , $data);
      $this->load->view('templates/sidebar' , $data);
      $this->load->view('templates/topbar' , $data);
      $this->load->view('admin/role-access' , $data);
      $this->load->view('templates/footer');
    }
  
    public function changeAccess()
  {
      $menu_id = $this->input->post('menuId');
      $role_id = $this->input->post('roleId');
  
      $data = [
          'role_id' => $role_id,
          'menu_id' => $menu_id,
      ];
  
      // Cek apakah sudah ada entri yang cocok di dalam user_access_menu
      $result = $this->db->get_where('user_access_menu', $data);
  
      if ($result->num_rows() > 0) {
          // Jika sudah ada, hapus entri yang sudah ada
          $this->db->delete('user_access_menu', $data);
      } else {
          // Jika belum ada, tambahkan entri baru
          $this->db->insert('user_access_menu', $data);
      }
  
      // Set flash message untuk memberi feedback kepada pengguna
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access changed</div>');
  
      // Redirect atau sesuaikan sesuai kebutuhan aplikasi Anda
      redirect('admin/roleAccess/' . $role_id);
  }
  
    public function penerimaansiswa() {
        $data['title'] = 'Penerimaan Siswa';
        $data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/penerimansiswa', $data);
        $this->load->view('templates/footer');
    }

    public function tabelsiswa() {
        $data['title'] = 'Tabel Siswa';
        $data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
        $this->load->model('Registration_model');
        $data['registrations'] = $this->Registration_model->get_all_registrations();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tabelsiswa', $data);
        $this->load->view('templates/footer');
    }

    public function edit_siswa($id) {
        $data['title'] = 'Edit Data Siswa';
        $data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
        $this->load->model('Registration_model');
        $data['registration'] = $this->Registration_model->get_registration_by_id($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit_siswa', $data);
        $this->load->view('templates/footer');
    }

    public function update_siswa($id) {
        $data = array(
            'nomor_pendaftaran' => $this->input->post('nomor_pendaftaran'),
            'nama_peserta' => $this->input->post('nama_peserta'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'nomor_akta' => $this->input->post('nomor_akta'),
            'nik' => $this->input->post('nik'),
            'alamat' => $this->input->post('alamat'),
            'nama_wali' => $this->input->post('nama_wali'),
            'nomor_hp' => $this->input->post('nomor_hp'),
            'ijazah' => $this->input->post('ijazah'),
            'kk' => $this->input->post('kk'),
            'akte' => $this->input->post('akte'),
            'ktp' => $this->input->post('ktp')
        );

        $this->load->model('Registration_model');
        $this->Registration_model->update_registration($id, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data siswa berhasil diupdate!</div>');
        redirect('admin/tabelsiswa');
    }

    public function delete_siswa($id) {
        $this->load->model('Registration_model');
        $this->Registration_model->delete_registration($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data siswa berhasil dihapus!</div>');
        redirect('admin/tabelsiswa');
    }

}