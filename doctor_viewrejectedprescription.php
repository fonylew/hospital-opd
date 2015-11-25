<?php
include_once "header.php";
include_once "nav_doctor.php";
include_once "control_doctor.php";
$appointment_list = getRejectPrescription($employee_username);
$appointment_count = sizeof($appointment_list);
?>

<!-- setup actonbar -->
<script type="text/javascript">
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">สั่งยาที่ต้องแก้ไข</div>");
</script>

<!-- import function -->
<script src="js/doctor_viewreject_function.js"></script>

<main class="mdl-layout__content">
	<div class="mdl-grid page-content" id = "box1">

		<script>
			var appointment_list = <?php echo json_encode($appointment_list,JSON_FORCE_OBJECT)?>;
			var appointment_count = <?php echo json_encode($appointment_count,JSON_FORCE_OBJECT)?>;
			for (var i = 0; i < appointment_count; i++) {
				addAppointment(appointment_list[i].appoint_id,appointment_list[i].appoint_hn,appointment_list[i].appoint_initial+" "+appointment_list[i].appoint_fName+" "+appointment_list[i].appoint_lName,appointment_list[i].appoint_date,appointment_list[i].appoint_time + " - " + appointment_list[i].appoint_time2 + " น.",appointment_list[i].prescript_id);
			}
		</script>

	</div>
</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>