<?php
include_once "header.php";
include_once "nav_patient.php";
?>

<!-- setup actonbar -->
<script type="text/javascript">
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">ใบนัดแพทย์</div>");
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

		<script>
			addAppointment();
			addAppointment();
			addAppointment();
			addAppointment();
			addAppointment();
		</script>

		<div class="mdl-color--white mdl-cell mdl-cell--3-col">

		</div>
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