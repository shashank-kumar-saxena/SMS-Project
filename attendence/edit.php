<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Attendence</title>
    <link href='../css/edit.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
<div id='admin'>
<abb title="administration Dashboard"><a class='faculty' href="../admindash/dashboard.php">admin login</a></abb>
</div>
  <div id='table'>
<table>
<tr>
 <th>S.no.</th>
 <th>name</th>
 <th>Rollno</th>
 <th>standard</th>
 <th>Contact no.</th>
 <th>City</th>
 <th>Present</th>
 <th>Absent</th>
</tr>
    <?php

      include('../dbconnection.php');
      $qre="SELECT * FROM `student`";
      $run=mysqli_query($con,$qre);
      $count=0;
      if($run==true)
      {
        while($data=mysqli_fetch_assoc($run))
        {
            $count++;
    ?>
    <tr>
      <td><?php echo $count;  ?></td>
      <td><?php echo $data['name'];  ?></td>
      <td><?php echo $data['rollno'];  ?></td>
      <td><?php echo $data['standard'];  ?></td>
      <td><?php echo $data['parent_contect'];  ?></td>
      <td><?php echo $data['city'];  ?></td>
      <td><a id='student_edit' href="date.php?sid=<?php echo $data['id']; ?>">P</a></td>
      <td><a id='student_edit' href="date2.php?sid=<?php echo $data['id']; ?>">A</a></td>
    </tr>
  <?php
}
}
    ?>
</table>
</div>
</body>
</html>
