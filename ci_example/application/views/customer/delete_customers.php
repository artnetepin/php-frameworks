<h1>Delete customers from database</h1>
<table>
  <tr>
    <th>Fristname</th>
    <th>Lastname</th>
    <th>Select to delete</th>
  </tr>
  <?php
    foreach ($customers as $row) {
      echo '<tr><td>'.$row['fname'].'</td><td>'.$row['lname'].'</td><td><a href="'.site_url('customer/delete_customers').'/'.$row['id_customers'].'">Delete</a></td></tr>';
    }
   ?>
</table>
