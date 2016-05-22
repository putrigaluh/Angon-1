<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class histori_pemesanan extends MY_Controller {

public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('detail_transaksi_model');
    $this->load->model('transaksi_model');
 }

    public function index(){
   	$data['pesanan_pembeli'] = $this->transaksi_model->pesanan_pembeli();
  	$this->load_page('ecomerce/histori_pemesanan', $data);
  
 }
  public function detail_pembelian(){
    $id_trans = $this->input->post("id_trans");
  	$data= $this->detail_transaksi_model->detail_pembelian($id_trans);
  	echo "<h4>Daftar Produk</h4><br>";
        foreach($data as $db) { 
          echo "Pembelian dari toko".$db->nama_toko."<br>";
          echo "<table>
            <tr>
              <td>". $db->nama_produk ."</td>
            </tr>
          </table>";
    }
  }


}
 ?>