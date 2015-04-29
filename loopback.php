<?php
	$type = $_SERVER['REQUEST_METHOD'];
	//$counter = count($_GET);
	//echo $counter;
	//print_r($_GET);
	$parameters = null;

	if($type == 'POST' && !empty($_POST)) {
		$parameters = $_POST;
	} else if($type == 'GET' && !empty($_GET)) {
		$parameters = $_GET;
	}

	$favArray = array(
		"Type" => $type,
		"parameters" => $parameters
	);

	//print_r($favArray);
	echo json_encode($favArray);
?>