<!DOCTYPE html>
<html>
<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$params = array('min-multiplicand' => $_GET["min-multiplicand"], 'max-multiplicand' =>$_GET["max-multiplicand"], 'min-multiplier' => $_GET["min-multiplier"], 'max-multiplier' => $_GET["max-multiplier"]);


foreach ($params as $k => $v){
	if ($v === ''){
		echo "Missing parameter " .$k. ".<br>";
	}
	elseif (!filter_var($v, FILTER_VALIDATE_INT)){
		echo $k . " must be an integer.<br>";
	}
}
	if ($params['min-multiplicand'] > $params['max-multiplicand'] || $params["min-multiplier"] > $params["max-multiplier"]){
		if ($params['min-multiplicand'] > $params['max-multiplicand'])
			echo "Miniumum multiplicand is larger than maximum.<br>";
		if ($params["min-multiplier"] > $params["max-multiplier"])
			echo "Miniumum multiplier is larger than maximum.<br>";
	}




?>

</body>
</html>
	
	