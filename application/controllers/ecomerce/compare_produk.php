<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Compare_produk extends MY_Controller {

public function __construct() {
    parent::__construct();
 	$this->load->library('cart');
    $this->load->model('produk_model');
 }


 function index(){
  $this->load_page('ecomerce/compare_produk');
 }

public function com($id){
 	$product = $this->produk_model->detail($id);
 	$data = array(
               'id'      => $product->id_produk,
               'qty'  => 1,
               'price'   => $product->harga_produk,
               'name'    => $product->nama_produk,
               'image'   => $product->gbr_produk,
               'deskripsi'    => $product->deskripsi,
               'nama_toko'    => $product->nama_toko,
               'berat'    => $product->berat,
               'stok'    => $product->stok
            );
	$this->cart->insert($data);
  redirect('ecomerce/compare_produk');
  
 }

 public function delete($rowid){
 	$this->cart->update(array('rowid' => $rowid, 'qty' =>0));
  //if()
	$this->load_page('ecomerce/compare_produk');	
 }

 function update(){
 	$i=1;
 	foreach($this->cart->contents() as $items){
 		$this->cart->update(array(
      'rowid' => $items['rowid'], 
      'qty' => $_POST['qty'.$i]));
 		$i++;
 	}

  
 	$this->load_page('ecomerce/compare_produk');
  
 }
}
?>