<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ShoppingCart extends MY_Controller {

  public function __construct() {
      parent::__construct();
    $this->load->library('cart');
      $this->load->model('produk_model');
      $this->load->model('kota_model');
  }


  function index(){
  //$data['daftar_kota']=$this->kota_model->get_data_kota();
    $this->load_page('ecomerce/cart');
  }

  public function buy($id){
    $product = $this->produk_model->find($id);
    $data = array(
               'id'           => $product->id_produk,
               'qty'          => 1,
               'price'        => $product->harga_produk,
               'name'         => $product->nama_produk,
               'image'        => $product->gbr_produk,
               'deskripsi'    => $product->deskripsi,
               'stok'         => $product->stok,
               'berat'        => $product->berat,
               'id_user'      => $product->id_user,
               'nama_toko'    => $product->nama_toko,
               'kota'         => $product->nama_kota
            );

    $this->cart->insert($data);
  
    redirect('ecomerce/shoppingcart');
  
  }

  public function delete($rowid){
    $this->cart->update(array('rowid' => $rowid, 'qty' =>0));
  //if()
    $this->load_page('ecomerce/cart');  
  }

  function update(){
    $rowid  = $this->input->post('rowid');
    $qty    = ($this->input->post('qty') == '') ? 0 : $this->input->post('qty');

    var_dump($this->input->post());

    foreach($this->cart->contents() as $item){
      if ($item['rowid'] == $rowid && $qty > 0) {
        
        $this->cart->update(
          array(
            'rowid' => $rowid,
            'qty' => $qty
            )
        );
      }
    }
    
    // $this->load_page('ecomerce/cart');
  }

 public function get_cost() {
    //$data['produk_user']=$this->produk_model->find();
    $this->load->library('REST_Ongkir.php');
    
    $rest = new REST_Ongkir(array(
        'server' => 'http://api.ongkir.info/'
    ));

    for ($i = 0; $i < count($this->input->post('kota_asal')); $i++) {

      $result = $rest->post('cost/find', array(
          'from'  =>  $this->input->post('kota_asal')[$i], 
          'to'    => $this->kota_model->get_data_kota_by_id($this->input->post('kota'))->nama_kota,
          'weight'  => $this->input->post('berat')[$i], 
          'courier' => 'jne',
          'API-Key'   => '53f9a309a0f9994922ef59be3b3ccd2b'
      ));

      try
      {
          $status = $result['status'];
          
          // Handling the data
          if ($status->code == 0)
          {
              $prices = $result['price'];
              $city = $result['city'];
              
      // echo "<pre>";
      // var_dump($prices);
      // die();
                  echo $prices->item[1]->value;
          }
          else
          {
              echo 'Tidak ditemukan jalur pengiriman dari '.$city->origin.' ke '.$city->destination;
          }
          
      }
      catch (Exception $e)
      {
          echo 'Processing error.';
      }
      echo '---';
    }
  }
}
?>