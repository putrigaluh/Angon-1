<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class pesanan extends MY_Controller {

public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('transaksi_model');
    $this->load->model('detail_transaksi_model');
 }

 public function index(){
 	$this->lihat_pesanan();
 }

 private function lihat_pesanan(){
 	$data['daftar_transaksi'] = $this->transaksi_model->showTransaksi();
  //$this->load->view('manage/header');
   //$this->load->view('manage/sidebar');
	$this->manage_page('manage/lihat_pesanan', $data);

 }

 function update_data($id_det_trans) {
    $status = $this->input->post('order_status');

    $this->load->model('m_produk');
    $this->detail_transaksi_model->update_status_pemesanan($id_det_trans, $status);

    $data_detail = $this->detail_transaksi_model->get_detail();

    $jumlah_terkirim = 0;
    echo "<pre>";

    foreach($data_detail as $dt){
    var_dump($dt->status_kirim);
      if($dt->status_kirim == "Terkirim"){
        $jumlah_terkirim++;
      }
    }

    $data_detail_1 = $this->detail_transaksi_model->get_detail($id_det_trans);

    if ($jumlah_terkirim < count($data_detail)) { // lek wes terkirim sebagian
      $this->transaksi_model->update_status($data_detail_1->id_transaksi,'Proses');
    } else if ($jumlah_terkirim == count($data_detail)) { // lek wes terkirim kwabweh 
      $this->transaksi_model->update_status($data_detail_1->id_transaksi,'Terkirim');
    }
    
    $det_trans_produk = $this->m_produk->get_stok($id_det_trans);
    
    if($status == 'Terkirim'){
      $det_trans = $this->detail_transaksi_model->get_jumlahbeli($id_det_trans);
      $hasil = $det_trans_produk->stok - $det_trans->jumlah;
      $this->m_produk->update_stok($det_trans_produk->id_produk,$hasil);
    }
    redirect('manage/pesanan/detail_pesanan/'.$det_trans_produk->id_transaksi);
 }

function update_resi($id_det_trans) {
    $resi = $this->input->post('resi');

    $this->load->model('m_produk');
    $this->transaksi_model->update_resi($id_det_trans, $resi);
    
    $det_trans_produk = $this->m_produk->get_stok($id_det_trans);
    redirect('manage/pesanan/detail_pesanan/'.$det_trans_produk->id_transaksi);
 }


  public function detail_pesanan($id){
  $transaksi = $this->transaksi_model->showTransaksi_by_id($id);
  $details = $this->detail_transaksi_model->details($id);
  $this->load->vars('transaksi', $transaksi);
  $this->load->vars('details', $details);
  $this->manage_page('manage/detail_pesanan');
 }


 public function detail_notifikasi($id_transaksi){                      //notif
  $this->load->model('notifikasi_model');
  $detail_notifikasi = $this->notifikasi_model->select_detail_notif($id_transaksi);
  $this->load->vars('daftar_transaksi', $detail_notifikasi);
  $this->manage_page('manage/lihat_pesanan');
 }


}
 ?>