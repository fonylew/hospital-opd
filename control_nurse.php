<?php
	include_once "connection.php";

	if (isset($_POST['search_hn'])) {
        findPatient($_POST['search_hn']);
    }

    if (isset($_POST['check_appoint_hn'])) {
        findTodayAppointment($_POST['check_appoint_hn']);
    }

    if (isset($_POST['listdoctor'])) {
        getDoctor();
    }
/*
ตอนนี้ findTodayAppointment ผิดได้เคสนึง เช่น วันนี้จองไว้ 2 นัด แต่นัดแรกไม่ได้ไปตรวจ มันอาจจะกรอดเข้าไปในนัดที่ไม่ได้ตรวจ
*/
    function findTodayAppointment($hn){
        $connection = $GLOBALS['connection'];
        $hn = $connection->real_escape_string($hn);
        $result = mysqli_query($connection, "SELECT `appoint_time` FROM `appointment` WHERE HN='$hn' AND DATE(`appoint_time`)=CURRENT_DATE AND `diagnose_status`=0 ORDER BY `appoint_time` LIMIT 1;") or die("Query fail: " . mysqli_error($connection));
        $num_row = mysqli_num_rows($result);
        //handling in javascript appointNow($hn);
        if( $num_row == 1 ){
            while ($row = mysqli_fetch_array($result)) echo $row['appoint_time'];
        }
        else echo 'false';
    }
    
    function addPatientInfo($hn,$appoint_datetime,$w,$h,$b,$t,$h,$nurse,$doctor){
        $connection = $GLOBALS['connection'];
        $hn = $connection->real_escape_string($hn);
        $result = mysqli_query($connection, "INSERT INTO `medicalrecord`(`HN`, `appoint_datetime`, `weight`, `height`, `bloodPressure`, `temperature`, `heartRate`, `nurse_username`, `doctor_username`) VALUES ($hn,$appoint_datetime,$w,$h,$b,$t,$h,$nurse,$doctor);") or die("Query fail: " . mysqli_error($connection));
        echo 'added';
    }

    function appointNow($hn,$doctor){
        $connection = $GLOBALS['connection'];
        $hn = $connection->real_escape_string($hn);
        $doctor = $connection->real_escape_string($doctor);
        $result = mysqli_query($connection, "INSERT INTO `appointment`(`HN`, `appoint_time`, `doctor_username`, `diagnose_status`) VALUES ('$hn',CURRENT_TIMESTAMP,'$doctor',0);") or die("Query fail: " . mysqli_error($connection));
        //handling in javascript
        //findTodayAppointment($hn);
        echo 'added';
    }

    function getDoctor(){
        $connection = $GLOBALS['connection'];
        $result = mysqli_query($connection, "SELECT username,initial,fName,lName FROM `user` WHERE userType='doctor'") or die("Query fail: " . mysqli_error($connection));
        $a = array();
        $b = array();
        while ($row = mysqli_fetch_array($result)){
            $b['username']= $row['username'];
            $b['initial']= $row['initial'];
            $b['fName']= $row['fName'];
            $b['lName']= $row['lName'];
            array_push($a, $b);
        }
        //echo json_encode($a,JSON_FORCE_OBJECT); 
        return $a;
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