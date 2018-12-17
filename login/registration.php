<?php
session_start();
header('location: login.php');

$con=mysqli_connect('localhost','root');

if($con)
{
	echo "connection developed";
}
else
{
	echo "could not connect";
}

$d=mysqli_select_db($con, 'perslogin');

$uname=$_POST['username'];
$passw=$_POST['password'];

$st="select * from signin where name='$uname' && password='$passw'";

$rws=mysqli_query($con,$st);

$result=mysqli_num_rows($rws);

if($result == 1)
{
	echo "duplicate";
}
else
{
	$ins="insert into signin(name,password) values('$uname','$passw')";
	mysqli_query($con,$ins);
}
?>