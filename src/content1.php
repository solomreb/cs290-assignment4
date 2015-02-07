<!DOCTYPE html>
<html>
<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$username = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    echo "A username must be entered. Click ";
    echo '<a href="login.php"><b>here</b></a>';
    echo " to return to the login screen.";
  } else {
    $username = $_POST["username"];
  }
  $username = $_POST["username"];
}

?>

</body>
</html>