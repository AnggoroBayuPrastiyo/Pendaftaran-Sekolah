<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        // Load view for the dashboard
        $this->load->view('dashboard');
    }
}
?>
