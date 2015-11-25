<?php
	include_once "connection.php";

	if (isset($_POST['department_getdoctorlist'])) {
		getDoctorbyDepartment($_POST['department_getdoctorlist']);
	}

    function getAllDepartment() {
        $connection = $GLOBALS['connection'];
    	$result = mysqli_query($connection, "SELECT * FROM department_db") or die("Query fail: " . mysqli_error($connection));
    	  $a = array();
    	  $b = array();
    	  while ($row = mysqli_fetch_array($result)){
    	  	$b['dNo'] = $row['department_order'];
    	  	$b['dName'] = $row['department_name'];
			array_push($a, $b);	
	      }
	      return $a;
    }

    function getDoctorbyDepartment($depart_no){
    	  $connection = $GLOBALS['connection'];
    	  $depart_no= $connection->real_escape_string($depart_no);
    	  $result = mysqli_query($connection, "SELECT * FROM user WHERE userType='doctor'AND department_id ='$depart_no'") or die("Query fail: " . mysqli_error($connection));
    	  $a = array();
    	  $b = array();
    	  while ($row = mysqli_fetch_array($result)){
    	  	$a['doc_username'] = $row['username'];
    	  	$doctor_name = $row['initial']." ".$row['fName']." ".$row['lName'];
    	  	$a['doc_name'] = $doctor_name;
			array_push($b, $a);	
	      }
	      echo json_encode($b,JSON_FORCE_OBJECT);
    }

?>