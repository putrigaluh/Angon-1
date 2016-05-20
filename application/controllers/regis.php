<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regis extends MY_Controller {

	public function index(){
		$this->load->model('user_model');
		$this->load->model('kota_model');
		
		$data['daftar_kota'] = $this->kota_model->get_data_kota();
   		

		if (isset($_POST['btnSubmit'])) {
			$this->user_model->registrasi();
    		redirect('login');
			
		} else {
			$this->load_page('register', $data);
		}
	}
	
	public function do_username_check(){
		$this->load->model('user_model');
		$username= $this->input->post('username');
		$user = $this->user_model->select_username($username);
		echo $user;
	}

}
?>