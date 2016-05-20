<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class kategori_grid extends MY_controller{

public function __construct() {
    parent::__construct();
     $this->load->model('produk_model');
     $this->load->model('kategori_model');
    
 }
	function index(){
		
		$data['cari_produk'] = $this->produk_model->show_produk();
		$this->load_page_produk('ecomerce/kategori_grid', $data);
	}
	function cari_by_kategori($kat){
	$this->load->library('pagination');

 	$config = array();
	$config["base_url"] 		= base_url().'ecomerce/kategori_grid/cari_by_kategori/'. $kat;
	$total_row 					= $this->kategori_model->record_count($kat);
	$config["total_rows"] 		= $total_row;
	$config["per_page"] 		= 9;
	$config['use_page_numbers'] = TRUE;
    $config['uri_segment'] 		= 5;

    $config['next_link'] 		= 'Next';
    $config['next_tag_open'] 	= '<li>';
    $config['next_tag_close'] 	= '</li>';

    $config['prev_link'] 		= 'Prev';
    $config['prev_tag_open'] 	= '<li>';
    $config['prev_tag_close'] 	= '</li>';

    $config['cur_tag_open'] 	= '<li class="active"><a class="invarseColor">';
    $config['cur_tag_close'] 	= '</a></li>';

    $config['num_tag_open'] 	= '<li>';
    $config['num_tag_close'] 	= '</li>';

	if($this->uri->segment(5)){
		$page = ($this->uri->segment(5));
	} else {
		$page = 1;
	}
    $config["cur_page"] = $page;

	$this->pagination->initialize($config);

	$offset = $page * $config['per_page'] - $config['per_page'];
	$data["cari_produk"]	= $this->kategori_model->cari_kategori($kat, $config["per_page"], $offset);
	//echo($this->db->last_query());
	
	$str_links 			= $this->pagination->create_links();
	$data["links"] 		= explode('&nbsp;', $str_links );

	// View data according to array.
	$this->load_page_produk("ecomerce/kategori_grid", $data);

 // 	$cari_produk = $this->kategori_model->cari_kategori($kat);

 // 	$config['base_url'] = base_url().'ecomerce/produk/cari_by_kategori/'. $kat;
	// $config['total_rows'] = count($cari_produk);
	// $config['per_page'] = '3';
	// $config['cur_tag_open'] = '&nbsp;<a class="invarseColor">';
	// $config['cur_tag_close'] = '</a>';
	// $config['next_link'] = 'Next';
	// $config['prev_link'] = 'Previous';

	// $this->load->library('pagination');

	// $this->pagination->initialize($config);

	// if($this->uri->segment(5)){
	// 	$page = ($this->uri->segment(5)) ;
	// }  else{
	// 	$page = 1;
	// }

	// $str_links = $this->pagination->create_links();
	// $data["links"] = explode('&nbsp;',$str_links );
	// $data['cari_produk'] = $this->kategori_model->cari_kategori($kat, $config['per_page'], $page);
 // 	// die($config['per_page']);
 	
	// $this->load_page_produk('ecomerce/kategori_grid', $data);
 }

 function pencarian(){

 	$data['cari_produk']= $this->produk_model->pencarian();
 	if($data['cari_produk'] == null){
 		echo 'error';
 	}else{
 		$this->load_page_produk('ecomerce/kategori_grid', $data);	
 	}
	
 }
}
?>