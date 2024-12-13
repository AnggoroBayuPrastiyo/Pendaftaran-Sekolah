<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_model extends CI_Model {
    public function get_all_pengumuman() {
        return $this->db->get('pengumuman')->result_array();
    }

    public function add_pengumuman($data) {
        return $this->db->insert('pengumuman', $data);
    }

    public function get_pengumuman($id) {
        return $this->db->get_where('pengumuman', ['id' => $id])->row_array();
    }

    public function update_pengumuman($id, $data) {
        return $this->db->where('id', $id)->update('pengumuman', $data);
    }

    public function delete_pengumuman($id) {
        return $this->db->where('id', $id)->delete('pengumuman');
    }
}