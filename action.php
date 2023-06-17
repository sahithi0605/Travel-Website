<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="css/action1.css">
	<title>Confirm Page</title>
</head>

<body>
		<center>
		<?php
       
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "hotel");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$phone = $_REQUEST['phone'];
        $place = $_REQUEST['place'];
        $guests = $_REQUEST['guests'];
        $date = $_REQUEST['date'];
        $depart = $_REQUEST['depart'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO travel_register VALUES ('$name',
			'$phone','$place','$guests','$date', '$depart')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Registration Successful</h3>";

			echo nl2br("<p>Thank you for registering <strong>$name</strong>. \nHope you enjoy your stay at <em>$place.</em> </p>");
		 } else{
			echo "Sorry there is a error recheck your details $sql. " 
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		</center>
</body>

</html>
