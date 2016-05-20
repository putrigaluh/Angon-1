<?php

class kategori_model extends CI_Model {


    function kategori(){
        //$user=$this->session->userdata('kategori_user');
        // if ($user == 'Peternak'){
        //     $query = $this->db->query("select * from kategori_produk where id_kategori_produk like 'I%'");
        // }else if($user == 'Pengguna Hasil Ternak'){
        //     $query = $this->db->query("select * from kategori_produk where id_kategori_produk like 'P%'");
        // }else{
        //     $query = $this->db->query("select * from kategori_produk where id_kategori_produk like 'I%'");
        // }
        $this->db->like('id_kategori_produk','I');
        $query = $this->db->get('kategori_produk');
        return $query->result();
    }
 
    function drop(){
        $this->db->like('id_kategori_produk','P');
        $query = $this->db->get('kategori_produk');
        return $query->result();
    }

    public function record_count($kat) {
        $this->db->where('id_kategori_jenis',$kat);
        $this->db->from('produk');
        $hasil =  $this->db->count_all_results();
        return $hasil;
    }

    public function cari_kategori($kat, $limit, $offset){
        $this->db->limit($limit, $offset);
     	$this->db->where('id_kategori_jenis',$kat);
        $this->db->where('stok > 0');
        $query = $this->db->get("produk");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    public function drop_kategori(){
        $user=$this->session->userdata('kategori_user');

        if($user == 'Peternak'){
            $this->db->select('*');
            $this->db->from('kategori_produk');
            $this->db->like('id_kategori_produk','P');
        }
        else{
            $this->db->select('*');
            $this->db->from('kategori_produk');
            $this->db->like('id_kategori_produk','I');
        }
        $query = $this->db->get();
        return $query->result();
    }
}
?>