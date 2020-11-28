<?php
session_start();
require_once "config.inc.php";

// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	// Could not get the data that should have been sent.
	header("location: ../register.php");
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	// One or more values are empty.
	exit("Please fill out all fields. <a href=\"../register.php\">Return to sign up page.</a>");
}

// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo "That username is already in use. <a href=\"../register.php\">Return to sign up page.</a>";
	} else {
		// Username doesnt exists, insert new account
		if ($stmt = $con->prepare('INSERT INTO users (username, password, email) VALUES (?, ?, ?)')) {
			// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
			$stmt->execute();
			header("location: ../login.php");
		} else {
			// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
			echo "ERROR: Could not execute statement. <a href=\"mailto:droby@saint-lukes.com\">Please contact site administrator.</a>";
		}
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo "ERROR: Could not execute statement. <a href=\"mailto:droby@saint-lukes.com\">Please contact site administrator.</a>";
}
$con->close();
?>