<?php
	require('dbInfo.php');
	$mysqli = new mysqli($dbInfo['host'], $dbInfo['user'], $dbInfo['pass'], $dbInfo['db']);

	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	mysqli_set_charset($mysqli,"utf8");
?>
