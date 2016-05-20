<?php
class Admin extends CI_Model {
    var $table = 'admin';
    var $details;

    function validate_user($username, $password) {
        $this->db->from($this->table);
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get()->result(); 
        if (is_array($result) && count($result) == 1) {
            $this->details = $result[0];
            $this->session->set_userdata('is_admin', TRUE);
            $this->session->set_userdata('role', $this->details->role);
            return TRUE;
        }
        return FALSE;
    }
}
?>