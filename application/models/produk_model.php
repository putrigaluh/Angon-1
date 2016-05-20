<?php
class Produk_Model extends CI_Model {
  
public function show_produk(){
	 	$user=$this->session->userdata('kategori_user');

    		$sql="select * from produk where stok > 0";
    	
        return $this->db->query($sql)->result();
    }
    public function detail($id){
        $this->db->join('user', 'produk.id_user = user.id_user');
        $this->db->join('kota', 'user.id_kota = kota.id_kota');
        $this->db->where('id_produk',$id);
        return $this->db->get('produk')->row();
    }
    public function lihat_toko($id){
        $this->db->where('id_user',$id);
        return $this->db->get('produk')->result();
    }

    public function find($id){ //dipake notif juga
        $this->db->from('produk');
        $this->db->join('user','produk.id_user = user.id_user');
        $this->db->join('kota','user.id_kota = kota.id_kota');
     	$this->db->where ('id_produk', $id);
     	return $this->db->get()->row();
    }


    function pencarian(){
        $cari = $this->input->get('cari');
       // echo "hahaha";
       // $this->db->from('produk');
        
        $query = "select * from ".
            "(select id_produk,nama_produk,id_kategori_jenis, harga_produk, berat, stok, deskripsi, gbr_produk, nama_toko from produk ".
            "join kategori_produk on id_kategori_jenis = id_kategori_produk ".
            "join user on produk.id_user = user.id_user ".
            "where stok > 0 and ".
            "nama_produk like '%$cari%' or nama_toko like '%$cari%') xx ".
            "where ";
       
         $query .= "xx.id_kategori_jenis like 'P%' or xx.id_kategori_jenis like 'I%' ";
            
        
      return $this->db->query($query)->result();
        //die($this->db->last_query());
    }

    public function input_keluhan(){
            
    }

}
?>