<?php

$id=$_POST['id'];



$con= mysqli_connect("localhost","root","","hotel");

$query="DELETE FROM `reservation` WHERE `id`='$id'";

$result=mysqli_query($con,$query);

if(!empty($result))
{
	header("location:checkreserv.php");
}
else{
	echo "i cant deleted";
}


mysqli_close($con);
?>