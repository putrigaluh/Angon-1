<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pesanan_admin extends MY_Controller {
	public function __construct() {
    parent::__construct();
    
    $this->load->model('transaksi_model');
    $this->load->model('detail_transaksi_model');
 }

	public function index() {		
		$data['list']=$this->detail_transaksi_model->lihat_semua_pesanan();
		$this->admin_page('admin/lihat_pesanan',$data);
	}

	public function detail_pesanan($id) {
		$transaksi = $this->transaksi_model->transaksi_by_id($id);
		$details = $this->detail_transaksi_model->detail_for_admin($id);
		$this->load->vars('transaksi', $transaksi);
		$this->load->vars('details', $details);
		$this->admin_page('admin/detail_pesanan');
	 }
}
?>