<?php
session_start();
if(isset($_SESSION['id']))
{
}
else
{
header('location:adminlogin.php');
}
include('../dbconnection.php');
$sid=$_GET['sid'];
$qre='SELECT * FROM `student`';
$run=mysqli_query($con,$qre);
if($run==TRUE)
{
  while($data=mysqli_fetch_assoc($run))
  {
    if($sid==$data['id'])
    {

      break;
    }
  }

}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Student</title>
    <link href='../css/updatedetailstudent.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
      <a href="update.php">Go to Back</a>
      <div id='box'>
        <h1> Student Details</h1>
      <div id='Form'>
        <form method="post" action="updateback.php">
        <div id='name'>
          <p>Student Name</p>
          <input type='text' name='s_name' value='<?php echo $data['name']; ?>' required>
        </div>
          <div id='standard'>
            <p>Choose Standard</p>
            <select name='standard' value='<?php echo $data['standard'];?>'>
              <option value='BCA'>BCA</option>
              <option value='BBA'>BBA</option>
              <option value='bcom'>B.Com</option>
            </select>
          </div>
        <div id='rollno'>
          <p>Enter the Rollno.</p>
          <input type='number' name='s_roll' value='<?php echo $data['rollno'];?>' required>
        </div>
       <div id='pcontact_no'>
         <p>Contact Number</p>
         <input type='number' name='s_number' value='<?php echo $data['parent_contect'];?>' required>
       </div>
       <div id='address'>
         <p>Enter your address</p>
         <input type="text" name='address' value='<?php echo $data['city'];?>' required>
       </div>
       </div>

       <div>
         <input type="hidden" name="sid" value="<?php echo $data['id']?>">
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
