<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
  public function show_customers() {
    $this->load->model('Customer_model');
    $data['customers']=$this->Customer_model->getCustomers();
    $this->load->view('customer/show_customers',$data);
  }
}
