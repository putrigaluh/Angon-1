<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kota extends CI_Controller {

public function __construct() {
    parent::__construct();
     $this->load->model('kota_model');
 }

	public function selectbox()
	 {
	 	$id = $this->input->post('id');
	 	$daftar_kota = $this->kota_model->get_data_provinsi($id);
	 	foreach ($daftar_kota as $k) {
	 		echo "<option value='".$k->id_kota."'>".$k->nama_kota."</option>";
	 	}
	 }
 
}
?>