<?php

class User_model extends CI_Model {
    public function get_user($user_id) {
        $this->db->where('id', $user_id);
        return $this->db->get('users')->row();
    }

    public function mark_result_as_seen($user_id) {
        $this->db->where('id', $user_id);
        $this->db->update('users', array('has_seen_result' => 1));
    }
}
