<?php
class User_Model extends CI_Model {
    var $table = 'user';

    public $id_user;
    public $nama_user;
    public $kategori_user;
    public $alamat_user;    
    public $id_kota;
    public $username;
    public $password;

    function select_username($username){
        $this->db->where('username',$username); 
        return $this->db->count_all_results($this->table);
    }

    function registrasi() {
        $registrasi = array(
            'id_user' => mysql_real_escape_string($this->input->post('id_user')),
            'nama_user' => mysql_real_escape_string($this->input->post('nama')),
            'kategori_user' => mysql_real_escape_string($this->input->post('kategori')),
            'no_telp' => mysql_real_escape_string($this->input->post('notelp')),
            'nama_toko' => mysql_real_escape_string($this->input->post('toko')),
            'alamat_user' => mysql_real_escape_string($this->input->post('alamat')),
            'id_kota' => mysql_real_escape_string($this->input->post('kota')),
            'kodepos' => mysql_real_escape_string($this->input->post('kodepos')),
            'username' => mysql_real_escape_string($this->input->post('username')),
            'password' => mysql_real_escape_string($this->input->post('password'))
        );

        // $username = array($this->db->query("select username from user"));
            
           // $i=0;
         //if($registrasi['username'] == $username[$i]){

        // }else{
           $insert = $this->db->insert('user', $registrasi);
            return $insert;
        // }
        
    

    }

  function set_session(){
        $this->session->set_userdata(array(
            'id_user' => $this->details->id_user,
            'nama_user' => $this->details->nama_user,
            'kategori_user' => $this->details->kategori_user,
            'username' => $this->details->username,
            'is_logged_in' => TRUE
            ));
    }
  
    function validate_user($username, $password) {
        $this->db->from($this->table);
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get()->result(); 
        if (is_array($result) && count($result) == 1) {
            $this->details = $result[0];
            $this->session->set_userdata('is_admin', TRUE);
            $this->set_session();
            return TRUE;
        }
        return FALSE;
    }

 

    //fungsi untuk menampilkan semua data user
    function index() {
        $sql="SELECT id_user, nama_user, kategori_user, alamat_user, nama_kota, username, password FROM user u, kota k
            WHERE  u.id_kota=k.id_kota ORDER BY id_user ASC ";
        $query = $this->db->get('user');
        return $this->db->query($sql)->result();
    }

    //fungsi untuk menampilkan data yang akan diedit
    function edit($id) {
        $sql = "SELECT id_user, nama_user, kategori_user, alamat_user, u.id_kota, nama_kota, username, password FROM user u, kota k
            WHERE u.id_kota=k.id_kota AND id_user = '$id' ORDER BY id_user ASC";
        $query = $this->db->get('user');
        return $this->db->query($sql)->result();
    }

    //fungsi yang digunakan untuk query update
    function prosesedit() {
        $update_user = array(
            'id_user' => $this->input->post('id_user'),
            'nama_user' => $this->input->post('nama_user'),
            'kategori_user' => $this->input->post('kategori_user'),
            'alamat_user' => $this->input->post('alamat_user'),
            'id_kota' => $this->input->post('id_kota'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        $id = $this->input->post('id_user');
        $this->db->where('id_user', $id);
        $this->db->update('user', $update_user);
    }

    //fungsi yang digunakan untuk query delete
    function delete($id) {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    //fungsi untuk select data user buat checkout
    public function data_pengirim(){
        $id = $this->session->userdata('id_user');
        $this->db->from($this->table);
        $this->db->join('kota','user.id_kota');
        $this->db->join('provinsi','kota.id_kota');
        $this->db->where('id_user',$id);
        return $this->db->get()->row();
    }

}
?>