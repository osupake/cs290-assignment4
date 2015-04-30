<?php
session_start();
/*
code from CS290 lecture on PHP Sessions
*/
if (!isset($_SESSION['loggedIn'])){ //check if logged in
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/', $filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/login.php" , true);
} else {
		echo "Click <a href=\"content1.php\">here</a> to back to content1.php";		
		}
?>