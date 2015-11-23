<?php
include_once "header.php";
include_once "nav_doctor.php";
?>

<!-- setup actonbar -->
<script type="text/javascript">
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">ใบนัดแพทย์</div>");
</script>

<!-- import function -->
<script src="js/doctor_viewapp_function.js"></script>

<main class="mdl-layout__content">
	<div class="mdl-grid page-content" id = "box1">

		<script>
		addAppointment();
		addAppointment();
		addAppointment();
		addAppointment();
		addAppointment();
		</script>

	</div>
</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>