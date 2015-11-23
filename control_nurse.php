<?php
	include_once "connection.php";

	if (isset($_POST['search_hn'])) {
        findPatient($_POST['search_hn']);
    }

    function findPatient($hn){
    	$connection = $GLOBALS['connection'];
		$hn = $connection->real_escape_string($hn);
    	$result = mysqli_query($connection, "SELECT HN,initial,fName,lName FROM patient WHERE HN='$hn'") or die("Query fail: " . mysqli_error($connection));
		$b = array();
		while ($row = mysqli_fetch_array($result)){
			$b['patient_hn'] = $row['HN'];
            $b['patient_initial'] = $row['initial'];
            $b['patient_fname'] = $row['fName'];
            $b['patient_lname'] = $row['lName'];
        }
        echo json_encode($b,JSON_FORCE_OBJECT);
    }
?>