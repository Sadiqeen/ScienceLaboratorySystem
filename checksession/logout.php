<?php
	session_start();
	$_SESSION["id"] = "000000000";
  	session_destroy();
  	header( "location:../../" );
  	exit();
?>
