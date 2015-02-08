<!-- Becky Solomon, CS 290 Assignment 4, login.php-->
<?php
session_start();
if(isset($_GET['logout'])){	
	echo "You are currently logged out<br>";
	$_SESSION = array();
	session_destroy();
	echo "session id= " . session_id() ;  
}

?>
<html>
	<head>
	<title>CS290Assignment4</title>
	</head>
	<h1> CS 290 Assignment 4: Login </h1>
	<body>
	
	<div name="login">
	<h2>Login</h2>
	<form method="post" name="login" action="content1.php">
		<h3>Username:</h3> <input type="text" name="username">
		<input type="submit" value="Login">
	</form>
	</div>

