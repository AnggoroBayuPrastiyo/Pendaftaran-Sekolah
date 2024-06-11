<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

    public function index()
    {
        // Load view for the Pengumuman
        $this->load->view('pengumuman');
    }
}
?>;