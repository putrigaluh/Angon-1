<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class produk extends MY_Controller {

public function __construct() {
    parent::__construct();
 }

public function index() {

    $this->load->model('m_produk');
    $this->load->model('kategori_model');
    $data['kat'] = $this->kategori_model->drop_kategori();
    $this->manage_page('manage/input_produk', $data);
 }
 
 public function prosesadd(){
    
    $url = $this->do_upload();
    if($url){
    $this->load->model('m_produk');
    $this->m_produk->insert($url);
    redirect('manage/produk/lihat_produk');
    }
    else{
        echo"Ada yang salah!";
    }
 }

 public function prosesedit() {
       
    $this->load->model('m_produk');
    $this->m_produk->prosesedit();
     $url = $this->do_upload();
    if($url){
        $this->m_produk->editgbr($url);
    }
    else{
        echo "salah";
    }
    
    redirect('manage/produk/lihat_produk'); 
}

 
private function do_upload(){
   $type = explode('.', $_FILES["pic"]["name"]);
   $type = $type[count($type)-1];
   $url = "./uploads/".uniqid(rand()).'.'.$type;
   if(in_array($type, array("jpg","jpeg","gif","png","JPG","PNG","JPEG","GIF")))
    if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
        if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
            return $url;
        return "";
}


public function edit($id) {
    $this->load->model('m_produk');
    $this->load->model('kategori_model');
    $data['kat'] = $this->kategori_model->drop_kategori();
    $produk = $this->m_produk->edit($id);
    $this->load->vars('p', $produk);

    if($this->session->userdata('is_admin') == TRUE){
        $this->admin_page('manage/edit_produk', $data);
    } else {
        $this->manage_page('manage/edit_produk', $data);
    }
}

 public function lihat_produk() {
 	$this->load->model('m_produk');
    $produk = $this->m_produk->index();
    $this->load->vars('p', $produk);
  	$this->manage_page('manage/lihat_produk');
 }
 
  public function delete($id) {
        $this->load->model('m_produk');
        $this->m_produk->delete($id);
        redirect('/manage/produk/lihat_produk');
    }

     public function lihat_review()
 {
    $this->load->model('m_produk');
    $review = $this->m_produk->lihat_review();
    $this->load->vars('r', $review);
    $this->manage_page('manage/lihat_review');
 }

 public function edit_user($id) {
    $this->load->model('user_model');
    $this->load->model('kota_model');
    $user = $this->user_model->edit($id);
    $this->load->vars('daftar_kota', $this->kota_model->get_data_kota());
    $this->load->vars('u', $user);
    $this->manage_page('manage/edit_user');
    }

     public function proses_edit_user($id) {
    $this->load->model('user_model');
        $this->user_model->prosesedit();
        redirect('manage/index');
    }
}