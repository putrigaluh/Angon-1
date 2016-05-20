<?php
	class Konfirmasi_model extends CI_Model {
	var $table = 'konfirmasi_pembayaran';
	var $details;
	 
	
	public function insert_pembayaran($datainput){
		$insert = $this->db->insert($this->table, $datainput); 
   		return $insert;
	}

	public function select_pembayaran($tgl="", $bank="", $status=""){
    	$this->db->select('*');
    	$this->db->from('konfirmasi_pembayaran');
    	$this->db->join('rekening', 'konfirmasi_pembayaran.id_rekening = rekening.id_rekening');
    	$this->db->join('transaksi', 'konfirmasi_pembayaran.id_transaksi = transaksi.id_transaksi');
        $this->db->order_by('tgl_transaksi', 'desc');   
        if ($tgl != "") $this->db->where('tgl', $tgl);
        if ($bank != "") $this->db->where('nama_bank', $bank);
        if ($status != "") $this->db->where('status', $status);
        else {
            $this->db->where('status','Belum Verifikasi');     
            $this->db->or_where('status','Terbayar');
        }
    	//$this->db->where('rekening.id_user', $this->session->userdata('id_user'));
		return $this->db->get()->result();

    }

    public function update_status($id, $status){
    	$update_status = array('status' => $status);
	    $this->db->where('id_transaksi', $id);
	    $this->db->update('transaksi', $update_status);
    }
    
    public function select_detnotif_produk($id_transaksi){
    	$this->db->join('produk', 'detail_transaksi.id_produk = produk.id_produk');
    	$this->db->where('id_transaksi', $id_transaksi);
		return $this->db->get('detail_transaksi')->result();
    }

    function get_pembayaran(){
        $id_user=$this->session->userdata('id_user');
        $this->db->from('konfirmasi_pembayaran');
        $this->db->join('transaksi', 'konfirmasi_pembayaran.id_transaksi = transaksi.id_transaksi');
        $this->db->where('id_user',$id_user);
        return $this->db->get()->row();
    }

}
?>