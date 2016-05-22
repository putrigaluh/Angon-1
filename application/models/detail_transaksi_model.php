<?php

class Detail_Transaksi_Model extends CI_Model {
    var $table = 'detail_transaksi';
    var $field = 'status';
   
    
    public function details($id){
          
        $id_user =  $this->session->userdata('id_user');
       
        $sql = "select * 
        from detail_transaksi dt , transaksi t, produk p , user u 
        where dt.id_transaksi = t.id_transaksi and dt.id_produk = p.id_produk and t.id_user = u.id_user and p.id_user ='".$id_user."' 
        and t.id_transaksi='".$id."'";

        return $this->db->query($sql)->result();
    }

    public function detail_for_admin($id){
          
        $sql = "select * 
        from detail_transaksi dt , transaksi t, produk p , user u 
        where dt.id_transaksi = t.id_transaksi and dt.id_produk = p.id_produk and t.id_user = u.id_user 
        and t.id_transaksi='".$id."'";

        return $this->db->query($sql)->result();
    }


    public function pesanan(){
          
          $id_user =  $this->session->userdata('id_user');
       
        $sql = "select t.id_transaksi, t.tgl_transaksi, t.alamat_pengiriman, t.status, t.id_user, dt.id_produk, p.nama_produk, u.nama_user, t.no_telp 
        from detail_transaksi dt , transaksi t, produk p , user u 
        where dt.id_transaksi = t.id_transaksi and dt.id_produk = p.id_produk and t.id_user = u.id_user and p.id_user ='".$id_user."' 
        ";

        return $this->db->query($sql);
    }

      public function get_jumlahbeli($id_det_trans){
        $this->db->select('jumlah');
        $this->db->from('detail_transaksi');
        $this->db->where('id_det_transaksi',$id_det_trans);
        return $this->db->get()->row();


    }

    function update_status_pemesanan($id, $status) {
        $data = array (
            'status_kirim' => $status,
        );
        $this->db->where('id_det_transaksi', $id);
        $this->db->update('detail_transaksi', $data);
    }
    
    function update_status_penerimaan($id_det_transaksi) {
        $data = array (
            'status_kirim' => "Diterima",
        );
        $this->db->where('id_det_transaksi', $id_det_transaksi);
        $this->db->update('detail_transaksi', $data);
    }
    

    public function tambah_saldo($id_transaksi = '', $id_det_transaksi = ''){

        $this->db->select('*');
        $this->db->from('detail_transaksi');
        $this->db->join('produk', 'detail_transaksi.id_produk = produk.id_produk');
        if ($id_transaksi != ''){
        $this->db->where('detail_transaksi.id_transaksi', $id_transaksi);
        }
        if ($id_det_transaksi != ''){
        $this->db->where('detail_transaksi.id_det_transaksi', $id_det_transaksi);
        }
        $result = $this->db->get()->result();
      
        foreach ($result as $r) {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('id_user', $r->id_user);
            $result_user = $this->db->get()->row();
            $saldo = $result_user->saldo+($r->harga_produk*$r->jumlah);
            $this->db->where('id_user', $r->id_user);
            $this->db->update('user', array('saldo' => $saldo));
        }
       
    }

       
    function simpan_pesanan($id_trans, $items)
    {
        $query = "insert into detail_transaksi (id_transaksi, id_produk,jumlah,status_kirim) values('".$id_trans."','".$items['id']."','".$items['qty']."', 'Pending')";
        $this->db->query($query);

        return $this->db->insert_id();
    }

    function lihat_semua_pesanan()  {           //untuk admin super
        $this->db->from('detail_transaksi');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->join('produk', 'detail_transaksi.id_produk = produk.id_produk');
        $this->db->join('user', 'produk.id_user = user.id_user');
        
        $this->db->order_by('transaksi.id_transaksi DESC');

        $query = $this->db->get();
        return $query->result();
    }


    function detail_pembelian($id_transaksi){
        $id_user =  $this->session->userdata('id_user');

        $this->db->from('detail_transaksi');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->join('produk', 'detail_transaksi.id_produk = produk.id_produk');
        $this->db->join('user', 'produk.id_user = user.id_user');
        $this->db->where('transaksi.id_user', $id_user);
        $this->db->where('detail_transaksi.id_transaksi', $id_transaksi);
        
        $query = $this->db->get();
        return $query->result();
    }

    function pesanan_terakhir($id_trans, $id_detail_trans){ //untuk ringkasan pembelian
        $id_user =  $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('detail_transaksi');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->where('transaksi.id_user = '. $id_user. ' AND transaksi.id_transaksi = '. $id_trans, null, FALSE);
        
        $query = $this->db->get();
        // die($this->db->last_query());
        return $query->row();
    }

    function get_id_detail_trans(){ // untuk konfirmasi penerimaan
        $id_user =  $this->session->userdata('id_user');
        $this->db->from('detail_transaksi');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->join('produk', 'detail_transaksi.id_produk = produk.id_produk');
        $this->db->join('user','produk.id_user = user.id_user');
        $this->db->where('transaksi.id_user',$id_user);
        $this->db->where('status_kirim','Terkirim');
        return $this->db->get()->result();

    }

    function get_detail($id_det_transaksi = ''){ //select status pesanan dari penjual
        $id_user =  $this->session->userdata('id_user');
        $this->db->from('detail_transaksi');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->join('produk', 'detail_transaksi.id_produk = produk.id_produk');
        $this->db->where('produk.id_user',$id_user);
        if($id_det_transaksi != ''){
            $this->db->where('detail_transaksi.id_det_transaksi',$id_det_transaksi);
            return $this->db->get()->row();
        } else {
            return $this->db->get()->result();
        }
    }

    function get_detail_beli($id_det_transaksi = ''){ //select status pesanan dari pembeli
        $id_user =  $this->session->userdata('id_user');
        $this->db->from('detail_transaksi');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        //$this->db->join('produk', 'detail_transaksi.id_produk = produk.id_produk');
        $this->db->where('transaksi.id_user', $id_user);
        //$this->db->and('detail_transaksi.id_transaksi',$id_transaksi);
        if($id_det_transaksi != ''){
            $this->db->where('detail_transaksi.id_det_transaksi',$id_det_transaksi);
            return $this->db->get()->row();
        } else {
            return $this->db->get()->result();
        }
    }

    public function select_expired(){
        $date = Date('Y-m-d');
        $this->db->where('tgl_expired <', $date);
        $this->db->where('tgl_expired !=', '0000-00-00');
        // $this->db->where('status_kirim', 'Terkirim');
        return $this->db->get('detail_transaksi')->result();

    }
    
}

?>