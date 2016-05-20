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
      $id_det_transaksi=$this->input->post("id_detail_trans");
      $this->detail_transaksi_model->update_status_penerimaan($id_det_transaksi);
      $this->detail_transaksi_model->tambah_saldo($id);
      $this->session->set_flashdata('message', 'Terimakasih telah membeli di Angon');
      redirect('ecomerce/konfirmasi/konfirmasi_penerimaan');
    }else{
      $data['id_detail_transaksi'] = $this->detail_transaksi_model->get_id_detail_trans();

      $this->load_page('ecomerce/konfirmasi_penerimaan', $data);
      
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