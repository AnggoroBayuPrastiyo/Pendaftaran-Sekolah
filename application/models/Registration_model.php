<?php
class Registration_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function save_registration($data) {
        return $this->db->insert('registrations', $data);
    }
}
?>