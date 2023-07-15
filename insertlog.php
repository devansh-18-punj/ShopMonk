<!DOCTYPE html>
<html>

<head>
	<title>Log</title>
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
		$uname = $_REQUEST['uname'];
		$psw = $_REQUEST['psw'];
		
		// Performing insert query execution
		// here our table name is customer_info
		$sql = "INSERT INTO user_logs VALUES ('$uname',
			'$psw')";
		
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

<ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
    </ul>

</html>