<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller  
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index(){
    $data['title'] = 'Menu Management';
    $data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();


    $data['menu'] = $this->db->get('user_menu')->result_array();


    $this->form_validation->set_rules('menu','Menu','required');



    if($this->form_validation->run() == FALSE){
    $this->load->view('templates/header' , $data);
    $this->load->view('templates/sidebar' , $data);
    $this->load->view('templates/topbar' , $data);
    $this->load->view('menu/index' , $data);
    $this->load->view('templates/footer');
    } else {
      $this->db->insert('user_menu', ['menu'=> $this->input->post('menu')]);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Add new menu</div>');
      redirect('menu');
    }
    
  }

  public function submenu()
  {
    $data['title'] = 'Submenu Management';
    $data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
    $this->load->model('Menu_model','menu');

    $data['submenu'] = $this->menu->getSubMenu();
    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('title','Title','required');
    $this->form_validation->set_rules('menu_id','Menu','required');
    $this->form_validation->set_rules('url','URL','required');
    $this->form_validation->set_rules('icon','icon','required');

    if($this->form_validation->run() == FALSE)
    {
      
      $this->load->view('templates/header' , $data);
      $this->load->view('templates/sidebar' , $data);
      $this->load->view('templates/topbar' , $data);
      $this->load->view('menu/submenu' , $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'title' => $this->input->post('title'),
        'menu_id' => $this->input->post('menu_id'),
        'url' => $this->input->post('url'),
        'icon' => $this->input->post('icon'),
        'is_active' => $this->input->post('is_active')
      ];
      $this->db->insert('user_sub_menu', $data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Add new sub menu</div>');
      redirect('menu/submenu');
    }

  }

  public function editsubmenu($id)
{
    // Contoh implementasi untuk edit submenu
    $data['title'] = 'Edit Submenu';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['submenu'] = $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('menu_id', 'Menu', 'required');
    $this->form_validation->set_rules('url', 'URL', 'required');
    $this->form_validation->set_rules('icon', 'icon', 'required');

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/editsubmenu', $data); // Buat view untuk edit submenu
        $this->load->view('templates/footer');
    } else {
        $data = [
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active')
        ];
        $this->db->where('id', $id);
        $this->db->update('user_sub_menu', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu updated successfully!</div>');
        redirect('menu/submenu');
    }
}

    public function deletesubmenu($id)
    {
        // Contoh implementasi untuk delete submenu
        $this->db->delete('user_sub_menu', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu deleted successfully!</div>');
        redirect('menu/submenu');
    }


    public function editmenu($id)
    {
        $data['title'] = 'Edit Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get_where('user_menu', ['id' => $id])->row_array();
    
        $this->form_validation->set_rules('menu', 'Menu', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/editmenu', $data); // Buat view untuk edit menu
            $this->load->view('templates/footer');
        } else {
            $data_update = [
                'menu' => $this->input->post('menu')
            ];
            $this->db->where('id', $id);
            $this->db->update('user_menu', $data_update);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu updated successfully!</div>');
            redirect('menu/index');
        }
    }
    
    public function deletemenu($id)
    {
        $this->db->delete('user_menu', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu deleted successfully!</div>');
        redirect('menu/index');
    }
  }    