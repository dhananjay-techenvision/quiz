<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->helper('url', 'form');
    }

    // public function index() {
    // }

    public function store() {

        // $this->load->view('upload_form');

      if($this->input->post('student')){

if($_FILES['profile_image']['name']){
$time = time();
$image_name = 'profile_image_'.$time;

$config['upload_path'] = 'assets/images/';
$config['allowed_types'] = 'jpg|jpeg|png|gif';
$config['file_name'] = $image_name;
$filename = $_FILES['profile_image']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$this->upload->initialize($config); // if upload library autoloaded


      // print_r($_POST);
       

        if (!$this->upload->do_upload('profile_image')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } 
        else 
        {
            $data = array('image_metadata' => $this->upload->data());

            $this->load->view('upload_sucsses', $data);
        }
     }
}
     else{
      $this->load->view('upload_form');
     }
    }

}