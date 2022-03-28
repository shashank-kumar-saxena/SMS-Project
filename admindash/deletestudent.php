<?php
  include('../dbconnection.php');
  $id=$_REQUEST['sid'];
  $qur="DELETE FROM `student` WHERE `id`='$id';";
  $run=mysqli_query($con,$qur);
  if($run==TRUE)
  {
    ?>
    <script>
      alert('Data Deleted successfully');
      		window.open('delete.php','_self');
    </script>
    <?php
  }
?>
