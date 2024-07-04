// application/models/Registration_model.php

class Registration_model extends CI_Model {

public function __construct() {
parent::__construct();
$this->load->database(); // Load library database
}

// Fungsi untuk mengambil semua data registrasi dari database
public function get_all_registrations() {
$query = $this->db->get('registrations'); // 'registrations' adalah nama tabel registrasi di database Anda
return $query->result_array(); // Mengembalikan hasil query dalam bentuk array
}

// Fungsi untuk menyimpan data registrasi ke dalam database
public function save_registration($data) {
$this->db->insert('registrations', $data); // 'registrations' adalah nama tabel registrasi di database Anda
return $this->db->insert_id(); // Mengembalikan ID dari baris yang baru saja dimasukkan
}

// Fungsi untuk mengambil detail registrasi berdasarkan ID
public function get_registration_by_id($id) {
$query = $this->db->get_where('registrations', array('id' => $id));
return $query->row_array();
}

// Fungsi untuk mengupdate data registrasi berdasarkan ID
public function update_registration($id, $data) {
$this->db->where('id', $id);
$this->db->update('registrations', $data);
}

// Fungsi untuk menghapus data registrasi berdasarkan ID
public function delete_registration($id) {
$this->db->delete('registrations', array('id' => $id));
}

}