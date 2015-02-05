<!DOCTYPE html>
<html>
<body>

<?php

$params = array('min-multiplicand' => $_GET["min-multiplicand"], 'max-multiplicand' =>$_GET["max-multiplicand"], 'min-multiplier' => $_GET["min-multiplier"], 'max-multiplier' => $_GET["max-multiplier"]);


foreach ($params as $k => $v){
	if ($v === ''){
		echo "Missing parameter " .$k. ".<br>";
	}
	elseif (!is_int($v)){
		echo $k . " must be an integer.<br>";
	}
	elseif ($params['min-multiplicand'] > $params['max-multiplicand'] || $params["min-multiplier"] > $params["max-multiplier"]){
		if ($params['min-multiplicand'] > $params['max-multiplicand'])
			echo "Miniumum multiplicand is larger than maximum.<br>";
		if ($params["min-multiplier"] > $params["max-multiplier"])
			echo "Miniumum multiplier is larger than maximum.<br>";
	}
}



?>

</body>
</html>
	
	