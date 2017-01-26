<h1>Update customers</h1>
<form class="" action="<?php echo site_url('customer/do_update'); ?>" method="post">
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
  </tr>
  <?php
    foreach ($customers as $row) {
      echo '<tr><td><input type="hidden" name="id" value="'.$row['id_customers'].'" /></td><td><input type="text" name="fn[]" value="'.$row['fname'].'"/></td><td><input type="text" name="ln[]" value="'.$row['lname'].'"/></td></tr>';
    }
   ?>
   <tr>
     <td></td>
     <td><input type="submit" name="btnSave" value="Update"></td>
   </tr>
</table>
</form>
