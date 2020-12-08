<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
    $this->load->model('User_Model');
       
    }

    public function create() {
         $this->load->view('Include/head');
         $this->load->view('Include/navbar');
         $this->load->view('User/register/register');
         $this->load->view('Include/footer');

    }
    
    

}