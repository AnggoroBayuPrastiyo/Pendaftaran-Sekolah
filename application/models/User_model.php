<?php

class User_model extends CI_Model {
    public function get_user($user_id) {
        $this->db->where('id', $user_id);
        return $this->db->get('user')->row();
    }

    public function mark_result_as_seen($user_id) {
        $this->db->where('id', $user_id);
        $this->db->update('user', array('has_seen_result' => 1));
    }
}
