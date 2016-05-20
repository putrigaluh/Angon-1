<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends My_Controller {

public function __construct() {
    parent::__construct();
    $this->load->model('kota_model');
 }

 public function index(){
 	$this->lihat_user();
 }
 
 /* private function lihat_user()
 {
   $this->load->model('user_model');
   $data['daftar_user'] = $this->user_model->showUser();
   $this->load->view('admin/lihat_user', $data);
 } */

 public function lihat_user() {
 	$this->load->model('user_model');
    $user = $this->user_model->index();
    $this->load->vars('u', $user);
  	$this->admin_page('admin/lihat_user');
 }

 public function edit($id) {
    $this->load->model('user_model');
    $user = $this->user_model->edit($id);
    $this->load->vars('daftar_kota', $this->kota_model->get_data_kota());
    $this->load->vars('u', $user);
    $this->admin_page('admin/edit_user');
    }

 public function prosesedit() {
    $this->load->model('user_model');
        $this->user_model->prosesedit();
        redirect('admin/user/lihat_user');
    }

 public function delete($id) {
        $this->load->model('user_model');
        $this->user_model->delete($id);
        redirect('admin/user/lihat_user');
    }
 
}