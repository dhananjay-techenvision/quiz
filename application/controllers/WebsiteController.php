<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteController extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('User_Model');
    // $this->load->model('Transaction_Model');
  }

  public function logout(){
    $this->session->sess_destroy();
    header('location:'.base_url().'User');
  }

  /**************************      Home Page      ********************************/
  public function index(){
      $data['banner_list'] = $this->User_Model->banner_list('bannerid');
    $this->load->view('Website/Include/head',$data);
    // $this->load->view('Include/navbar');
    $this->load->view('Website/index',$data);
    $this->load->view('Website/Include/footer',$data);
}

/**************************      Login      ********************************/
  public function login(){
    // print_r($_POST);
    $this->form_validation->set_rules('whatsappno', 'whatsappno', 'trim|required');
    // $this->form_validation->set_rules('password', 'Password', 'trim|required');
    if ($this->form_validation->run() == FALSE) {
      // $this->load->view('Include/head');
      $this->load->view('User/login');
     // $this->load->view('Include/footer');

    } else{
      $whatsappno = $this->input->post('whatsappno');
      // $password = $this->input->post('password');

      $login = $this->User_Model->check_login($whatsappno);
      // print_r($login);
      if($login == null){
        $this->session->set_flashdata('msg','login_error');
        header('location:'.base_url().'User');
      } else{
        echo 'null not';
        $this->session->set_userdata('out_user_id', $login[0]['userid']);
        $this->session->set_userdata('out_company_id', $login[0]['company_id']);
        // $this->session->set_userdata('out_roll_id', $login[0]['roll_id']);
        header('location:'.base_url().'User/dashboard');
       
      }

     
    }
    
    
  }

    //  public function banner_list() {
    //      $data['banner_list'] = $this->User_Model->banner_list('bannerid');
      
    //  $this->load->view('Include/head',$data);
    // // $this->load->view('Include/navbar',$data);
    // $this->load->view('index',$data);
    // $this->load->view('Include/footer',$data);

    // }
    
  
/**************************      Dashboard      ********************************/
  public function dashboard(){
    // $out_user_id = $this->session->userdata('out_user_id');
    // $out_company_id = $this->session->userdata('out_company_id');
    // $out_roll_id = $this->session->userdata('out_roll_id');
    // if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }


    $data['banner_list'] = $this->User_Model->banner_list('bannerid');

    // print_r($data);
      
    $this->load->view('Website/Include/head',$data);
    // $this->load->view('Include/navbar');
    $this->load->view('Website/index',$data);
    $this->load->view('Website/Include/footer',$data);
}


/*******************************    User Information      ****************************/

  // Add New User....
  public function add_user(){
    // $out_user_id = $this->session->userdata('out_user_id');
    // if($out_user_id == '' ){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('participantname', 'First participantname', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
       
        'pincode' => $this->input->post('pincode'),
        'whatsappno' => $this->input->post('whatsappno'),
        'otp' => $this->input->post('otp'),
        'participantname' => $this->input->post('participantname'),
       
        // 'user_addedby' => $out_user_id,
      );
      // print_r($save_data);
      $this->User_Model->save_data('user',$save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/index');
    }
    $this->load->view('Include/head');
    // $this->load->view('Include/navbar');
    $this->load->view('User/user');
    $this->load->view('Include/footer');
  }

  // User List....
  public function user_list(){
    // $out_user_id = $this->session->userdata('out_user_id');
    // $out_company_id = $this->session->userdata('out_company_id');
    // $out_roll_id = $this->session->userdata('out_roll_id');
    // if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
    $data['user_list'] = $this->User_Model->user_list('userid');
    $this->load->view('Include/head',$data);
    // $this->load->view('Include/navbar',$data);
    $this->load->view('User/user_list',$data);
    $this->load->view('Include/footer',$data);
  }

  // Edit User....
  public function edit_user($userid){
    $out_user_id = $this->session->userdata('out_user_id');
    $out_company_id = $this->session->userdata('out_company_id');
    $out_roll_id = $this->session->userdata('out_roll_id');
    if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('participantname', 'First participantname', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = array(
        'pincode' => $this->input->post('pincode'),
        'whatsappno' => $this->input->post('whatsappno'),
        'otp' => $this->input->post('otp'),
        'participantname' => $this->input->post('participantname'),
        
        // 'user_addedby' => $out_user_id,
      );
      $this->User_Model->update_info('userid', $userid, 'user', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/user_list');
    }

    $user_info = $this->User_Model->get_info('userid', $userid, 'user');
    if($user_info == ''){ header('location:'.base_url().'User/user_list'); }
    foreach($user_info as $info){
      $data['update'] = 'update';
      $data['pincode'] = $info->pincode;
      $data['whatsappno'] = $info->whatsappno;
      $data['otp'] = $info->otp;
      $data['participantname'] = $info->participantname;
    
    }
    $this->load->view('Include/head',$data);
    // $this->load->view('Include/navbar',$data);
    $this->load->view('User/user',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete User....
  public function delete_user($userid){
    // $out_user_id = $this->session->userdata('out_user_id');
    // $out_company_id = $this->session->userdata('out_company_id');
    // $out_roll_id = $this->session->userdata('out_roll_id');
    // if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('userid', $userid, 'user');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/user_list');
  }




/*******************************  Check Duplication  ****************************/
  public function check_duplication(){
    $column_name = $this->input->post('column_name');
    $column_val = $this->input->post('column_val');
    $table_name = $this->input->post('table_name');
    $company_id = '';
    $cnt = $this->User_Model->check_dupli_num($company_id,$column_val,$column_name,$table_name);
    echo $cnt;
  }


     public function about()
    {
      $this->load->view('Website/Include/head');
    $this->load->view('Website/index');
    $this->load->view('Website/Include/footer');
    }

}
