<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->data['meta_title'] = 'My awesome CMS';
    }
}