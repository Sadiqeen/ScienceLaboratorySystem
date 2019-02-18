<?php
	session_start();
	$expiry = 3600 ;
	if (time() - $_SESSION['login_time'] > $expiry) {
		  $_SESSION["id"] = "000000000";
  		session_destroy();
		  header( "location: ../index.php" );
		  exit();
	} else {
		if ($_SESSION["position"] == 2) {
			header( "location: ../studentPage/dashboard.php" );
			exit();
		}
	}
?>
