<html>
<head>
<link href="css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id='admin'>
<abb title="administration login"><a class='faculty' href="adminlogin.php">admin login</a></abb>
</div>
<h1>Student Management System</h1>
<div id='table' style='margin-top:100px;'>
<table border='1'bgcolor='white' style='width:30%' align='center'>
<form action='index.php' method="post">
 <tr>
<td colspan='2' align='center'>Student Information</td>
 </tr>
<tr>
<td align='left'>Stream:</td>
 <td>
<select name='stream' required>
<option value='0'>select</option>
<option value='BCA'>BCA</option>
<option value='BBA'>BBA</option>
<option value='BCOM'>B.COM</option>
</select>
 </td>
</tr>
<tr>
 <td  width="40%"align='left'>
Rollno:
</td>
 <td><input type="text" name='rollno' placeholder="enter you Rollno" required></td>
</tr >
<tr >
<td colspan='2' align='center'><input type="submit" name='submit' value="Show Info"></td>
</tr>
</form>
</table>
</div>
<?php
if(isset($_POST['submit']))
{
	?>
<table id='stable'>
    <tr>
     <th>S.no.</th>
     <th>name</th>
     <th>Rollno</th>
     <th>standard</th>
     <th>Contact no.</th>
     <th>City</th>
	 <th>Attendence</th>
    </tr>
    <?php
     include('dbconnection.php');
	 $rno=$_POST['rollno'];
	 $standard=$_POST['stream'];
     $qre='SELECT * FROM `student`';
     $run=mysqli_query($con,$qre);
     $count=0;
     if($run==TRUE)
     {
       while($data=mysqli_fetch_assoc($run))
       {
		   if($standard==$data['standard'] && $rno==$data['rollno'])
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
		   <td><a href='attendence/attendence.php?sid=<?php echo $data['id']; ?>'>Detail</a></td>
         </tr>
         <?php
       }
	   }
	   if($count==0)
	   {
		   ?>
		   <script>
		   alert('Entry not found');
		   </script>
		   <?php
	   }
     }
    ?>
  </table>
  <?php
}
?>
</body>
</html>
