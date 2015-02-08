<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html>
	<head>	
	<title>CS290Assignment4</title>
	</head>
	<h1> CS 290 Assignment 4: Content1 </h1>
<body>

<?php
if(session_status() != PHP_SESSION_ACTIVE){
	//logged out. tried to log in but no username
	if (!isset($_POST['username']) || $_POST['username'] == '' || $_POST['username'] == null ) { 
   		echo "<br>A username must be entered. Click ";
		echo '<a href="login.php"><b>here</b></a>';
   		echo " to return to the login screen.</br>";	
	}
	//logged out. never logged in.
	else{
		echo "You are currently logged out. Click "; 
		echo "<a href=login.php?loggedin=false>here</a> to return to login page.<br>";
	}
}
if(session_status() == PHP_SESSION_ACTIVE){
	if (isset($_POST["username"]))
	$_SESSION['username'] = $_POST['username'];
   	if (isset($_SESSION["username"])) {
    	echo "session username= " . $_SESSION['username'] . "<br>";
   		
   		if (!isset($_SESSION['visits'])){ //if 'visits' has not been created yet, initialize to zero
			$_SESSION['visits'] = 0; 
			echo "'visits' initialized to zero<br>";
		}
		if (isset($_SESSION['visits'])){ //if 'visits' already created, add one
			echo "<br>You have visited this page " . $_SESSION['visits'] . " times before. Click " ;
    		echo "<a href=login.php?loggedin=false>here</a>";
   			echo " to logout.<br><br>";
			$_SESSION['visits']++;  
		}
   		echo '<br><br><a href="content2.php?loggedin=true"> Visit Content2 </a>';
  	}	
}

?>

</body>
</html>