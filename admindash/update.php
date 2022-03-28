<?php
session_start();
if(isset($_SESSION['id']))
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Student</title>
    <link href='../css/updatestudent.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div id='homepage'>
    <a href="dashboard.php">Go to Back</a>
  </div>
    <h1>Update Student Details</h1>
    <div id='box'>
      <div id='form'>
    <form method="post" action="update.php">
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
      <div id='submit'>
        <input type="submit" name="submit" value="submit">
      </div>
    </form>
    </div>
  </div>
</div id='table'>
  <table>
  <tr>
   <th>S.no.</th>
   <th>name</th>
   <th>Rollno</th>
   <th>standard</th>
   <th>Contact no.</th>
   <th>City</th>
   <th>Details</th>
  </tr>
  <?php
  if(isset($_POST['submit']))
  {
    $name=$_POST['s_name'];
    $std=$_POST['standard'];
    include('../dbconnection.php');
    $qre="SELECT * FROM `student`";
    $run=mysqli_query($con,$qre);
    if($run==true)
{
  $id=0;
  $count=0;
  while($data=mysqli_fetch_assoc($run))
	{
  if($name==$data['name'] && $std==$data['standard'])
  {
    $id=$data['id'];
  }
  If($id>0 && $name==$data['name'] && $std==$data['standard'])
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
      <td><a id='student_edit' href="studentupdate.php?sid=<?php echo $data['id']; ?>">edit</a></td>
    </tr>
    <?php
  }
}
if($id==0)
{
  ?>
  <script>
  alert('Data not found');
  </script>
  <?php
}
}
}
?>
  </table>
</div>
  </body>
</html>
