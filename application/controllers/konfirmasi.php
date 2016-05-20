<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class konfirmasi extends MY_Controller {

public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('transaksi_model');
    
    
 }

 public function index(){
    	
      $this->load_page('ecomerce/pesanan_saya');
      
 }

 public function histori_pemesanan(){
 	$data['pesanan_pembeli'] = $this->transaksi_model->pesanan_pembeli();
	
	$this->load_page('ecomerce/histori_pesanan', $data);
  
 }

 public function konfirmasi_penerimaan(){
	   
     if($this->input->post('submit')){
      $id=$this->input->post("id");
      $this->transaksi_model->update_status_penerimaan($id);
      $this->transaksi_model->tambah_saldo($id);
      $this->session->set_flashdata('message', 'Terimakasih telah membeli di Angon');
      redirect('ecomerce/konfirmasi');
    }else{
      
      $this->load_page('ecomerce/konfirmasi_penerimaan');
      
    }
 }

  function input_keluhan(){
  $data['kel'] = $this->transaksi_model->drop_transaksi();
  $data['pro'] = $this->transaksi_model->drop_produk();
  $this->load_page('ecomerce/input_keluhan', $data);
  }


 public function tambah_keluhan(){
    $url = $this->do_upload();
    if($url){
    $this->load->model('transaksi_model');
    $this->transaksi_model->tbh_keluhan_gbr($url);
    }
    else{
    $this->transaksi_model->tbh_keluhan();
    }
    redirect('ecomerce/konfirmasi/lihat_keluhan');

 }
 


private function do_upload(){
  $type = explode('.', $_FILES["pic"]["name"]);
   $type = $type[count($type)-1];
   $url = "./uploads/".uniqid(rand()).'.'.$type;
   if(in_array($type, array("jpg","jpeg","gif","png","JPG")))
    if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
        if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
            return $url;
        return "";
}

public function lihat_keluhan()
 {
    $keluhan = $this->transaksi_model->select_keluhan();
    $this->load->vars('k', $keluhan);
    $this->load->view('ecomerce/lihat_keluhan');
 }
}
 ?>