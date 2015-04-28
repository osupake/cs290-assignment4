<?php
	if($_GET["min-multiplicand"] >= $_GET["max-multiplicand"]) {
		echo "Minimum multiplicand is larger than maximum.";
	}
	if($_GET["min-multiplier"] >= $_GET["max-multiplier"]) {
		echo "Minimum multiplier is larger than maximum.";
	}

	$height = $_GET["max-multiplicand"];
	$width = $_GET["max-multiplier"];

	//var_dump($height);
	//var_dump($width);

	$height_start = $_GET["min-multiplicand"];
	$width_start = $_GET["min-multiplier"];

	echo("<table>");
	echo('<th width="50px"></th>');

	while($width_start <= $width) {
		echo '<th width="50px" align="left">';
		echo $width_start;
		echo "</th>";
		$width_start++;
	}
	echo "<br>";

	while($height_start <= $height) {
		echo "<tr>";
		echo "<th>";
		echo $height_start;
		echo "</th>";

		$width_start = $_GET["min-multiplier"];
		while($width_start <= $width) {
			$value = $height_start * $width_start;
			echo '<td width="50px">';
			echo $value;
			echo "</td>";
			$width_start++;
		}
		$height_start++;
		echo "</tr>";
	}
?>