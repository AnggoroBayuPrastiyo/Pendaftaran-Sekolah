<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calon_siswa_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_all_siswa() {
        $query = $this->db->get('calon_siswa');
        return $query->result_array();
    }

    public function get_siswa_by_id($id) {
        $query = $this->db->get_where('calon_siswa', array('id' => $id));
        return $query->row_array();
    }

    public function insert_siswa($data) {
        return $this->db->insert('calon_siswa', $data);
    }

    public function update_siswa($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('calon_siswa', $data);
    }

    public function delete_siswa($id) {
        $this->db->where('id', $id);
        return $this->db->delete('calon_siswa');
    }

    public function get_sorted_siswa() {
        $this->db->order_by('nilai', 'DESC');
        $query = $this->db->get('calon_siswa');
        return $query->result_array();
    }
}
?>
