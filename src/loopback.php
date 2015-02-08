<!-- Becky Solomon, CS 290 Assignment 4, loopback.php-->
<!DOCTYPE html>
<html>
<body>

<?php

$method =  $_SERVER['REQUEST_METHOD'];

if ($method == "GET") {
  $params = $_GET;
} 
else if ($method == "POST") {
  $params = $_POST;
}

$result = [] ;
$result["Type"] = $method;
$result["parameters"] = $params;
echo json_encode($result);

?>

</body>
</html>