<?php
class Test_model extends CI_Controller {

  public function getNames(){
    $names = array(
      array("fname"=>"Lorem","lname"=>"Ipsum"),
      array("fname"=>"Dolor","lname"=>"Sit"),
      array("fname"=>"Amet","lname"=>"Consectetur")
    );
    return $names;
  }
}
 ?>
