<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller {

    public function index()
    {
        // Load view for the subjects page
        $this->load->view('subjects');
    }
}
?>;