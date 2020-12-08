<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

    public function __construct() {
        parent::__construct();
    $this->load->model('User_Model');
       
    }
    

     public function create() {

         $this->form_validation->set_rules('title', 'subtitle', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
        // 'unit_id' =>  $this->input->post('unit_id'),
        'title' => $this->input->post('title'),
        'subtitle' => $this->input->post('subtitle'),
      
        // 'user_addedby' => $out_user_id,
      );
      // print_r($save_data);
      $this->User_Model->save_data('banner', $save_data);


      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Banner/index');


      $lastid = $this->db->insert_id();

      // $lastId = $this->db->insert_id();
      // print_r($lastId);


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
       

        if ($this->upload->do_upload('profile_image') && $lastid && $image_name && $ext && $filename) {

           // print_r($insert_id);

        $image['profile_image'] = $image_name.'.'.$ext;
        // print_r($profile_image);
$this->User_Model->update_info('bannerid', $lastid, 'banner', $image);
 $this->session->set_flashdata('upload_success','File Uploaded Successfully');

            // $error = array('error' => $this->upload->display_errors());

            // $this->load->view('Admin/banner/banner', $error);
        } 
        else 
        {
           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }


     }

    }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Admin/banner/banner');
    $this->load->view('Include/footer');
         
    }
     public function index() {
         $data['banner_list'] = $this->User_Model->banner_list('bannerid');
      
     $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('Admin/banner/banner_list',$data);
    $this->load->view('Include/footer',$data);
    }
    // Edit User....
  public function edit_banner($bannerid){
    // $out_user_id = $this->session->userdata('out_user_id');
    // $out_company_id = $this->session->userdata('out_company_id');
    // $out_roll_id = $this->session->userdata('out_roll_id');
    // if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('title', 'name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = array(
        'title' => $this->input->post('title'),
        'subtitle' => $this->input->post('subtitle'),
        'profile_image' => $this->input->post('profile_image'),
       
      );
      $this->User_Model->update_info('bannerid', $bannerid, 'banner', $update_data);
      $this->session->set_flashdata('update_success','success');
      
      header('location:'.base_url().'Banner/index');
    }

    $user_info = $this->User_Model->get_info('bannerid', $bannerid, 'banner');
    if($user_info == ''){ header('location:'.base_url().'Banner/index'); }
    foreach($user_info as $info){
      $data['update'] = 'update';
      $data['title'] = $info->title;
      $data['subtitle'] = $info->subtitle;
      $data['profile_image'] = $info->profile_image;
    
    }
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('Admin/banner/banner',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete User....
  public function delete_banner($bannerid){
    // $out_user_id = $this->session->userdata('out_user_id');
    // $out_company_id = $this->session->userdata('out_company_id');
    // $out_roll_id = $this->session->userdata('out_roll_id');
    // if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('bannerid', $bannerid, 'banner');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Banner/index');
  }

    
}
