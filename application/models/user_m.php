<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends MY_Model {

    protected $_table_name = 'users';
    protected $_order_by = 'name';
    public $rules = array(
        'email' => array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean'
        ),
        'password' => array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required'
        )
    );
    
    public function __construct()
    {
        parent::__construct();
    }
    
}