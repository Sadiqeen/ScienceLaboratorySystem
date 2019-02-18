<?php
  session_start();
	$expiry = 1800 ;
	if (isset($_SESSION['login_time']) && time() - $_SESSION['login_time'] > $expiry) {
		$_SESSION["id"] = "000000000";
  		session_destroy();
  		exit();
	} else if (isset($_SESSION['login_time']) && time() - $_SESSION['login_time'] < $expiry) {
		if (isset($_SESSION["position"]) && $_SESSION["position"] == 1) {
			header( "location: ../admin/dashboard.php" );
			exit();
		} else {
			header( "location: ../student/dashboard.php" );
			exit();
		}
	}
?>
