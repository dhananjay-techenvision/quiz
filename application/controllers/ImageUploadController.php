<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ImageUploadController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url', 'form');
    }

    public function index() {
    }

    public function insert() {
        // $config['upload_path'] = './upload';
        // $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = 2000;
        // $config['max_width'] = 1500;
        // $config['max_height'] = 1500;

        // $this->load->library('upload', $config);

        // if (!$this->upload->do_upload('profile_image')) {
        //     $error = array('error' => $this->upload->display_errors());

        //     $this->load->view('User/image', $error);
        // } else {
        //     $data = array('image_metadata' => $this->upload->data());

        //     $this->load->view('files/upload_result', $data);


        //     $savedata = array(
        //         'profile_image' => $image

        //     );

        //     $this->User_Model->save_data('image', $save_data);

// print_r($_POST);

if($this->input->post('profile_image')){
// print_r($_POST);

             if($_FILES['profile_image']['name']){
        $time = time();
        $image_name = 'profile_image_'.$time;
        $config['upload_path'] = 'assets/upload';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $image_name;
        $filename = $_FILES['profile_image']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $this->upload->initialize($config); // if upload library autoloaded
        if ($this->upload->do_upload('profile_image') ){
          $brand_logo_up['profile_image'] =  $image_name.'.'.$ext;
          $this->User_Model->update_info('id', $id, 'profile_image', $brand_logo_up);
          $this->session->set_flashdata('upload_success','File Uploaded Successfully');
        }
        else{
          $error = $this->upload->display_errors();
          $this->session->set_flashdata('upload_error',$error);
        }
        }
    }else{
        $this->load->view('User/image');
    }

       
    

}
}