<?php
include_once "header.php";
include_once "nav_patient.php";
?>

<!-- setup actionbar -->
<script type="text/javascript">
	$("#actionbar-left").append("<label onClick=\"browserBack()\" class=\"mdl-button mdl-js-button mdl-button--icon\" for=\"fixed-header-drawer-exp\"><i class=\"material-icons\">arrow_back</i></label>");
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">Diagnose</div>");
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

<!-- for calendar -->
<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.css">

<!-- custom css -->
<style type="text/css">
.btn.disabled {
	cursor: not-allowed;
	opacity: 0.1;
	filter: alpha(opacity=65);
	-webkit-box-shadow: none;
	box-shadow: none;
}
a.btn.disabled {
	pointer-events: none;
}
.selected {
	background-color: #009688;
	color: white;
}
</style>

<!-- import function -->
<script src="js/doctor_diagnose_function.js"></script>

<main class="mdl-layout__content">
	<div class="mdl-grid page-content">
		<div class="mdl-cell mdl-cell--10-col">
			<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col" style="padding:24px; color: mdl-primary;">
				<div style="margin-top: 16px; margin-left: 16px; margin-right: auto; width: 25em;">
					<div style="margin-top: 0px;">
					<span style="font-size: large; ">หมายเลขนัด: </span>
						<span id="appId" class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">123-456-789</span>
					</div>
					<br>
					<div style="margin-top: 0px;">
						<span style="font-size: large;">HN: </span>
						<span id="hn" class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">1234-5678</span>
					</div>
					<br>
					<div style="margin-top: 0px;">
						<span style="font-size: large;">ชื่อผู้ป่วย: </span>
						<span class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">PATIENTNAME SURNAME</span>
					</div>
					<br>
					<div style="margin-top: 0px;">
						<span style="font-size: large;">เวลา: </span>
						<span class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">09.00 - 09.10 น.</span>
					</div>
					<br>
				</div>
				
				<center>
					<button
          				class="mdl-button mdl-button--raised mdl-button--colored center"
          				style="margin-top: 16px;"
          				onClick="showSubmitDiagnoseConfirm()">
          				บันทึกผลการตรวจ
          			</button>
              	</center>
  			</div>
  		</div>
  		<div class="mdl-cell mdl-cell--3-col">
    		
    	</div>
	</div>
</main>

<!-- import custom js -->
<script src="js/bootstrap.min.js"></script>
<script src="js/ripples.min.js"></script>


<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.th.min.js"></script>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>