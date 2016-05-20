<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Produk extends MY_Controller {

public function __construct() {
   parent::__construct();
   $this->load->model('m_produk');
 }


public function lihat_produk() {
    $produk = $this->m_produk->get_produk_admin();
    $this->load->vars('p', $produk);
  	$this->admin_page('admin/lihat_produk');
}

public function lihat_detail($id) {
    $this->load->model('m_produk');
    $this->load->model('kategori_model');
    $data['kat'] = $this->kategori_model->drop_kategori();
    $produk = $this->m_produk->edit($id);
    $this->load->vars('p', $produk);
    $this->admin_page('admin/lihat_detail_produk', $data);
    }

public function delete($id) {
    // $this->load->model('m_produk');
    $this->m_produk->delete($id);
    redirect('/admin/produk/lihat_produk');
}

}
?>