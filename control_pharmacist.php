<?php
	include_once "connection.php";

	if (isset($_POST['listprescript'])) {
        getActivePrescription();
    }

/*
SELECT prescript_id,medrec_HN,medrec_datetime,patient.initial,patient.fName,patient.lName,user.initial,user.fName,user.lName FROM `prescription` 
LEFT JOIN patient on prescription.medrec_HN = patient.HN
LEFT JOIN appointment on prescription.medrec_datetime = appointment.appoint_time
LEFT JOIN user on appointment.doctor_username = user.username
WHERE `prescript_status`=0
*/

    function getActivePrescription(){
    	$connection = $GLOBALS['connection'];
        $result = mysqli_query($connection, "SELECT prescript_id,medrec_HN,medrec_datetime,patient.initial AS patient_initial ,patient.fName AS patient_fName ,patient.lName AS patient_lName,user.initial AS user_initial,user.fName AS user_fName,user.lName AS user_lName FROM `prescription` LEFT JOIN patient on prescription.medrec_HN = patient.HN LEFT JOIN appointment on prescription.medrec_datetime = appointment.appoint_time LEFT JOIN user on appointment.doctor_username = user.username WHERE `prescript_status`=0") or die("Query fail: " . mysqli_error($connection));
        $a = array();
        $b = array();
        while ($row = mysqli_fetch_array($result)){
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