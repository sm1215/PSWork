<?php //db_connect.php

	require_once("db_info.php");

	$mysqli = new mysqli($hname, $uname, $pass, $db);
	if($mysqli->connect_errorno){
		echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	}
?>