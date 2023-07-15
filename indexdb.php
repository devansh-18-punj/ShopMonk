<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register</title>
</head>

    <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

		<form action="insertdata.php" method="post">
			<p>
      <label for="firstName">First Name:</label>
	  <input type="text" name="first_name" id="firstName">

      <label for="lastName">Last Name:</label>
	  <input type="text" name="last_name" id="lastName">
      </p>

      <p>
        <label for="contact">Contact info:</label>
        <input type="tel" name="contact" id="contact">
    </p>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
  
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
      <hr>
  
     
      <input type="submit" value="Submit">
    </div>
  
    				
	</form>
</body>

</html>






