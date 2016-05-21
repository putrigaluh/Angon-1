<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends MY_Controller {	//notif

	private $last_id_trans ='';
	private $last_id_detail_trans = '';

public function __construct() {
    parent::__construct();
 	$this->load->library('cart');
    $this->load->model('transaksi_model');
    $this->load->model('user_model');
    $this->load->model('detail_transaksi_model');
     $this->load->model('m_produk');
    
 }
 public function index(){
 	 $this->load->model('kota_model');
 	 $this->load->model('provinsi_model');
 	$data['daftar_kota'] = $this->kota_model->get_data_kota();
 	$data['daftar_provinsi'] = $this->provinsi_model->get_data_provinsi();
 	$data['data_pengirim'] = $this->user_model->data_pengirim();
 	
 	$this->load_page('ecomerce/checkout', $data);
 	
 }
 
public function check(){
 	if($this->input->post('submit')){
 		
 		$this->last_id_trans = $this->transaksi_model->insert();
 		
 		$this->load->model('produk_model');
 		foreach($this->cart->contents() as $items){
			$this->last_id_detail_trans = $this->detail_transaksi_model->simpan_pesanan($this->last_id_trans, $items);
			$produk = $this->produk_model->find($items['id']); //ngefind produk sing idne iki
			}
		$this->cart->destroy();

		$det_trans_produk = $this->m_produk->get_stok($this->last_id_detail_trans);
		$det_trans = $this->detail_transaksi_model->get_jumlahbeli($this->last_id_detail_trans);
		$hasil = $det_trans_produk->stok - $det_trans->jumlah;
      	$this->m_produk->update_stok($det_trans_produk->id_produk,$hasil);

 		if($this->last_id_trans){	

 			// $notif_admin = array(								//notif
 			// 	'isi_pesan'		=> 'ada 1 pembelian baru',		
 			// 	'waktu'			=> date('Y-m-d'),						
 			// 	'link'			=> 'manage/pesanan/detail_pesanan/'.$this->last_id_trans					
 			// 	);												

 			// $this->buat_notifikasi_admin($notif_admin);	

 			$this->summary();

 		} else {
 			echo "error123";
 		}
	}
	
 }

 public function summary(){

 	$sum['sum']= $this->transaksi_model->pesanan_terakhir($this->last_id_trans, $this->last_id_detail_trans);
 	$sum['det']= $this->transaksi_model->detail_terakhir($this->last_id_trans, $this->last_id_detail_trans);
 	$this->load_page('ecomerce/summary',$sum);
 	
 }
}
?>