<!DOCTYPE html>
<html>
<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

echo "hello<br>";

function validateInput(){
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

}

validateInput();
echo "validated";

	$a = $_GET["min-multiplicand"];

	$b = $_GET["max-multiplicand"];
	$c = $_GET["min-multiplier"];
	$d = $_GET["max-multiplier"];

	echo '<table>';		
	
	for($i = $a; $i <= $b; $i++){ //row loop
		echo '<tr>';
		for ($j = $c; $j <= $d; $j++){ //column loop
			echo '<td>';
			echo $i*$j;
			echo '</td>';
		}
		echo '</tr>';
    }
    echo '</table>';

	
	

?>

</body>
</html>
	
	