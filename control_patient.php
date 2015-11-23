<?php
	include_once "connection.php";

	if (isset($_POST['login_hn'])) {
        checkUser($_POST['login_hn']);
    }

    function checkUser($hn){
    	$connection = $GLOBALS['connection'];
		$hn = $connection->real_escape_string($hn);
    	$result = mysqli_query($connection, "SELECT HN,initial,fName,lName FROM patient WHERE HN='$hn'") or die("Query fail: " . mysqli_error($connection));
    	$num_row = mysqli_num_rows($result);
		if( $num_row == 1 ) {
			while ($row = mysqli_fetch_array($result)){
				$_SESSION['patient_hn'] = $row['HN'];
				echo $row['HN'];
	            $_SESSION['patient_initial'] = $row['initial'];
	            $_SESSION['patient_fname'] = $row['fName'];
	            $_SESSION['patient_lname'] = $row['lName'];
	        }
		}
		else {
			echo 'false';
		}
    }


?>