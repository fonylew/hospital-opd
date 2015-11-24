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

<script src="js/staff_viewapp_result_function.js"></script>

<!-- setup actonbar -->
<script type="text/javascript">
	$("#actionbar-left").append("<label onClick=\"browserHome()\" class=\"mdl-button mdl-js-button mdl-button--icon\" for=\"fixed-header-drawer-exp\"><i class=\"material-icons\">home</i></label>");
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">ผลลัพธ์การค้นหานัดหมาย</div>");
</script>
<script type="text/javascript">
	function browserHome(){
		location.href = "staff_index.php";
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

		<script>
			resultAppointment();
			resultAppointment();
			resultAppointment();
			resultAppointment();
			resultAppointment();
		</script>
	</div>

	<!-- FAB button with ripple -->
	<a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" 
	id="add-button" 
	href="staff_newapp_checkpatient.php?#">
	<i class="material-icons">add</i>
</a>
</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>