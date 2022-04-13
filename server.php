<?php

// Starting the session, necessary
// for using session variables
session_start();

// Declaring and hoisting the variables
$membername = "";
$phoneno = "";
$email = "";
$_SESSION['success'] = "";

// DBMS connection code -> hostname,
// username, password, database name
$db = mysqli_connect('localhost', 'root', '', 'project');

// Registration code
if (isset($_POST['book-prop'])) {

	// Receiving the values entered and storing
	// in the variables
	// Data sanitization is done to prevent
	// SQL injections
	$membername = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
    $phoneno = mysqli_real_escape_string($db, $_POST['phoneno']);
	

	// Ensuring that the user has not left any input field blank
	// error messages will be displayed for every blank input
	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }

	// if ($password_1 != $password_2) {
		// array_push($errors, "The two passwords do not match");
		// Checking if the passwords match
	// }

	// If the form is error free, then register the user
	// if (count($errors) == 0) {
		
		// Password encryption to increase data security
		// $password = md5($password_1);
		
		// Inserting data into table
		$query = "INSERT INTO property (pid, propname, membername, email, phoneno )
				VALUES(1134,'pristine','$membername', '$email', '$phoneno')";
		
		mysqli_query($db, $query);

		// Storing username of the logged in user,
		// in the session variable
		//$_SESSION['username'] = $username;
		
		// Welcome message
		//$_SESSION['success'] = "You have logged in";
		
		// Page on which the user will be
		// redirected after logging in
		header('location: index.php');
	}
// }


?>
