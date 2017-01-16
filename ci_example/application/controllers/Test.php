<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
  //example
  public function sayhello() {
    echo 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
  }

  public function index() {
    echo 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat deleniti nemo doloremque ipsa aspernatur laudantium quia, harum tempora eos distinctio omnis consectetur corporis neque doloribus. Ipsa cupiditate quam, vel architecto.';
  }

  public function first() {
    $data['fname']='Lorem';
    $data['lname']='Ipsum';
    $this->load->view('test/first',$data);
  }

  public function names() {
    $this->load->model('Test_model');
    $data['customers']=$this->Test_model->getNames();
    $this->load->view('test/names',$data);
  }
}
