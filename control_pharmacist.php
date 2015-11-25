<?php
	include_once "connection.php";

	if (isset($_POST['listprescript'])) {
        getActivePrescription();
    }

	if (isset($_POST['accept_prescript'])) {
        acceptPrescription($_POST['accept_prescript'],$_POST['pharmacist_username']);
    }

    if (isset($_POST['reject_prescript'])) {
        rejectPrescription($_POST['reject_prescript'],$_POST['pharmacist_username']);
    } 

    function acceptPrescription($pid,$user){
    	$connection = $GLOBALS['connection'];
    	$pid = $connection->real_escape_string($pid);
        $user = $connection->real_escape_string($user);
        mysqli_query($connection, "UPDATE `prescription` SET `pharmacist_username`='$user',`prescript_status`=1 WHERE `prescript_id`=$pid") or die("Query fail: " . mysqli_error($connection));
        echo 'true';
    }

    function rejectPrescription($pid,$user){
    	$connection = $GLOBALS['connection'];
    	$pid = $connection->real_escape_string($pid);
        $user = $connection->real_escape_string($user);
        mysqli_query($connection, "UPDATE `prescription` SET `pharmacist_username`='$user',`prescript_status`=-1 WHERE `prescript_id`=$pid") or die("Query fail: " . mysqli_error($connection));
        echo 'true';
    }

    function getActivePrescription(){
    	$connection = $GLOBALS['connection'];
        $result = mysqli_query($connection, "SELECT prescript_id,medrec_HN,medrec_datetime,patient.initial AS patient_initial ,patient.fName AS patient_fName ,patient.lName AS patient_lName,user.initial AS user_initial,user.fName AS user_fName,user.lName AS user_lName FROM `prescription` LEFT JOIN patient on prescription.medrec_HN = patient.HN LEFT JOIN appointment on prescription.medrec_datetime = appointment.appoint_time LEFT JOIN user on appointment.doctor_username = user.username WHERE `prescript_status`=0") or die("Query fail: " . mysqli_error($connection));
        $a = array();
        $b = array();
        while ($row = mysqli_fetch_array($result)){
        	$b['prescript_id'] = $row['prescript_id'];
            $b['hn']= $row['medrec_HN'];
            $b['doctor_initial']= $row['user_initial'];
            $b['doctor_fName'] = $row['user_fName'];
            $b['doctor_lName'] = $row['user_lName'];
            $b['datetime']= $row['medrec_datetime'];
            $b['patient_initial']= $row['patient_initial'];
            $b['patient_fName'] = $row['patient_fName'];
            $b['patient_lName'] = $row['patient_lName'];
            array_push($a, $b);
        }
        echo json_encode($a,JSON_FORCE_OBJECT);
    }

?>