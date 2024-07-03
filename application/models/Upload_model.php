<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function save_file_info($data) {
        return $this->db->insert('pendaftaran', $data);
    }
}
?>
