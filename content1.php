<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	session_start();

	if(isset($_POST['username'])){
		$username = $_POST['username'];
	} else {
    	$username = null;
	}

	if((!isset($_SESSION['counter'])) && ($username == null)) { //no username entered and no visits counted
		echo "A username must be entered. Click <a href=\"login.php\">here</a> to return to the login screen.";	
	} else {
		if(isset($_POST['username'])) {
   			$_SESSION['loggedIn'] = $username; //log in variable for username
			//echo $username
		}

		if(!isset($_SESSION['counter'])) { //track number of visits
			$_SESSION['counter'] = 0;  
		}
		else {
			$_SESSION['counter']++;
			//echo $_SESSION['counter'];
		}
		
/*
code from CS290 lecture on PHP Sessions
*/
		if(isset($_GET['logout'])){ //logout user
			$_SESSION = array();
			session_destroy();
			$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
			$filePath = implode('/', $filePath);
			$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
			header("Location: {$redirect}/login.php" , true);
			die();
		}

		echo "Hello {$_SESSION['loggedIn']}! you have visited this page {$_SESSION['counter']} times before. Click <a href =\"content1.php?logout=true\">here</a> to logout.";
		echo "<br>";
		echo "Click <a href=\"content2.php\">here</a> to go to content2.php";
	}
?>