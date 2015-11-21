<?php
	$host = "localhost";
	$username = "user";
	$password = "pass";
	$dbname = "hospitaldb";
	$connection = mysqli_connect($GLOBALS['host'],$GLOBALS['username'],$GLOBALS['password'],$GLOBALS['dbname']) or die(mysqli_error($connection));
	mysqli_query($connection,"SET character_set_results=utf8");
    mysqli_query($connection,"SET character_set_client=utf8");
    mysqli_query($connection,"SET character_set_connection=utf8");
	
?>