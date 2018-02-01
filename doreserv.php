<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$bookin=$_POST['bookin'];
$bookout=$_POST['bookout'];
$roomtype=$_POST['room'];


$con= mysqli_connect("localhost","root","","hotel");

$query="INSERT INTO `reservation`(`firstname`, `lastname`, `email`, `telephone`, `comein`, `comeout`, `roomtype`) VALUES ('$fname','$lname','$email','$phone','$bookin','$bookout','$roomtype')";

$result=mysqli_query($con,$query);

if ($result)
{
	header("location:succesreserv.html");
}
else{
	echo "already insert";
}


mysqli_close($con);
?>