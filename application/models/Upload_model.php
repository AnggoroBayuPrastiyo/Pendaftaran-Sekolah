<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model {

    public function save_file_info($data) {
        return $this->db->insert('registrations', $data);
    }
}
?>