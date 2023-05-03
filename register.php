<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
<h1>Register a User</h1>

<form action="save-registration.php" method="POST">
	<div>
		<label>First Name</label>
		<input type="text" name="first_name" placeholder="First Name" required/>	
	</div><br>
	<div>
		<label>Middle Name</label>
		<input type="text" name="middle_name" placeholder="Middle Name" optional/>	
	</div><br>
	<div>
		<label>Last Name</label>
		<input type="text" name="last_name" placeholder="Last Name" required/>	
	</div><br>
	<div>
	<label>Gender</label>
	<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other
	</div><br>
	<div>
		<label>BirthDate</label>
		<input type="date" name="birthdate" />	
	</div><br>
	<div>
		<label>Address</label>
		<input type="text" name="address" placeholder="Your Address" />	
	</div><br>
	<div>
		<label>Contact</label>
		<input type="text" name="contact" placeholder="Your Mobile No." />	
	</div><br>
	<div>
		<label>Email Address</label>
		<input type="email" name="email" placeholder="email@address.com" required/>	
	</div><br>
	<div>
		<label>Password</label>
		<input type="password" name="password" minlength=8 required/>	
	</div><br>
	<div>
		<label>Confirm Password</label>
		<input type="password" name="confirm_password" />	
	</div><br>
	<div>
		<button>
			Register User
		</button>	
	</div>
</form>
</body>
</html>