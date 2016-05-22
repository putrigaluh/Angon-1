<?php

class Transaksi_Model extends CI_Model {
    var $table = 'transaksi';
    var $field = 'status';
   
    
    public function showTransaksi(){
         
        //$sql="select id_transaksi, tgl_transaksi, nama_user, alamat_pengiriman, status 
         //from transaksi t, user u where t.id_user = u.id_user ORDER BY id_transaksi DESC ";
    
      $id_user =  $this->session->userdata('id_user');   
        
        $sql = "select distinct t.id_transaksi, t.tgl_transaksi, t.alamat_pengiriman, t.status, t.id_user, dt.id_produk , u.nama_user 
        from detail_transaksi dt , transaksi t, produk p , user u 
        where dt.id_transaksi = t.id_transaksi and dt.id_produk = p.id_produk and t.id_user = u.id_user and p.id_user ='".$id_user."' 
        order by t.tgl_transaksi DESC";

        return $this->db->query($sql)->result();
    }

    public function showTransaksi_by_id($id_transaksi){
         
        
      $id_user =  $this->session->userdata('id_user');   
        
        $sql = "select distinct *  
        from detail_transaksi dt , transaksi t, produk p , user u, kota 
        where dt.id_transaksi = t.id_transaksi 
        and dt.id_produk = p.id_produk 
        and t.id_user = u.id_user 
        and u.id_kota = kota.id_kota 
        and p.id_user ='".$id_user."' 
        and t.id_transaksi = '".$id_transaksi."'";

        return $this->db->query($sql)->row();
    }
    
    public function transaksi_by_id($id_transaksi){
         
        $sql = "select distinct *  
        from detail_transaksi dt , transaksi t, produk p , user u, kota 
        where dt.id_transaksi = t.id_transaksi 
        and dt.id_produk = p.id_produk 
        and t.id_user = u.id_user 
        and u.id_kota = kota.id_kota 
        
        and t.id_transaksi = '".$id_transaksi."'";

        return $this->db->query($sql)->row();
    }

    
    public function pesanan(){
          
          $id_user =  $this->session->userdata('id_user');
       
        $sql = "select t.id_transaksi, t.tgl_transaksi, t.alamat_pengiriman, t.status, t.id_user, dt.id_produk, p.nama_produk, u.nama_user, t.no_telp 
        from detail_transaksi dt , transaksi t, produk p , user u 
        where dt.id_transaksi = t.id_transaksi and dt.id_produk = p.id_produk and t.id_user = u.id_user and p.id_user ='".$id_user."' 
        ";

        return $this->db->query($sql);
    }

    
    public function tambah_saldo($id_transaksi){
        $this->db->select('*');
        $this->db->from('detail_transaksi');
        $this->db->join('produk', 'detail_transaksi.id_produk = produk.id_produk');
        $this->db->where('detail_transaksi.id_transaksi', $id_transaksi);
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

    // function update_status_pembayaran($id) {
    //     $data = array (
    //         'status' => "Terbayar",

    //     );
    //     $this->db->where('id_transaksi', $id);
    //     $this->db->update('transaksi', $data);
    // }

    public function insert(){
    

        $tgl=date('Y-m-d');
        //$status ='Pending';
        $data = array(

            'id_transaksi' => $this->input->post('id_transaksi'),
            'id_user' => $this->session->userdata('id_user'),
            'nama_pengiriman' => $this->input->post('nama'),
            'toko_pengiriman' => $this->input->post('toko'),
            'alamat_pengiriman' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('notelp'),
            'id_kota' => $this->input->post('kota'),
            'total_bayar' => $this->input->post('total_bayar'),
            'kodepos' => $this->input->post('kodepos'),
             'status' => 'Pending'
            );
        
            $this->db->set('tgl_transaksi', 'NOW()', FALSE);
           
        $this->db->insert('transaksi', $data); 
        
        return $this->db->insert_id();

    }
    

    function pesanan_terakhir($id_trans, $id_detail_trans){
        $id_user =  $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('detail_transaksi');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->where('transaksi.id_user = '. $id_user. ' AND transaksi.id_transaksi = '. $id_trans, null, FALSE);
        
        $query = $this->db->get();
        // die($this->db->last_query());
        return $query->row();
    }

    function detail_terakhir($id_trans, $id_detail_trans){
        $id_user =  $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('detail_transaksi');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->join('produk', 'detail_transaksi.id_produk = produk.id_produk');
        $this->db->where('transaksi.id_user = '. $id_user. ' AND transaksi.id_transaksi = '. $id_trans, null, FALSE);
        
        $query = $this->db->get();
        // die($this->db->last_query());
        return $query->result();
    }

    function get_id_transaksi(){

        $id_user =  $this->session->userdata('id_user');
        $this->db->distinct();
        $this->db->from('transaksi');
        $this->db->where('id_user',$id_user);
        $this->db->order_by('tgl_transaksi DESC');
        return $this->db->get()->result();

    }
    function get_id_transaksi_terkirim(){

        $id_user =  $this->session->userdata('id_user');
        $this->db->distinct();
        $this->db->from('transaksi');
        $this->db->where('id_user',$id_user);
        $this->db->where('status','Proses');
        $this->db->order_by('tgl_transaksi DESC');
        return $this->db->get()->result();

    }
    
    function get_id_transaksi_pending(){
        $id_user =  $this->session->userdata('id_user');
        $this->db->from('transaksi');
        $this->db->where('id_user',$id_user);
        $this->db->where('status','Pending');
        return $this->db->get()->result();

    }
    function get_status_transaksi($id_trans){
        $id_user =  $this->session->userdata('id_user');
        $this->db->from('transaksi');
        $this->db->where('id_user',$id_user);
        $this->db->where('id_transaksi',$id_trans);
        return $this->db->get()->row()->status;
    }
    public function update_status($id, $status){
        $update_status = array('status' => $status);
        $this->db->where('id_transaksi', $id);
        $this->db->update('transaksi', $update_status);
    }

	function update_resi($id, $resi) {
        $data = array (
            'no_resi'       => $resi,
            'tgl_expired'   => Date('Y-m-d', strtotime("+3 days"))
        );
        $this->db->where('id_det_transaksi', $id);
        $this->db->update('detail_transaksi', $data);
    }
    function pesanan_pembeli(){ //untuk histori pemesanan
        $id_user =  $this->session->userdata('id_user');
        $this->db->where('transaksi.id_user', $id_user);
        $this->db->order_by('transaksi.id_transaksi DESC');
        return $this->db->get('transaksi')->result();
        
    }
}

?>