<?php
class Seleksi_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function save_seleksi($data) {
        return $this->db->insert('seleksi', $data);
    }
}
?>