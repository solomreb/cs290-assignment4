<!-- Becky Solomon, CS 290 Assignment 4, content2.php-->
<!DOCTYPE html>
<html>
	<head>	
	<title>CS290Assignment4</title>
	</head>
	<h1> CS 290 Assignment 4: Content2 </h1>
<body>

<?php
session_start();

	if (isset($_SESSION["username"])){	//logged in from either login or content2
		echo '<br><br><a href="content1.php"> Visit Content1 </a>';
	}
	else{
		echo "You are not logged in. Please click ";
		echo "<a href=login.php>here</a>";
		echo " to log in.<br>";	
	}
?>

</body>
</html>