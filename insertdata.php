<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
</head>

<body>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => shopmonk
		$conn = mysqli_connect("localhost", "root", "", "shopmonk");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 4 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$contact = $_REQUEST['contact'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is customer_info
		$sql = "INSERT INTO user_registeration VALUES ('$first_name',
			'$last_name','$email', '$contact')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>
