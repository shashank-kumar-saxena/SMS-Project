<?php
session_start();
if(isset($_SESSION['id']))
{
}
else
{
header('location:adminlogin.php');
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Student</title>
    <link href='../css/addstudent.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
      <a href="dashboard.php">Go to Back</a>
      <div id='box'>
        <h1> Student Details</h1>
      <div id='Form'>
        <form method="post" action="add.php" enctype='multipart/form-data'>
        <div id='name'>
          <p>Student Name</p>
          <input type='text' name='s_name' required>
        </div>
          <div id='standard'>
            <p>Choose Standard</p>
            <select name='standard'>
              <option value='BCA'>BCA</option>
              <option value='BBA'>BBA</option>
              <option value='bcom'>B.Com</option>
            </select>
          </div>
        <div id='rollno'>
          <p>Enter the Rollno.</p>
          <input type='number' name='s_roll' required>
        </div>
       <div id='pcontact_no'>
         <p>Contact Number</p>
         <input type='number' name='s_number'>
       </div>
       <div id='address'>
         <p>Enter your address</p>
         <textarea name='address' required></textarea>
       </div>
       </div>
       <div id='submit'>
         <input type="submit" name="submit" value="submit">
       </div>
      </form>
      </div>
    </div>
<?php
if(isset($_POST['submit']))
{
  $name=$_POST['s_name'];
  $std=$_POST['standard'];
  $rno=$_POST['s_roll'];
  $cnumber=$_POST['s_number'];
  $address=$_POST['address'];
  include('../dbconnection.php');
  $qur="INSERT INTO `student`(`name`, `rollno`, `city`, `parent_contect`, `standard`) VALUES ('$name','$rno','$address','$cnumber','$std')";
  $run=mysqli_query($con,$qur);
  if($run==TRUE)
  {
    ?>
    <script>
      alert('Data enter successfully');
    </script>
    <?php
  }
}
 ?>
</body>
</html>
