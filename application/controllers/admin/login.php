<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct() {
        parent::__construct();
        $this->load->model('admin');
  }

  public function index() {
    $this->cek_login();
  }

  // public function cek_login() {
  //     $username    = $this->input->post('username');
  //     $password   = $this->input->post('password');

  //     if($username && $password) {
  //       if($this->admin->validate_user($username, $password)){
  //           redirect('admin/index');
  //       } else {
  //           $this->show_login_page("<div id=\"alert\" class=\"alert alert-error\">Username atau password tidak cocok</div>");
  //       }
  //     } else {
  //       $this->show_login_page("<div id=\"alert\" class=\"alert alert-error\">Silahkan login</div>");
  //     }
  //   }


     public function cek_login() {
      
      $username    = $this->input->post('username');
      $password   = $this->input->post('password');

      if($username && $password) {
        if($this->admin->validate_user($username, $password)){

          if($this->session->userdata('role') == 'dana' ) {
            redirect('admin/index/index_dana');
          } 
            elseif ($this->session->userdata('role') == 'keluhan') {
              redirect('admin/index/index_keluhan');
            }
              else {
                redirect('admin/index/index_super');
              }
        }
          
         else {
            $this->show_login_page("
            <div class='alert alert-danger display-hide'>
            <button class='close' data-close='alert'></button>
              <span> username and password anda salah. </span>
            </div>
        ");
        }
      } else {
        $this->show_login_page("
        <div class='alert alert-danger display-hide'>
        <button class='close' data-close='alert'></button>
          <span> Masukkan username and password anda. </span>
        </div>
        ");
      }
    }

  function show_login_page($show_error) {
      $data['page'] = 'login';
      $data['error'] = $show_error;
      $this->load->view('admin/flogin', $data);
  }
}

?>