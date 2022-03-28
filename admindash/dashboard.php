<?php
session_start();
if(isset($_SESSION['id']))
{
}
else
{
header('location:../adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href='../css/dashboard.css' type='text/css' rel='stylesheet'>
    <title>Welcom to DashBoard</title>
  </head>
  <body>
    <div id='button'><a class='logout' href="logout.php">Logout</a></div>
    <abb title='Admin DashBoard'><h1 align='center'>DASHBOARD</h1><abb>
    <div id='button-box'>
	    <abb title='Add Student'><div id='button-d'><a class='button-a' href="add.php">Add</a></div></abb>
        <abb title='update Student'><div id='button-d'><a class='button-a' href="update.php">Update</a></div></abb>
		<abb title='Delete Student'><div id='button-d'><a class='button-a' href="delete.php">delete</a></div></add>
      </div>
	  <div id='col2'>
	  <div ><abb title='See all student'><a class='button-a' href="allentry.php">Check All Entry</a></add></div>
	  <div ><abb title='Attendence Update'><a class='button-a' href="../attendence/edit.php">Attendence</a></add></div>
	  </div>
  </body>
</html>
