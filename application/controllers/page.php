<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends Frontend_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('page_m');
    }
    
    public function index() {
    	$this->load->view('_main_layout');
    }

}