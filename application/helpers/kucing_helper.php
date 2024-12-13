<?php 

function is_logged_in()
{
    // Mengambil instance dari MNPRT
    $MNPRT = get_instance();
    
    // Periksa apakah sesi email ada
    if (!$MNPRT->session->userdata('email')) {
        redirect('auth');
    } 
    else {
        // Mendapatkan role_id dari session
        $role_id = $MNPRT->session->userdata('role_id');
        
        // Mendapatkan menu saat ini
        $menu = $MNPRT->uri->segment(1);

        // Mendapatkan ID menu dari tabel user_menu
        $queryMenu = $MNPRT->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];
        
        // Memeriksa akses user berdasarkan role_id dan menu_id
        $userAccess = $MNPRT->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        // Jika akses tidak ditemukan, redirect ke halaman blocked
        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}
function kambing_jantan($role_id, $menu_id)
{
    $MNPRT = get_instance();
    
    // Debugging: Cetak nilai $role_id dan $menu_id
    // echo "Role ID: $role_id, Menu ID: $menu_id<br>";
    
    // Memeriksa akses user berdasarkan role_id dan menu_id
    $MNPRT->db->where('role_id', $role_id);
    $MNPRT->db->where('menu_id', $menu_id);
    $result = $MNPRT->db->get('user_access_menu');
    
    // Debugging: Cetak query SQL yang dieksekusi
    // echo "SQL Query: " . $MNPRT->db->last_query() . "<br>";
    
    if ($result->num_rows() > 0) {
        return 'checked="checked"';
    } 
}