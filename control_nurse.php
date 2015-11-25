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

    if (isset($_POST['appointnow_hn'],$_POST['appointnow_doctor'])) {
        appointNow($_POST['appointnow_hn'],'doctor01');
        //appointNow($_POST['appointnow_hn'],$_POST['appointnow_doctor']);
    }

    if (isset($_POST['add_hn'])) {
        addPatientInfo($_POST['add_hn'],$_POST['add_appoint'],$_POST['add_appointid'],$_POST['add_weight'],$_POST['add_height'],$_POST['add_blood'],$_POST['add_temp'],$_POST['add_heart'],$_POST['add_nurse'],$_POST['add_doctor']);
    }
/*
ตอนนี้ findTodayAppointment ผิดได้เคสนึง เช่น วันนี้จองไว้ 2 นัด แต่นัดแรกไม่ได้ไปตรวจ มันอาจจะกรอดเข้าไปในนัดที่ไม่ได้ตรวจ
*/
    function findTodayAppointment($hn){
        $connection = $GLOBALS['connection'];
        $hn = $connection->real_escape_string($hn);
        $result = mysqli_query($connection, "SELECT `appoint_id`,`appoint_time`,`doctor_username` FROM `appointment` WHERE HN='$hn' AND DATE(`appoint_time`)=CURRENT_DATE AND `diagnose_status`=0 ORDER BY `appoint_time` LIMIT 1;") or die("Query fail: " . mysqli_error($connection));
        $num_row = mysqli_num_rows($result);
        //handling in javascript appointNow($hn);
        if( $num_row >0 ){
            $b = array();
            while ($row = mysqli_fetch_array($result)){
                $b['appoint_id']= $row['appoint_id'];
                $b['appoint_time']= $row['appoint_time'];
                $b['doctor_username']= $row['doctor_username'];
            }
            echo json_encode($b,JSON_FORCE_OBJECT); 
        }
        else echo 'false';
    }
    
    function addPatientInfo($hn,$appoint_datetime,$appoint_id,$w,$h,$b,$t,$h,$nurse,$doctor){
        $connection = $GLOBALS['connection'];
        $hn = $connection->real_escape_string($hn);
        $result = mysqli_query($connection, "INSERT INTO `medicalrecord`(`HN`, `appoint_datetime`, `appoint_id`,`weight`, `height`, `bloodPressure`, `temperature`, `heartRate`, `nurse_username`, `doctor_username`) VALUES ($hn,$appoint_datetime,$appoint_id,$w,$h,$b,$t,$h,$nurse,$doctor);") or die("Query fail: " . mysqli_error($connection));
        echo 'true';
    }

    function appointNow($hn,$doctor){
        $connection = $GLOBALS['connection'];
        $hn = $connection->real_escape_string($hn);
        $doctor = $connection->real_escape_string($doctor);
        $result = mysqli_query($connection, "INSERT INTO `appointment`(`HN`, `appoint_time`, `doctor_username`, `diagnose_status`) VALUES ('$hn',CURRENT_TIMESTAMP,'$doctor',0);") or die("Query fail: " . mysqli_error($connection));
        //handling in javascript
        //findTodayAppointment($hn);
        echo 'true';
    }

    function getDoctor(){
        $connection = $GLOBALS['connection'];
        $result = mysqli_query($connection, "SELECT username,initial,fName,lName FROM user WHERE userType='doctor'") or die("Query fail: " . mysqli_error($connection));
        $a = array();
        $b = array();
        while ($row = mysqli_fetch_array($result)){
            $b['username']= $row['username'];
            $b['initial']= $row['initial'];
            $b['fName']= $row['fName'];
            $b['lName']= $row['lName'];
            array_push($a, $b);
        }
        echo json_encode($a,JSON_FORCE_OBJECT); 
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