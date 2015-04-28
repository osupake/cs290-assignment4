<?php
	$type = $_SERVER['REQUEST_METHOD'];

	if($type == 'POST') {
		$parameters = $_POST;
	} else if($type == 'GET') {
		$parameters = $_GET;
	}

	$favArray = array(
		"Type" => $type,
		"parameters" => $parameters
	);

	//print_r($favArray);
	echo json_encode($favArray);
?>