<?php
include_once "header.php";
?>

<main class="mdl-layout__content">
	<div class="mdl-grid page-content">
		<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
				<h5>Appointment ID: </h5>
				<h5>Department: </h5>
				<h5>Date: </h5>
				<h5>Time: </h5>
				<!-- Raised button with ripple -->
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
					More Detail
				</button>
            </div>
        </div>
	</div>

	<!-- FAB button with ripple -->
	<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
		<i class="material-icons">add</i>
	</button>
</main>

<?php
include_once "footer.php";
?>