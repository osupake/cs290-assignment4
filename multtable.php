<?php
	if($_GET["min-multiplicand"] >= $_GET["max-multiplicand"]) {
		echo "Minimum multiplicand is larger than maximum.";
	} else if($_GET["min-multiplier"] >= $_GET["max-multiplier"]) {
		echo "Minimum multiplier is larger than maximum.";
	} else {

		$height = $_GET["max-multiplicand"];
		$width = $_GET["max-multiplier"];

		//var_dump($height);
		//var_dump($width);

		$height_start = $_GET["min-multiplicand"];
		$width_start = $_GET["min-multiplier"];

		echo('<!doctype html><html><meta charset="utf-8"><head><title>Multiplcation Table Results</title>
			<style>
			th, td {
				width: 50px;
			}
			th {
				text-align: left;
			}
			</style></head><body><table>');
		echo('<thead><tr><th></th>');

		while($width_start <= $width) {
			echo '<th>';
			echo $width_start;
			echo "</th>";
			$width_start++;
		}
		echo "</tr></thead>";

		while($height_start <= $height) {
			echo "<tbody><tr>";
			echo "<th>";
			echo $height_start;
			echo "</th>";

			$width_start = $_GET["min-multiplier"];
			while($width_start <= $width) {
				$value = $height_start * $width_start;
				echo '<td>';
				echo $value;
				echo "</td>";
				$width_start++;
			}
			$height_start++;
			echo "</tr></tbody>";
		}
		echo "</table></body></html>";
	}
?>