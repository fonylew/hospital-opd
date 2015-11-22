<?php
include_once "header.php";
include_once "nav_patient.php";
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
    		<a href="patient_newapp_confirm.php">
	  			<button
	  				class="mdl-button mdl-button--raised mdl-button--colored center"
	  				style="margin-top: 16px;">
	  				ต่อไป
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

<?php
include_once "nav_end.php";
include_once "footer.php";
?>