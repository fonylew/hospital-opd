<?php
	$host = "localhost";
	$username = "user";
	$password = "pass";
	$dbname = "hospitaldb";

	$connection = mysqli_connect($GLOBALS['host'],$GLOBALS['username'],$GLOBALS['password'],$GLOBALS['dbname']) or die(mysqli_error($connection));
?>