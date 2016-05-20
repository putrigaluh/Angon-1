<?php

class Logout extends CI_Controller {

	public function __construct() {
		parent::__construct();
	
	}

	public function index() {
		if($this->session->userdata('is_logged_in')) {
        	$this->session->sess_destroy();
	    }
		redirect('ecomerce/produk');
	}
}
?>