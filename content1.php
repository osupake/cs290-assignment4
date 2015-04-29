<?php
	$user = $_POST['username'];

	if($user == null) {
		echo "A username must be entered. Click <a href=\"login.php\">here</a> to return to the login screen.";
	} else {
		echo "Hello {$user} you have visited this page {$count} times before. Click here to logout.";
	}
?>