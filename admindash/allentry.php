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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Check all entry</title>
    <link href='../css/allentry.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div id='homepage'>
    <a href="dashboard.php">Go to Back</a>
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
     <th>update</th>
     <th>delete</th>
    </tr>
    <?php
     include('../dbconnection.php');
     $qre='SELECT * FROM `student`';
     $run=mysqli_query($con,$qre);
     $count=0;
     if($run==TRUE)
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
           <td><a id='student_edit' href="studentupdate.php?sid=<?php echo $data['id']; ?>">edit</a></td>
             <td><a id='student_edit' href="deletestudent.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
         </tr>
         <?php
       }
     }
    ?>
  </table>
</div>
</body>
</html>
