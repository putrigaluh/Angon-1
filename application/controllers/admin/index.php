<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class index extends MY_Controller {

public function __construct() {
    parent::__construct();
 }

public function index_super() {
	
  	$this->admin_page('admin/index');
  	
}

public function index_dana() {
	redirect('ecomerce/konfirmasi_pembayaran/menampilkan_pembayaran');  
}

public function index_keluhan() {
	redirect('admin/keluhan/lihat_keluhan_admin');  
}

}