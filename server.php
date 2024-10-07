<?php
session_start();

// initializing variables
$Name = "";
$RegistrationNumber = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'authentication');


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location:/Users/shivansh685/Desktop/attendance system/user.html');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
if (check_credentials($username, $registration_number, $password)) {
	// Redirect the user to the dashboard page upon successful login
	header("Location: new_user.html");
	exit();
  } else {
	array_push($errors, "Wrong username/password combination");
  }

?>