<h1>Customers</h1>
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
  </tr>
  <?php
    foreach ($customers as $row) {
      echo '<tr><td>'.$row['fname'].'</td><td>'.$row['lname'].'</td></tr>';
    }
   ?>
</table>
