<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Compare_produk extends MY_Controller {

  private $cart2;

public function __construct() {
    parent::__construct();
 	  $this->load->library('cart');
    $this->load->model('produk_model');

    if(!$this->session->userdata('compare')){
      $compare = array();
      $this->session->set_userdata('compare',$compare);
    }
    
 }


 function index(){
  $this->load_page('ecomerce/compare_produk');
 }

public function com($id){
 	$product = $this->produk_model->detail($id);
 	$produk = array(
               'id'      => $product->id_produk,
               'qty'  => 1,
               'price'   => $product->harga_produk,
               'name'    => $product->nama_produk,
               'image'   => $product->gbr_produk,
               'deskripsi'    => $product->deskripsi,
               'nama_toko'    => $product->nama_toko,
               'berat'    => $product->berat,
               'stok'    => $product->stok,
               'kota'         => $product->nama_kota,
               'id_user'      => $product->id_user,
            );
  $compare = $this->session->userdata('compare');
	$compare[$product->id_produk] = $produk;
  $this->session->set_userdata('compare',$compare);

  redirect('ecomerce/compare_produk');
  
 }


 public function delete($rowid){
  $compare = $this->session->userdata('compare');
 	unset($compare[$rowid]);
  $this->session->set_userdata('compare',$compare);
  
	$this->load_page('ecomerce/compare_produk');	
 }

 function update(){
 	$i=1;
 	foreach($this->cart2->contents() as $items){
 		$this->cart2->update(array(
      'rowid' => $items['rowid'], 
      'qty' => $_POST['qty'.$i]));
 		$i++;
 	}

  
 	$this->load_page('ecomerce/compare_produk');
  
 }
}
?>