<?php

$user=$_POST['user'];
$pass=$_POST['pass'];


$con= mysqli_connect("localhost","root","","hotel");

$result=mysqli_query($con,"SELECT * FROM `login` WHERE `username`='$user' && `password`='$pass' ");
$count=mysqli_num_rows($result);
if($count==1)
{
	header("location:checkreserv.php");
}
else{
	header("location:login.php");
}

?>