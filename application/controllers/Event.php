<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    public function __construct() {
        parent::__construct();
    $this->load->model('User_Model');
       
    }

    public function index() {
         $this->load->view('Include/head');
    $this->load->view('Include/navbar');
        $this->load->view('User/event/event_list');
   
    $this->load->view('Include/footer');

    }
     public function create() {
         $this->load->view('Include/head');
    $this->load->view('Include/navbar');
        $this->load->view('User/event/event');

    $this->load->view('Include/footer');

    }

    

}