<?php
include_once "header.php";
include_once "nav_patient.php";
include_once "control_patient.php";
session_start();
$hn = $_SESSION['patient_hn'];
?>

<!-- setup actonbar -->
<script type="text/javascript">
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">ใบนัดแพทย์</div>");
</script>

<!-- import function -->
<script src="js/patient_viewapp_function.js"></script>

<script>
	function createAppointView(){
        var hn =<?php echo $hn;?>;
        $.ajax({
              url: 'control_patient.php',
              type: 'POST',
              data: {view_appoint: hn},
              dataType: "json",
              success: function(data) {
              	for(var i = 0 ; i < Object.keys(data).length ;i++){
              	var doctorname = data[i]['initial']+""+data[i]['fName']+" "+data[i]['lName'];
              	var appointTime = data[i]['appoint_time'];

              	addAppointment(hn,data[i]['appoint_id'],data[i]['department_name'],doctorname,data[i]['appoint_date'],data[i]['appoint_time']);
              }
          	}
          });
    }


</script>


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
		<center>
		<script>
			createAppointView()
		</script>
		</center>
	</div>

	<!-- FAB button with ripple -->
	<a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" 
	id="add-button" 
	href="patient_newapp_seldoc.php">
	<i class="material-icons">add</i>
</a>
</main>



<?php
include_once "nav_end.php";
include_once "footer.php";
?>

