<?php
include_once "header.php";
include_once "nav_patient.php";
?>

<script type="text/javascript">
	$("#actionbar-left").append("<label onClick=\"browserBack()\" class=\"mdl-button mdl-js-button mdl-button--icon\" for=\"fixed-header-drawer-exp\"><i class=\"material-icons\">arrow_back</i></label>");
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">New Appointment</div>");
</script>

<script type="text/javascript">
	function browserBack(){
		window.history.back();
	}
</script>

<main class="mdl-layout__content">
	<div class="mdl-grid page-content">
    <div class="mdl-cell mdl-cell--9-col">
      
  	</div>
  	<div class="mdl-cell mdl-cell--3-col">
      
    </div>
	</div>
</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>