<h1>Add new customer</h1>
<form action="<?php echo site_url('customer/add_customers'); ?>" method="post">
  <table>
    <tr>
      <td>Firstname</td>
      <td><input type="text" name="fn" value=""></td>
    </tr>
    <tr>
      <td>Lastname</td>
      <td><input type="text" name="ln" value=""></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="btnSave" value="Add"></td>
    </tr>
  </table>
</form>


<?php
  if ($test>0) {
    echo 'New customer has been added';
    // echo '<script>alert("Success!");</script>';
  }
 ?>
