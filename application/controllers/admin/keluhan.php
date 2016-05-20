<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Keluhan extends MY_Controller {

public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('keluhan_model');
 }


  function input_keluhan(){
  $data['kel'] = $this->keluhan_model->dropdown_transaksi();
  $this->load_page('ecomerce/input_keluhan', $data);
  }

  function dropdown_produk(){
    $id_trans = $this->input->post("id_trans");
    $produk = $this->keluhan_model->dropdown_produk($id_trans);
      echo '<option selected disabled>Pilih</option>';
    foreach ($produk as $p) {
      echo '<option value="'.$p->id_produk.'">'.$p->nama_produk.'</option>';
    }
  }


 public function tambah_keluhan(){

    $url = $this->do_upload();
    if($url){
      $this->load->model('keluhan_model');
      $this->last_id_trans = $this->keluhan_model->tbh_keluhan_gbr($url);
    } else {
      $this->last_id_trans = $this->keluhan_model->tbh_keluhan();
    }

     $notif_request = array(                                         //notif
        'isi_pesan'     =>  'ada 1 keluhan pelanggan baru',      
        'waktu'         =>  date('Y-m-d'),
        'kepada'        =>  'keluhan',                            
        'link'          =>  'admin/keluhan/lihat_keluhan_admin'
      );                                                      
        $this->buat_notifikasi_admin($notif_request);

      

      $result = $this->keluhan_model->select_detnotif($this->last_id_trans);
      foreach ($result as $r) {
      $notif_request = array(                                         //notif ke penjual
      'isi_pesan'     =>  'ada 1 keluhan pelanggan baru',      
      'waktu'         =>  date('Y-m-d'),
      'kepada'        =>  $r->id_user,                            
      'link'          =>  'admin/keluhan/lihat_keluhan_penjual'
       );                                                      
        $this->buat_notifikasi_penjual($notif_request);
       }

    redirect('admin/keluhan/lihat_keluhan');
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

public function lihat_keluhan() {    //pembeli
    $keluhan = $this->keluhan_model->select_keluhan();
    $this->load->vars('k', $keluhan);
    $this->load_page('ecomerce/lihat_keluhan');
     
}

public function lihat_keluhan_admin() {    //admin
  $keluhanadmin = $this->keluhan_model->select_keluhan_admin();
  $this->load->vars('ka', $keluhanadmin);
  $this->admin_page('admin/lihat_keluhan_admin');

}

public function lihat_keluhan_penjual() {     //penjual
  $keluhanpenjual = $this->keluhan_model->select_keluhan_admin();
  $this->load->vars('kp', $keluhanpenjual);
  $this->manage_page('manage/lihat_keluhan_penjual');
  

}

public function balas($id_keluhan) {    //admin
  $keluhan_balas = $this->keluhan_model->select_keluhan_by_id($id_keluhan);
  $this->load->vars('p', $keluhan_balas);
  $this->admin_page('admin/form_balas_keluhan');
}

public function balas_penjual($id_keluhan) {
  $keluhan_balas = $this->keluhan_model->select_keluhan_by_id($id_keluhan);
  $this->load->vars('p', $keluhan_balas);
  $this->manage_page('manage/form_balas_keluhan_penjual');
}

public function insert_balas_keluhan($id_keluhan) {   //admin
  $this->keluhan_model->insert_balas_keluhan($id_keluhan);
  redirect('admin/keluhan/lihat_keluhan_admin');

}

public function insert_balas_keluhan_penjual($id_keluhan) {   //penjual
  $this->keluhan_model->insert_balas_keluhan($id_keluhan);
  redirect('admin/keluhan/lihat_keluhan_penjual');

}

public function lihat_expired_keluhan(){
  $expired = $this->keluhan_model->select_expired_keluhan();
  $this->load->vars('e', $expired);
  $this->admin_page('admin/lihat_expired_keluhan');
}


}

?>