<?php
include_once "header.php";
include_once "nav_patient.php";
?>

<script type="text/javascript">
  $("#actionbar-middle").append("<div style=\"font-size:x-large\">ใบนัดแพทย์</div>");
</script>

<main class="mdl-layout__content">
	<div class="mdl-grid page-content">
        <div class="mdl-cell mdl-cell--9-col">
    		<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            	Main content here
        	</div>
  		</div>
  		<div class="mdl-cell mdl-cell--3-col">
    		
  		</div>
	</div>
  <a href="patient_newapp_seldoc.php">
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect"
    id="add-button"
    onClick="addAppointment()"
    style="position: fixed; display: block; right: 40px; bottom: 40px;">
    <i class="material-icons">add</i>
    </button>
  </a>
</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>