<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller{

  public function __construct(){

    parent::__construct();
    $this->load->model('Unit_Model');
    // $this->load->model('Transaction_Model');
  }

public function add_unit(){
    $out_user_id = $this->session->userdata('out_user_id');
    $out_company_id = $this->session->userdata('out_company_id');
    $out_roll_id = $this->session->userdata('out_roll_id');
    if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('unit_name', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
        'company_id' => $out_company_id,
        'unit_name' => $this->input->post('unit_name'),
        'unit_code' => $this->input->post('unit_code'),
      
        // 'user_addedby' => $out_user_id,
      );
      $this->Unit_Model->save_data('unit_master', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/user_list');
    }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/unit');
    $this->load->view('Include/footer');
  }
}