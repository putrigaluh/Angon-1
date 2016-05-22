<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Provinsi_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	} 

	public function get_data_provinsi(){
		
		return $this->db->get('provinsi')->result();
	}

	public function get_data_provinsi_by_id($id_provinsi){
		$this->db->where('id_provinsi',$id_provinsi);
		return $this->db->get('provinsi')->row();
	}

}
?>