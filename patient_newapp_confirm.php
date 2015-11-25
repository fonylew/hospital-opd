<?php
include_once "header.php";
include_once "nav_patient.php";
session_start();
$hn = $_SESSION['patient_hn'];
$doctor_user = $_POST['getdoctor'];
$time = $_POST['gettime'];
$date = $_POST['getdate'];
$fulldate = $_POST['getfulldate'];
$departno = $_POST['departno'];
/*
if($departno == 0) $departname = "ไม่ระบุ";
if($departno == 1) $departname = "กุมารเวช";
if($departno == 2) $departname = "จิตเวช";
if($departno == 3) $departname = "ต่อมไร้ท่อ";
if($departno == 4) $departname = "ทันตกรรม";
if($departno == 5) $departname = "ผิวหนัง";
if($departno == 6) $departname = "ระบบทางเดินหายใจและปอด";
if($departno == 7) $departname = "รังสีรักษา";
if($departno == 8) $departname = "สูตินารีเวช";
if($departno == 9) $departname = "หู คอ จมูก";
if($departno == 10) $departname = "อายุรเวช"; */

?>

<!-- setup actionbar -->
<script type="text/javascript">
	$("#actionbar-left").append("<label onClick=\"browserBack()\" class=\"mdl-button mdl-js-button mdl-button--icon\" for=\"fixed-header-drawer-exp\"><i class=\"material-icons\">arrow_back</i></label>");
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">New Appointment</div>");
</script>
<script type="text/javascript">
	function browserBack(){
		window.history.back();
	}
</script>

<!-- for dropdown -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/material-fullpalette.css">
<link rel="stylesheet" type="text/css" href="css/ripples.min.css">
<link rel="stylesheet" type="text/css" href="css/roboto.min.css">

<main class="mdl-layout__content">
	<div class="mdl-grid page-content">
    	<div class="mdl-cell mdl-cell--9-col mdl-color--white mdl-shadow--2dp" style="padding:24px;">
    	<center>
    		<p class="mdl-color-text--primary mdl-typography--display-1" align="center" >
				ยืนยันข้อมูลการนัดแพทย์
			</p>
		</center>
		<div style="margin-top: 16px; margin-left: auto; margin-right: auto; width: 20em;">
			<div style="margin-top: 0px;">
				<span style="font-size: large; ">แผนก: </span>
	        	<div id="departname"></div>
	        </div>
	        <br>
	        <div style="margin-top: 0px;">
				<span style="font-size: large;">แพทย์: </span>
	        	<div id="name"></div>
	        </div>
	        <br>
	        <div style="margin-top: 0px;">
				<span style="font-size: large;">วันที่: </span>
	        	<span class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;"><?php echo $fulldate?></span>
	        </div>
	        <br>
	        <div style="margin-top: 0px;">
				<span style="font-size: large;">เวลา: </span>
	        	<span class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;"><?php echo $time?></span>
	        </div>
	        <br>
		</div>
    	<center>
    		<a href="patient_newapp_seldoc.php" style="margin-right: 16px;">
	  			<button
	  				class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary mdl-shadow--2dp"
	  				style="margin-top: 16px;">
	  				แก้ไข แผนก/หมอ
	  			</button>
	  		</a>
    		<a href="patient_newapp_seldate.php" style="margin-right: 16px;">
	  			<button
	  				class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary mdl-shadow--2dp"
	  				style="margin-top: 16px;">
	  			แก้ไข วัน/เวลา
	  			</button>
	  		</a>
    		<a href="index.php" style="margin-right: 16px;">
	  			<button
	  				class="mdl-button mdl-button--raised mdl-button--primary "
	  				style="margin-top: 16px;">
	  				ยืนยันการนัดแพทย์
	  			</button>
	  		</a>
    	</center>
    	</div>
  		<div class="mdl-cell mdl-cell--3-col">
      
    	</div>
	</div>
</main>


<!-- import custom js -->
<script src="js/bootstrap.min.js"></script>
<script src="js/ripples.min.js"></script>
<script>
var hn = '<?php echo $hn;?>'; 
var doctor_user = '<?php echo $doctor_user;?>';
var time = '<?php echo $time;?>';
var date = '<?php echo $date;?>';
var departno = '<?php echo $departno;?>';
console.log(doctor_user);
           $.ajax({
              url: 'control_patient.php',
              type: 'POST',
              data: {get_doctor_name: doctor_user},
              dataType: "json",
              success: function(data) {
             
				 $('#name').append('<span class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">'+data[0]['initial']+' '+data[0]['fName']+' '+data[0]['lName']+'</span>');
				 $('#departname').append('<span class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">'+data[0]['department_name']+'</span>');
              	
              } 
          	
          });
        
</script>
<?php
include_once "nav_end.php";
include_once "footer.php";
?>