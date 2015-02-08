<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);


echo "session id = " . session_id() . "<br>";
echo "session username= " . $_SESSION['username'];
//if(!isset($_GET['loggedin']) || $_GET['loggedin'] == false) {	
//	echo "You are currently logged out. Click "; 
//	echo "<a href=login.php?loggedin=false>here</a>";here " to return to login page.<br>";
//}
//else(){
	echo '<br><br><a href="content1.php?loggedin=true"> Visit Content1 </a>';
//}


?>
