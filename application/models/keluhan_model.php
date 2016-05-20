<?php

class Keluhan_Model extends CI_Model {

    public function tbh_keluhan_gbr($url){
        $insert_keluhan = array(
            'id_transaksi' => $this->input->post('id_transaksi'),
            'id_produk' => $this->input->post('id_produk'),
            'isi_keluhan' => $this->input->post('isi_keluhan'),
            'id_user' => $this->input->post('id_user'),
            'tgl_expired'   => Date('Y-m-d', strtotime("+1 days")),
        );
        $this->db->set('gbr_keluhan',$url);
        $this->db->insert('keluhan', $insert_keluhan);
        return $this->db->insert_id();
    }

    public function tbh_keluhan(){
        $insert_keluhan = array(
            'id_transaksi' => $this->input->post('id_transaksi'),
            'id_produk' => $this->input->post('id_produk'),
            'isi_keluhan' => $this->input->post('isi_keluhan'),
            'id_user' => $this->input->post('id_user'),
            'tgl_expired'   => Date('Y-m-d', strtotime("+1 days")),
        );
        $this->db->insert('keluhan', $insert_keluhan);
        return $this->db->insert_id();
    }

    public function select_keluhan() {
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('keluhan');
        $this->db->join('produk','keluhan.id_produk = produk.id_produk');
        $this->db->where('keluhan.id_user',$id_user);
        $query = $this->db->get();
        // die($this->db->last_query());
        return $query->result();
    }

    public function select_keluhan_by_id($id_keluhan) {
        $this->db->select('*');
        $this->db->from('keluhan');
        $this->db->join('transaksi','keluhan.id_transaksi = transaksi.id_transaksi');
        $this->db->join('produk','keluhan.id_produk = produk.id_produk');
        $this->db->join('user', 'keluhan.id_user = user.id_user');
        $this->db->where('keluhan.id_keluhan',$id_keluhan);
        $query = $this->db->get();
        return $query->row();
    }



    public function select_detnotif($id_keluhan){
        $this->db->join('produk', 'keluhan.id_produk = produk.id_produk');
        $this->db->join('user', 'produk.id_user = user.id_user');
        $this->db->where('id_keluhan', $id_keluhan);
        return $this->db->get('keluhan')->result();
    }


    public function select_keluhan_admin() {
        $this->db->select('*');
        $this->db->from('keluhan');
        $this->db->join('transaksi','keluhan.id_transaksi = transaksi.id_transaksi');
        $this->db->join('produk','keluhan.id_produk = produk.id_produk');
        $this->db->join('user', 'keluhan.id_user = user.id_user');
        // $this->db->where('keluhan.id_user',$id_user);
        $query = $this->db->get();
        return $query->result();
    }

    public function select_expired_keluhan(){
        $date = Date('Y-m-d');
        $this->db->join('produk', 'keluhan.id_produk = produk.id_produk');
        $this->db->join('user', 'keluhan.id_user = user.id_user');
        $this->db->where('tgl_expired <', $date);
        $this->db->where('tgl_expired !=', '0000-00-00');
        return $this->db->get('keluhan')->result();
    }

    public function dropdown_transaksi(){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('transaksi');
        $array = array('id_user' => $id_user, 'status !=' => 'Selesai');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function dropdown_produk($id_transaksi){
        $id_user = $this->session->userdata('id_user');
        $this->db->join('detail_transaksi', 'produk.id_produk = detail_transaksi.id_produk');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->where('transaksi.id_user', $id_user);
        $this->db->where('transaksi.id_transaksi',$id_transaksi);
        $query = $this->db->get('produk');
        return $query->result();
    }

    public function insert_balas_keluhan($id_keluhan) {
        
        $insert_balasan = array(
            'isi_balasan' => $this->input->post('isi_balasan'),
        );
        $this->db->where('id_keluhan', $id_keluhan);
        $this->db->update('keluhan', $insert_balasan);
        
      
        // $update = $this->db->update('keluhan', $insert_balasan);
        // return $update;
    }

       public  function tmpil_keluhan() {
        
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('keluhan');
        $this->db->join('transaksi','keluhan.id_transaksi = transaksi.id_transaksi');
        $this->db->join('detail_transaksi','transaksi.id_transaksi = detail_transaksi.id_transaksi');
        $this->db->join('produk','detail_transaksi.id_produk = produk.id_produk');
        $this->db->where('keluhan.id_user',$id_user);
        $query = $this->db->get();
        return $query->result();
    }

       function drop_transaksi(){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('transaksi');
        $array = array('id_user' => $id_user, 'status !=' => 'Selesai');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    function drop_produk(){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('detail_transaksi', 'produk.id_produk = detail_transaksi.id_produk');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->where('transaksi.id_user',$id_user);
        $query = $this->db->get();
        return $query->result();
    }

}
?>