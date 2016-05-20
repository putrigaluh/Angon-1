<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {

	function __construct() {
		parent::__construct();
        $this->load->model('notifikasi_model');
	}

	function buat_notifikasi_admin($notif){
		$this->load->model('notifikasi_model');
		$this->notifikasi_model->insert_notif_admin($notif);
	}

	function buat_notifikasi_penjual($notif){
		$this->load->model('notifikasi_model');
		$this->notifikasi_model->insert_notif_penjual($notif);
	}

	public function load_page($page = '', $data = ''){

		$this->load->model('kategori_model');

	 		$data1['kat'] = $this->kategori_model->kategori();
	 		$data1['dr'] = $this->kategori_model->drop();
	 	
		
		$this->load->view("ecomerce/header", $data1);
		$this->load->view($page, $data);	
		$this->load->view("ecomerce/footer");
    }
    public function load_page_produk($page = '', $data = ''){

		$this->load->model('kategori_model');

	 		$data1['kat'] = $this->kategori_model->kategori();
	 	
	 		$data1['dr'] = $this->kategori_model->drop();
	 	
		
		// echo "<pre>";
	 // 	var_dump($data1);
	 // 	die();

		$this->load->view("ecomerce/header", $data1);
		$this->load->view("ecomerce/kategori", $data1);
		$this->load->view($page, $data);	
		$this->load->view("ecomerce/footer");
    }
    public function manage_page($page = '', $data = ''){

		$this->load->view("manage/header");
		$this->load->view("manage/sidebar");
		$this->load->view($page, $data);	
		$this->load->view("manage/footer");
    }
    public function admin_page($page = '', $data = ''){

		$this->load->view("admin/header");
		$this->load->view("admin/sidebar");
		$this->load->view($page, $data);	
		$this->load->view("admin/footer");
    }
}