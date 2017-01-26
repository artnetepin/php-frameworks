<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
  public function show_customers() {
    $this->load->model('Customer_model');
    $data['customers']=$this->Customer_model->getCustomers();
    $data['page']='customer/show_customers';
    $this->load->view('menu/content',$data);
  }

  public function add_customers() {
    $this->load->model('Customer_model');
    $test=0;
    $btn = $this->input->post('btnSave');
    if (isset($btn)) {
      $insert_data=array(
        "fname"=>$this->input->post('fn'),
        "lname"=>$this->input->post('ln')
      );
      $test=$this->Customer_model->insertCustomers($insert_data);
    }

    $data['test']=$test;
    $data['page']='customer/add_customers';
    $this->load->view('menu/content',$data);
  }

  public function delete_customers() {
    $this->load->model('Customer_model');
    $data['customers']=$this->Customer_model->getCustomers();
    $data['page']='customer/delete_customers';
    $this->load->view('menu/content',$data);
  }

  public function delete_this() {
      $this->load->model('Customer_model');
      $this->Customer_model->deleteCustomers($selected_id);
      $this->show_customers();
  }

  public function update_customers() {
      $this->load->model('Customer_model');
      $data['customers']=$this->Customer_model->getCustomers();
      $data['page']='customer/update_customers';
      $this->load->view('menu/content',$data);
  }

  public function do_update(){
    $this->load->model('Customer_model');
    $id_customers=$this->input->post('id');
    $fname=$this->input->post('fn');
    $lname=$this->input->post('ln');
    $x = 0;
    foreach ($id_customers as $row) {
      $amount++;
    }
    for ($x=0; $x < $amount; $x++) {
      $update_data = array(
        "fname"=>$fname[$x],
        "lname"=>$lname[$x]
      );
      $this->Customer_model->updateCustomers($update_data,$id_customers[$x]);
    }
    $this->show_customers();
  }
}
