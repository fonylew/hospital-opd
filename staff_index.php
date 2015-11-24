<?php
include_once "header.php";
include_once "nav_staff.php";
?>

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/jquery.dropdown.css">
<link rel="stylesheet" type="text/css" href="css/material-fullpalette.css">
<link rel="stylesheet" type="text/css" href="css/ripples.min.css">
<link rel="stylesheet" type="text/css" href="css/roboto.min.css">

<!-- for dropdown -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.paper.min.css">
<link rel="stylesheet" type="text/css" href="css/material-fullpalette.css">
<link rel="stylesheet" type="text/css" href="css/ripples.min.css">
<link rel="stylesheet" type="text/css" href="css/roboto.min.css">

<!-- for calendar -->
<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.css">

<!-- setup actonbar -->
<script type="text/javascript">
$("#actionbar-middle").append("<div style=\"font-size:x-large\">ค้นหานัดหมาย</div>");

</script>

<!-- import function -->
<script src="js/patient_viewapp_function.js"></script>

<style>
	#add-button {
		position: fixed;
		display: block;
		right: 0;
		bottom: 0;
		margin-right: 40px;
		margin-bottom: 40px;
		z-index: 900;
	}
</style>


<main class="mdl-layout__content">
	<div class="mdl-grid page-content" id = "box1">
		<div class="mdl-cell mdl-cell--6-col">
    		<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col" 
    				style="padding:24px; color: mdl-primary;">

				<p class="mdl-color-text--primary mdl-typography--display-1" align="center" >
					เลือกวิธีที่ต้องการค้นหา
				</p>

				<center>
					<a href="staff_viewapp_seldoc.php" 
						class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"
						style="margin-right:10px">
							Search by Doctor
					</a>
					<a href="" 
						class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"
						style="margin-right:10px">
							Search by Patient
					</a>
              	</div>
				</center>
  			</div>
  		</div>
  	</div>
	<!-- FAB button with ripple -->
	<a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" 
	id="add-button" 
	href="staff_checkpatient.php">
	<i class="material-icons">add</i>
</a>
</main>

<!-- import custom js -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dropdown.js"></script>
<script src="js/ripples.min.js"></script>
<script>
  $("#dropdown-menu select").dropdown();
</script>

<!-- setup calendar -->
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.th.min.js"></script>
<script>
	$('.datepicker').datepicker({
		language: 'th',
		todayBtn: "linked"
	}).on("changeDate", function(e) {
		var date = e["date"];

		//----- get selected date here -----
    });
</script>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>