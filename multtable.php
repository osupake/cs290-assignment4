<?php
	if($_GET["min-multiplicand"] >= $_GET["max-multiplicand"]) {
		echo "Minimum multiplicand is larger than maximum.";
	}
	if($_GET["min-multiplier"] >= $_GET["max-multiplier"]) {
		echo "Minimum multiplier is larger than maximum.";
	}

	$height = $_GET["max-multiplicand"] - $_GET["min-multiplicand"] + 2;
	$width = $_GET["max-multiplier"] - $_GET["min-multiplier"] + 2;

	var_dump($height);
	var_dump($width);
?>