<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Multiplcation Table Results</title>
	<style>
		th, td {
			width: 50px;
		}
		th {
			text-align: left;
		}
	</style>
</head>
<body>

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

		echo('<table>');
		echo('<thead><tr><th></th>');

		while($width_start <= $width) { //print multiplier row
			echo '<th>';
			echo $width_start;
			echo "</th>";
			$width_start++;
		}
		echo "</tr></thead><tbody>";

		while($height_start <= $height) {
			echo "<tr>";
			echo "<th>";
			echo $height_start; //print multiplicand value
			echo "</th>";

			$width_start = $_GET["min-multiplier"];
			while($width_start <= $width) {
				$value = $height_start * $width_start; //multiplicand * multiplier
				echo '<td>';
				echo $value;
				echo "</td>";
				$width_start++;
			}
			$height_start++;
			echo "</tr>";
		}
		echo "</tbody></table>";
	}
?>
</body>
</html>