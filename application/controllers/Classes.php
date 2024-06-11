<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends CI_Controller {

    public function index()
    {
        // Load view for the classes page
        $this->load->view('classes');
    }
}
?>;