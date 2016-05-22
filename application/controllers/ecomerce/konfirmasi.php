<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class konfirmasi extends MY_Controller {

public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('detail_transaksi_model');
    $this->load->model('transaksi_model');
 }

 public function index(){
 $this->lihat_status();
 }

 public function lihat_status(){
       $data['transaksi']=$this->transaksi_model->get_id_transaksi();
       //die($this->db->last_query());
       $this->load_page('ecomerce/pesanan_saya',$data);
 }

 public function histori_pemesanan(){
 	$data['pesanan_pembeli'] = $this->detail_transaksi_model->pesanan_pembeli();
	
	$this->load_page('ecomerce/histori_pesanan', $data);
  
 }

 public function konfirmasi_penerimaan(){
	   
     if($this->input->post('submit')){
      $id_det_transaksi = $this->input->post("id_detail_transaksi");

      $this->detail_transaksi_model->update_status_penerimaan($id_det_transaksi);

      $data_detail = $this->detail_transaksi_model->get_detail_beli();

      $jumlah_diterima = 0;
      

      foreach($data_detail as $dt){
      
        if($dt->status_kirim == "Diterima"){
          $jumlah_diterima++;
        }
      }

      $data_detail_1 = $this->detail_transaksi_model->get_detail_beli($id_det_transaksi);

      if  ($jumlah_diterima == count($data_detail)) { // lek wes diterima kwabweh 
        $this->transaksi_model->update_status($data_detail_1->id_transaksi,'Selesai');
      }


      $this->detail_transaksi_model->tambah_saldo($id);
      $this->session->set_flashdata('message', 'Terimakasih telah membeli di Angon');
      redirect('ecomerce/konfirmasi/konfirmasi_penerimaan');
    }else{
      $data['transaksi'] = $this->transaksi_model->get_id_transaksi_terkirim();

      $this->load_page('ecomerce/konfirmasi_penerimaan', $data);
      
    }
 }

 function dropdown_produk(){
    $id_transaksi = $this->input->post("id_detail_trans");
    $produk = $this->detail_transaksi_model->dropdown_produk($id_transaksi);
      echo '<option selected disabled>Pilih</option>';
    foreach ($produk as $p) {
      echo '<option value="'.$p->id_det_transaksi.'">'.$p->nama_produk.'</option>';
    }
  }

 function update_status_penerimaan_by_id($id_detail){
    $this->detail_transaksi_model->update_status_penerimaan($id_detail);
    redirect('ecomerce/konfirmasi/histori_pemesanan');
 }
 public function select_expired(){
     $expired = $this->detail_transaksi_model->select_expired();
     // die($this->db->last_query());
     $this->load->vars('e', $expired);
     $this->admin_page('admin/lihat_expired_penerimaan');

 }

 public function update_status($id_det_transaksi) {
    $status = $this->input->post('req_status');
    $this->detail_transaksi_model->update_status_penerimaan($id_det_transaksi, $status);
    $this->detail_transaksi_model->tambah_saldo('', $id_det_transaksi);
    redirect('ecomerce/konfirmasi/select_expired');
 }

}
 ?>