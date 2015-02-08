<!-- Becky Solomon, CS 290 Assignment 4, content2.php-->
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
function greeting(){
	echo "Hello, " . $_SESSION['username'] . "<br>";
	if (!isset($_SESSION['visits'])){ 
   	//if 'visits' has not been created yet, initialize to zero
		$_SESSION['visits'] = 0; 
	}
	//session visits created
	//add one to visits
	echo "<br>You have visited this page " . $_SESSION['visits'] . " times before. Click " ;
	echo "<a href=login.php?logout>here</a>";
	echo " to logout.<br><br>";
	$_SESSION['visits']++; 
	echo '<br><br><a href="content2.php"> Visit Content2 </a>';
}

	if (isset($_POST['username'])){ //logged in from login page	
		$_SESSION['username'] = $_POST['username'];
		if($_POST['username'] == '' || $_POST['username'] == null){
		//post username is set to empty string
   			echo "<br>A username must be entered. Click ";
			echo '<a href="login.php"><b>here</b></a>';
   			echo " to return to the login screen.</br>";	
		}
		else{
			greeting();
		}
	}
	elseif (isset($_SESSION["username"])){	//logged in from either login or content2
		greeting();
	}
	else{
		echo "You are not logged in. Please click ";
		echo "<a href=login.php>here</a>";
		echo " to log in.<br>";
	}	

?>

</body>
</html>