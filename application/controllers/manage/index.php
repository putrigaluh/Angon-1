<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class index extends MY_Controller {

public function __construct() {
    parent::__construct();
 }

public function index()
 {
 	$this->manage_page('manage/index');
 }
 
}