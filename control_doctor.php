<?php
	include_once "connection.php";

    if (isset($_POST['diagnose_code'])) {
        saveMedicalRecord($_POST['diagnose_code'],$_POST['diagnose_description'],$_POST['diagnose_appointid'],$_POST['diagnose_prescriptions']);
    }

    if (isset($_POST['illness_type'])) {
        getIllnessList($_POST['illness_type']);
    }

    if (isset($_POST['schedule_date'])) {
        getSchedulebyDate($_POST['schedule_date'],$_POST['schedule_doctor']);
    }

    if (isset($_POST['save_schedule_date'])) {
        saveSchedulebyDate($_POST['save_schedule_date'],$_POST['save_schedule_doctor'],$_POST['save_schedule_worktime']);
    }

    if (isset($_POST['prescription_prescriptid'])) {
        editPrescription($_POST['prescription_prescriptid'],$_POST['prescription_prescriptions']);
    } 

    function getMedicalRecord($appoint_id) {
        $connection = $GLOBALS['connection'];
        $appoint_id=$connection->real_escape_string($appoint_id);

        $result = mysqli_query($connection, 
            "SELECT illness_db.illness_name,description,illness_db.illness_type
            FROM medicalrecord 
            LEFT JOIN illness_db ON medicalrecord.code = illness_db.illness_code
            WHERE appoint_id = '$appoint_id'") 
        or die("Query fail: " . mysqli_error($connection));
        $b = array();
        while ($row = mysqli_fetch_array($result)){   
            $b["illness_name"] = $row["illness_name"];
            $b["description"] = $row["description"];
            $b["illness_type"] = $row["illness_type"];
        }
        return $b;
    }

    function getPrescriptionRecord($prescript_id) {
       $connection = $GLOBALS['connection'];
       $prescript_id=$connection->real_escape_string($prescript_id);

        $result = mysqli_query($connection, 
            "SELECT *
            FROM medicine 
            WHERE prescript_id = '$prescript_id'") 
        or die("Query fail: " . mysqli_error($connection));

        $a = array();
        $b = array();
        while ($row = mysqli_fetch_array($result)){   
            $b["med_code"] = $row["med_code"];
            $b["howTo"] = $row["howTo"];
            $b["amount"] = $row["amount"];
            array_push($a,$b);
        }
        return $a;
    }

    function getRejectPrescription($doctor) {
       $connection = $GLOBALS['connection'];
       $doctor=$connection->real_escape_string($doctor);

        $result = mysqli_query($connection, 
            "SELECT appoint_id,appointment.HN,DATE_FORMAT(DATE(appoint_time),'%W %e %M %Y') AS appoint_date,DATE_FORMAT(TIME(appoint_time),'%H:%i') AS appoint_time,DATE_FORMAT(TIME(appoint_time)+ INTERVAL 10 MINUTE,'%H:%i') AS appoint_time2,patient.initial,patient.fName,patient.lName,prescription.prescript_id
            FROM appointment 
            LEFT JOIN patient ON appointment.HN = patient.HN
            LEFT JOIN prescription ON (prescription.medrec_HN = appointment.HN AND prescription.medrec_datetime = appointment.appoint_time)
            WHERE doctor_username = '$doctor' AND prescription.prescript_status = -1") 
        or die("Query fail: " . mysqli_error($connection));
        $a = array();
        $b = array();
        while ($row = mysqli_fetch_array($result)){   
            $b["prescript_id"] = $row["prescript_id"];
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

    function saveSchedulebyDate($save_schedule_date,$save_schedule_doctor,$save_schedule_worktime) {
        $connection = $GLOBALS['connection'];
        $save_schedule_date=$connection->real_escape_string($save_schedule_date);
        $save_schedule_doctor=$connection->real_escape_string($save_schedule_doctor);
        $save_schedule_worktime = json_decode($save_schedule_worktime);

        for ($i = 0; $i < sizeof($save_schedule_worktime); $i++) {
            $temptimeslot = $i+1;
            if ($save_schedule_worktime[$i] == 1) {
                mysqli_query($connection, "DELETE FROM worktime 
                WHERE doctor_username = '$save_schedule_doctor' AND worktime_date = '$save_schedule_date' AND worktime_slot = '$temptimeslot'") 
                or die("Query fail: " . mysqli_error($connection));
                mysqli_query($connection, "INSERT INTO worktime(worktime_id, status, worktime_date, worktime_slot, doctor_username)
                VALUES (0,'available','$save_schedule_date','$temptimeslot','$save_schedule_doctor')") 
                or die("Query fail: " . mysqli_error($connection));
            }
            else {
                mysqli_query($connection, "DELETE FROM worktime 
                WHERE doctor_username = '$save_schedule_doctor' AND worktime_date = '$save_schedule_date' AND worktime_slot = '$temptimeslot'") 
                or die("Query fail: " . mysqli_error($connection));
            } 
        }
    }

    function getSchedulebyDate($schedule_date,$employee_username) {
        $connection = $GLOBALS['connection'];
        $schedule_date=$connection->real_escape_string($schedule_date);
        $employee_username=$connection->real_escape_string($employee_username);

        $result = mysqli_query($connection, "SELECT worktime_slot FROM worktime 
        WHERE doctor_username = '$employee_username' AND worktime_date = '$schedule_date'") 
        or die("Query fail: " . mysqli_error($connection));
        $a = array();
        $b = array();
        while ($row = mysqli_fetch_array($result)){   
            $b["worktime_slot"] = $row["worktime_slot"];
            array_push($a,$b);
        }
        echo json_encode($a,JSON_FORCE_OBJECT); 
    }

    function editPrescription($prescription_prescriptid,$prescription_prescriptions) {
        $connection = $GLOBALS['connection'];
        $prescription_prescriptid=$connection->real_escape_string($prescription_prescriptid);
        $prescription_prescriptions = json_decode($prescription_prescriptions);

        mysqli_query($connection, "DELETE FROM medicine 
        WHERE prescript_id = '$prescription_prescriptid'") 
        or die("Query fail: " . mysqli_error($connection));

        $medrec_record = mysqli_query($connection, "SELECT medrec_HN,medrec_datetime,medrec_order
        FROM prescription
        WHERE prescript_id = '$prescription_prescriptid'") 
        or die("Query fail: " . mysqli_error($connection));

        $row = mysqli_fetch_array($medrec_record);
        $temphn = $row['medrec_HN'];
        $tempappointdatetime = $row['medrec_datetime'];

        for ($i = 0; $i < sizeof($prescription_prescriptions); $i++) {
            if ($prescription_prescriptions[$i] != null) {
                $tempmedname = $prescription_prescriptions[$i][0];
                $tempmedamount = $prescription_prescriptions[$i][1];
                $tempmedhowto = $prescription_prescriptions[$i][2];
                mysqli_query($connection, "INSERT INTO medicine(prescript_id, medrec_HN, medrec_datetime, med_code, howTo, amount) 
                VALUES ('$prescription_prescriptid','$temphn','$tempappointdatetime','$tempmedname','$tempmedhowto','$tempmedamount')") 
                or die("Query fail: " . mysqli_error($connection));
            }
        }

        mysqli_query($connection, "UPDATE prescription
        SET prescript_status = 0
        WHERE prescript_id = '$prescription_prescriptid'") 
        or die("Query fail: " . mysqli_error($connection));

        echo true;
    }

    function saveMedicalRecord($diagnose_code,$diagnose_description,$diagnose_appointid,$diagnose_prescriptions) {

        $connection = $GLOBALS['connection'];
        $diagnose_code=$connection->real_escape_string($diagnose_code);
        $diagnose_description=$connection->real_escape_string($diagnose_description);
        $diagnose_appointid=$connection->real_escape_string($diagnose_appointid);
        $diagnose_prescriptions = json_decode($diagnose_prescriptions);

        mysqli_query($connection, "UPDATE medicalrecord
        SET code = '$diagnose_code', description = '$diagnose_description'
        WHERE appoint_id = '$diagnose_appointid'") 
        or die("Query fail: " . mysqli_error($connection));

        $medrec_record = mysqli_query($connection, "SELECT medrec_order,appoint_datetime,HN
        FROM medicalrecord
        WHERE appoint_id = '$diagnose_appointid'") 
        or die("Query fail: " . mysqli_error($connection));

        $row = mysqli_fetch_array($medrec_record);
        $temphn = $row['HN'];
        $tempappointdatetime = $row['appoint_datetime'];
        $tempmedrecorder = $row['medrec_order'];

        mysqli_query($connection, "INSERT INTO prescription(prescript_id, pharmacist_username, medrec_HN, medrec_datetime, medrec_order,prescript_status) 
        VALUES (0,NULL,'$temphn','$tempappointdatetime','$tempmedrecorder',0)") 
        or die("Query fail: " . mysqli_error($connection));

        $prescript_id = mysqli_query($connection, "SELECT prescript_id,medrec_HN,medrec_datetime
        FROM prescription
        ORDER BY prescript_id DESC LIMIT 1") 
        or die("Query fail: " . mysqli_error($connection));

        $row = mysqli_fetch_array($prescript_id);
        $tempprescriptid = $row['prescript_id'];
        $temphn = $row['medrec_HN'];
        $tempmedrecdatetime = $row['medrec_datetime'];

        for ($i = 0; $i < sizeof($diagnose_prescriptions); $i++) {
            $tempmedname = $diagnose_prescriptions[$i][0];
            $tempmedamount = $diagnose_prescriptions[$i][1];
            $tempmedhowto = $diagnose_prescriptions[$i][2];
            mysqli_query($connection, "INSERT INTO medicine(prescript_id, medrec_HN, medrec_datetime, med_code, howTo, amount) 
            VALUES ('$tempprescriptid','$temphn','$tempmedrecdatetime','$tempmedname','$tempmedhowto','$tempmedamount')") 
            or die("Query fail: " . mysqli_error($connection));
        }
        
        mysqli_query($connection, "UPDATE appointment
        SET diagnose_status = '1'
        WHERE appoint_id = '$diagnose_appointid'") 
        or die("Query fail: " . mysqli_error($connection));

        echo true;
    }

    function getMedicineList() {
        $connection = $GLOBALS['connection'];

        $result = mysqli_query($connection, "SELECT med_code,med_name FROM medicine_db") 
        or die("Query fail: " . mysqli_error($connection));
        $a = array();
        $b = array();
        while ($row = mysqli_fetch_array($result)){   
            $b["med_code"] = $row["med_code"];
            $b["med_name"] = $row["med_name"];
            array_push($a,$b);
        }
        return $a;
    }

    function getIllnessList($illness_type) {
       $connection = $GLOBALS['connection'];
       $illness_type=$connection->real_escape_string($illness_type);

        $result = mysqli_query($connection, 
            "SELECT illness_code,illness_name
            FROM illness_db 
            WHERE illness_type = '$illness_type'") 
        or die("Query fail: " . mysqli_error($connection));
        $a = array();
        $b = array();
        while ($row = mysqli_fetch_array($result)){   
            $b["illness_code"] = $row["illness_code"];
            $b["illness_name"] = $row["illness_name"];
            array_push($a,$b);
        }
        echo json_encode($a,JSON_FORCE_OBJECT); 
    }

    function getMedrecGeneralDetail($appoint_id) {

       $connection = $GLOBALS['connection'];
       $appoint_id=$connection->real_escape_string($appoint_id);

        $result = mysqli_query($connection, 
            "SELECT weight,height,bloodPressure,temperature,heartRate
            FROM medicalrecord 
            WHERE appoint_id = '$appoint_id'") 
        or die("Query fail: " . mysqli_error($connection));
        $b = array();
        while ($row = mysqli_fetch_array($result)){   
            $b["weight"] = $row["weight"];
            $b["height"] = $row["height"];
            $b["bloodPressure"] = $row["bloodPressure"];
            $b["temperature"] = $row["temperature"];
            $b["heartRate"] = $row["heartRate"];
        }
        return $b;
    }
	
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