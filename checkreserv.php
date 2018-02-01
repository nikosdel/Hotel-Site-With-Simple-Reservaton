<!DOCTYPE html>
<html>
<head>
	<title>Admin Reservation System</title>
	<link rel="stylesheet" type="text/css" href="css/checkreservation.css">
</head>

<body>
	<table class=blueTable>
		<tr>
			<th>ID</th>
			<th>FirstName</th>
			<th>LastName</th>
			<th>Email</th>
			<th>Telephone</th>
			<th>BookIn</th>
			<th>BookOut</th>
			<th>RoomType</th>
		</tr>
		<?php

		$con= mysqli_connect("localhost","root","","hotel");
		$sql="SELECT `id`,`firstname`, `lastname`, `email`, `telephone`, `comein`, `comeout`, `roomtype` FROM `reservation`";
		$result=$con->query($sql);
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				echo "<tr><td>".$row["id"] ."</td><td>". $row["firstname"] ."</td><td>". $row["lastname"] ."</td><td>". $row["email"] ."</td><td>". $row["telephone"] ."</td><td>". $row["comein"] ."</td><td>". $row["comeout"] ."</td><td>". $row["roomtype"] ."</td>";
			}
			echo "</table>";
		}
		else{
			echo "0 result";
		}
		$con->close();
		?>
	</table>
	<form action="deletereserv.php" method="POST">
		<br>
		<br>
		<input type="text" name="id" placeholder="Put Id Starts from 1 ">
		<input type="submit" name="delete" value="delete">
	</form>

</body>
</html>