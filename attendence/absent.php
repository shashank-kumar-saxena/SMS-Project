<?php
$id=$_REQUEST['sid'];
$date=$_REQUEST['date'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Redirect</title>
  </head>
  <body>
    <?php
    if(isset($_POST['submit']))
    {
    $date=$_POST['date'];
    include('../dbconnection.php');
    $qre="INSERT INTO `attendence`(`pa`, `sid`, `date`) VALUES ('0','$id','$date')";

    $run=mysqli_query($con,$qre);
    if($run==TRUE)
    {
      ?>
        <script>
        alert('Attendence Update Successfully');
        window.open('edit.php','_self');
        </script>
    <?php
    }
  }
    ?>
  </body>
</html>
