<?php

require "config.php";

use App\User;

// Save the user information, and automatically login the user

try {
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$gender = $_POST['gender'];
	$birthdate = $_POST['birthdate'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password = $_POST['confirm_password'];

	if ($_POST['password']!=$_POST['confirm_password']){
		header("Refresh:0; url=register.php");


	}
	
	else{
		
		$result = User::register($first_name, $middle_name, $last_name, $gender, $birthdate, $address, $contact, $email, $pass);

	}

	
	

	if ($result) {

		// Set the logged in session variable and redirect user to index page

		$_SESSION['is_logged_in'] = true;
		$_SESSION['user'] = [
			'id' => $result,
			'fullname' => $first_name . ' ' . $middle_name . ' ' . $last_name,
			'email' => $email
		];
		header('Location: index.php');
	}

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

