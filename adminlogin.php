<?php
session_start();
if(isset($_POST['submit']))
{
	header('location:admindash/dashboard.php');
}
?>
<html>
<head>
<link href='css/adminlogin.CSS' rel='stylesheet' type='text/CSS'>
</head>
<body>
<div id='homepage' align='right' style='margin:2em'>
<a href="index.php">Go To home</a>
</div>
<div id='form'>
<form method='post'action='adminlogin.php'>
<div id='head'>
Administration Login
</div>
<div id='username'>
<input type='username' placeholder='Username' name='username'>
</div>
<div id='password'>
<input type='password' placeholder='password' name='password'>
</div>
<div id='submit'>
<input type='submit' value='login' name='submit'>
</div>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$id=0;
$password=$_POST['password'];
include('dbconnection.php');
$query="SELECT * FROM `admin`";
$run=mysqli_query($con,$query);
if($run==TRUE)
{
	while($data=mysqli_fetch_assoc($run))
        {
	if($username==$data['username'] && $password==$data['password'])
	{	
    $id=$data['id'];
	break;
	}	
}
if($id==0)
{
?>
		
                <script>
		window.alert('username and password incorrect');
		window.open('adminlogin.php');
		</script>
		<?php
}
}
if($id>0)
{
$_SESSION['id']=$id;
header('location:admindash/dashboard.php');
}
}
?>
</body>
</html>
