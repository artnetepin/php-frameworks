<?php

  class Main extends CI_Controller {
    public function index() {
      $data['page']='main/index';
      $this->load->view('menu/content',$data);
    }
  }

?>
