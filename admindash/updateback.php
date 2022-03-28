<?php
  $name=$_POST['s_name'];
  $std=$_POST['standard'];
  $rno=$_POST['s_roll'];
  $cnumber=$_POST['s_number'];
  $address=$_POST['address'];
  $sid=$_POST['sid'];
  include('../dbconnection.php');
  $qur="UPDATE `student` SET `name` = '$name', `parent_contect` = '$cnumber', `rollno` = '$rno', `city` = '$address', `standard` = '$std' WHERE `id` = $sid; ";
  $run=mysqli_query($con,$qur);
  if($run==TRUE)
  {
    ?>
    <script>
      alert('Data enter successfully');
      		window.open('update.php','_self');
    </script>
    <?php
  }
?>
