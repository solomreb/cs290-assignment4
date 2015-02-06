<!DOCTYPE html>
<html>
<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$method =  $_SERVER['REQUEST_METHOD'] . "\"";

if ($_SERVER['REQUEST_METHOD'] == "GET") {
  $params = json_encode($_GET);
} 
else if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $params = json_encode($_POST);
}

echo "{\"Type\":\"" . $method . ",\"parameters\":" . $params ;

?>

</body>
</html>