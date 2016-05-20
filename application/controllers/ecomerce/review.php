<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class review extends MY_Controller {

public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('review_model');
 }

  function input_review($id_produk){
  $data['det']= $this->review_model->detail($id_produk);
  $this->load_page('ecomerce/input_review', $data);
  }

  public function tambah_review($id_produk){
    $this->review_model->tbh_review($id_produk);
    redirect('ecomerce/produk');
 }


public function lihat_review()
 {
    $keluhan = $this->review_model->tmpil_review();
    //$this->load->vars('r', $review);
    $this->load_page('ecomerce/produk_detail');
 
}

}

 ?>