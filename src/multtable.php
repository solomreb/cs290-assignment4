<!-- Becky Solomon, CS 290 Assignment 4, multtable.php-->
<!DOCTYPE html>
<html>
<body>

<?php

function validateInput(){
	if (isset($_GET["min-multiplicand"]) && isset($_GET["max-multiplicand"]) && isset($_GET["min-multiplier"]) && isset($_GET["max-multiplier"])){
	
		$params = array('min-multiplicand' => $_GET["min-multiplicand"], 'max-multiplicand' =>$_GET["max-multiplicand"], 'min-multiplier' => $_GET["min-multiplier"], 'max-multiplier' => $_GET["max-multiplier"]);
	
		foreach ($params as $k => $v){
			if ($v === '' || $v === null){
				echo "Missing parameter " .$k. ".<br>";
				return false;
			}
			elseif (!filter_var($v, FILTER_VALIDATE_INT)){
				echo $k . " must be an integer.<br>";
				return false;
			}
		}
		if ($params['min-multiplicand'] > $params['max-multiplicand'] || $params["min-multiplier"] > $params["max-multiplier"]){
			if ($params['min-multiplicand'] > $params['max-multiplicand']){
				echo "Miniumum multiplicand is larger than maximum.<br>";
				return false;
			}
			if ($params["min-multiplier"] > $params["max-multiplier"]){
				echo "Miniumum multiplier is larger than maximum.<br>";
				return false;
			}
		}
		return true;
	}
	else{
		echo "Missing parameters";
	}
}


function createMultTable(){
	$a = $_GET["min-multiplicand"];
	$b = $_GET["max-multiplicand"];
	$c = $_GET["min-multiplier"];
	$d = $_GET["max-multiplier"];
	echo "<h2> Multiplication Table </h2>";
	echo "<table border='1' width = '70%'>";		
	echo '<tr><td></td>'; //empty top left box
	for ($headerCol = $c; $headerCol <=$d; $headerCol++){//header loop
		echo '<td align="center">';
		echo $headerCol;
		echo '</td>';
	}
	echo '</tr>';
	for($row = $a; $row <= $b; $row++){ //row loop
		echo '<tr><td align="center">';
		echo $row;
		echo '</td>';
		for ($col = $c; $col <= $d; $col++){ //column loop
			echo '<td align="center">';
			echo $row * $col;
			echo '</td>';
		}
		echo '</tr>';
    }
    echo '</table>';

}

if (validateInput()){
	createMultTable();
}

	

?>

</body>
</html>
	
	