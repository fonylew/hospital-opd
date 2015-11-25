<?php
	include_once "connection.php";

	if (isset($_POST['login_hn'])) {
        checkUser($_POST['login_hn']);
    }

	if (isset($_POST['logout'])) {
        session_start();
        session_destroy();
        echo json_encode('logout',JSON_FORCE_OBJECT); 
    }

    if (isset($_POST['view_appoint'])){
    	viewAppointment($_POST['view_appoint']);
	}

	if (isset($_POST['cancel_appoint'])){
    	cancelAppointment($_POST['cancel_appoint']);
	}
	if (isset($_POST['get_department'])){
    	getDepartment();
	}
	if (isset($_POST['get_doctor'])){
    	getDoctor($_POST['get_doctor']);
	}
	if (isset($_POST['get_doctor_name'])){
    	getDoctorDepart($_POST['get_doctor_name']);
	}
	if (isset($_POST['makeappoint_hn'])){
    	makeAppointment($_POST['makeappoint_hn'],$_POST['makeappoint_doctor'],$_POST['makeappoint_timeslot'],$_POST['makeappointment_date']);

	}
    function checkUser($hn){
    	$connection = $GLOBALS['connection'];
		$hn = $connection->real_escape_string($hn);
    	$result = mysqli_query($connection, "SELECT HN,initial,fName,lName FROM patient WHERE HN='$hn'") or die("Query fail: " . mysqli_error($connection));
    	$num_row = mysqli_num_rows($result);
		if( $num_row == 1 ) {
			session_start();
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

    function viewAppointment($hn){
  		$a = array();
  		$b = array();
  		$connection = $GLOBALS['connection'];
  		$hno = $connection->real_escape_string($hn);
  		//$hno = $hn;
    	$result = mysqli_query($connection, "SELECT * FROM appointment INNER JOIN user ON appointment.doctor_username = user.username 
    										INNER JOIN department_db ON user.department_id = department_db.department_order
    										WHERE hn ='$hno'") or die("Query fail: " . mysqli_error($connection));
  		while ($row = mysqli_fetch_array($result)){
				$a['appoint_id']= $row['appoint_id'];
				$a['hn']= $row['HN'];
				
				$dateTime = $row['appoint_time'];
				$datetrim = explode(" ",$dateTime);
				$date = $datetrim[0];
				$time = $datetrim[1];
				//DATE_FORMAT(TIME(appoint_time),'%H:%i') AS appoint_time,DATE_FORMAT(TIME(appoint_time)+ INTERVAL 10 MINUTE,'%H:%i') AS appoint_time2
				
				$a['appoint_time']= $time;
				$a['appoint_date']= $date;
				
				$a['initial']= $row['initial'];
				$a['fName']= $row['fName'];
				$a['lName']= $row['lName'];
				$a['department_id'] = $row['department_id'];
				$a['department_name'] = $row['department_name'];
				
				array_push($b, $a);
	      }
	    //array_push($a,$hno);
    	echo json_encode($b,JSON_FORCE_OBJECT); 
    } 

    function cancelAppointment($appoint_id){
        $connection = $GLOBALS['connection'];
  		$appoint_id = $connection->real_escape_string($appoint_id);
    	$result = mysqli_query($connection, "DELETE FROM appointment WHERE appoint_id = '$appoint_id'") or die("Query fail: " . mysqli_error($connection));

    }
    function getDepartment(){
        $connection = $GLOBALS['connection'];
    	$result = mysqli_query($connection, "SELECT * FROM department_db") or die("Query fail: " . mysqli_error($connection));
    	  $a = array();
    	  $b = array();
    	  while ($row = mysqli_fetch_array($result)){
    	  	$a['dNo'] = $row['department_order'];
    	  	$a['dName'] = $row['department_name'];
			array_push($b, $a);	
	      }
	      echo json_encode($b,JSON_FORCE_OBJECT);
    }

    function getDoctor($depart_no){
    	  $connection = $GLOBALS['connection'];
    	  $depart_no= $connection->real_escape_string($depart_no);
    	  $result = mysqli_query($connection, "SELECT * FROM user WHERE userType='doctor'AND department_id ='$depart_no'") or die("Query fail: " . mysqli_error($connection));
    	  $a = array();
    	  $b = array();
    	  while ($row = mysqli_fetch_array($result)){
    	  	$a['doc_username'] = $row['username'];
    	  	$doctor_name = $row['initial']."".$row['fName']." ".$row['lName'];
    	  	$a['doc_name'] = $doctor_name;
			array_push($b, $a);	
	      }
	      echo json_encode($b,JSON_FORCE_OBJECT);
    }

    function getDoctorDepart($docname){
    	  $connection = $GLOBALS['connection'];
    	  $docname = $connection->real_escape_string($docname);

    	  $result = mysqli_query($connection, "SELECT * FROM user 
    										INNER JOIN department_db ON user.department_id = department_db.department_order
    										WHERE user.username ='$docname'") or die("Query fail: " . mysqli_error($connection));
    	  $a = array();
    	  $b = array();
    	  while ($row = mysqli_fetch_array($result)){
				$a['initial']= $row['initial'];
				$a['fName']= $row['fName'];
				$a['lName']= $row['lName'];
				$a['department_id'] = $row['department_id'];
				$a['department_name'] = $row['department_name'];
				array_push($b, $a);	
	      }
	      echo json_encode($b,JSON_FORCE_OBJECT);

    }
    function makeAppointment($hn,$doctor,$timeslot,$date){
    	$connection = $GLOBALS['connection'];
    	$timetrim = explode("timeslot",$timeslot);
    	$timeslot = $connection->real_escape_string($timetrim[1]);
  		
    	$result = mysqli_query($connection, "SELECT time_time FROM timeslot WHERE slot ='$timeslot'") or die("Query fail: " . mysqli_error($connection));
    	$time = mysqli_fetch_array($result);
    	$dateTime = $date." ".$time[0];

    	$result = mysqli_query($connection, "INSERT INTO appointment(appoint_id, HN, appoint_time, doctor_username, diagnose_status)
    		VALUES (0,'$hn','$dateTime','$doctor',0)");
    	$result = mysqli_query($connection, "UPDATE worktime SET status = 'busy'
        WHERE doctor_username ='$doctor' AND worktime_slot = '$timeslot' AND worktime_date ='$date'") 
        or die("Query fail: " . mysqli_error($connection));

    	echo json_encode($date." ".$time[0]);

    }


?>