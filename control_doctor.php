<?php
	include_once "connection.php";
	
    function getAppointmentbyDoctor($doctor_username) {

       $connection = $GLOBALS['connection'];
       $doctor_username=$connection->real_escape_string($doctor_username);

        $result = mysqli_query($connection, 
        	"SELECT appoint_id,appointment.HN,DATE_FORMAT(DATE(appoint_time),'%W %e %M %Y') AS appoint_date,DATE_FORMAT(TIME(appoint_time),'%H:%i') AS appoint_time,DATE_FORMAT(TIME(appoint_time)+ INTERVAL 10 MINUTE,'%H:%i') AS appoint_time2,patient.initial,patient.fName,patient.lName 
        	FROM appointment 
        	LEFT JOIN patient ON appointment.HN = patient.HN
        	WHERE doctor_username = '$doctor_username' AND diagnose_status = 0 AND DATE(appoint_time) >= CURDATE()") 
        or die("Query fail: " . mysqli_error($connection));
        $a = array();
        $b = array();
        while ($row = mysqli_fetch_array($result)){   
        	$b["appoint_hn"] = $row["HN"];
            $b["appoint_id"] = $row["appoint_id"];
            $b["appoint_date"] = $row["appoint_date"];
            $b["appoint_time"] = $row["appoint_time"];
            $b["appoint_time2"] = $row["appoint_time2"];
            $b["appoint_initial"] = $row["initial"];
            $b["appoint_fName"] = $row["fName"];
            $b["appoint_lName"] = $row["lName"];
            array_push($a,$b);
        }
        return $a;
    }

?>