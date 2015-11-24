<?php
include_once "header.php";
include_once "nav_staff.php";
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
<link rel="stylesheet" type="text/css" href="css/bootstrap.paper.min.css">
<link rel="stylesheet" type="text/css" href="css/material-fullpalette.css">
<link rel="stylesheet" type="text/css" href="css/ripples.min.css">
<link rel="stylesheet" type="text/css" href="css/roboto.min.css">

<!-- for calendar -->
<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.css">

<!-- custom css -->
<style type="text/css">
.btn.disabled {
	cursor: not-allowed;
	opacity: 0.1;
	filter: alpha(opacity=65);
	-webkit-box-shadow: none;
	box-shadow: none;
}
a.btn.disabled {
	pointer-events: none;
}
.selected {
	background-color: #009688;
	color: white;
}
</style>

<main class="mdl-layout__content">
	<div class="mdl-grid page-content">
    	<div class="mdl-cell mdl-cell--10-col">
    		<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col" style="padding:24px; color: mdl-primary;">
				<p class="mdl-color-text--primary mdl-typography--display-1" align="center" >
					เลือกวันเวลาที่ต้องการนัดแพทย์
				</p>
				<div class="mdl-grid">
					<div class="mdl-shadow--2dp mdl-cell mdl-cell--4-col" style="display: inline-block; padding: 16px; min-width: 260px; margin-left: auto; margin-right: auto;">
						<!-- calendar -->
						<div class="datepicker datepicker-inline" style="margin-left: auto; margin-right: auto;"></div>
					</div>
					<div class="mdl-shadow--2dp mdl-cell--8-col mdl-grid" style="margin: 8px; height:350px; overflow: auto; margin-left: auto; margin-right: auto;" >
						<div class="mdl-cell" style="margin-left: auto; margin-right: auto;">
							<center>
								<span class="mdl-color-text--primary mdl-typography--title">
									เช้า
								</span>
								<br>
								<div class="btn-group-vertical">
					                <a href="#" class="btn btn-primary">09.00 - 09.10</a>
					                <a href="#" class="btn btn-default disabled">09.10 - 09.20</a>
					                <a href="#" class="btn btn-default">09.20 - 09.30</a>
					                <a href="#" class="btn btn-default disabled">09.30 - 09.40</a>
					                <a href="#" class="btn btn-default">09.40 - 09.50</a>
					                <a href="#" class="btn btn-default">09.50 - 10.00</a>
					                <a href="#" class="btn btn-default disabled">10.00 - 10.10</a>
					                <a href="#" class="btn btn-default disabled">10.10 - 10.20</a>
					                <a href="#" class="btn btn-default disabled">10.20 - 10.30</a>
					                <a href="#" class="btn btn-default">10.30 - 10.40</a>
					                <a href="#" class="btn btn-default disabled">10.40 - 10.50</a>
					                <a href="#" class="btn btn-default">10.50 - 11.00</a>
					                <a href="#" class="btn btn-default">11.00 - 11.10</a>
					                <a href="#" class="btn btn-default disabled">11.10 - 11.20</a>
					                <a href="#" class="btn btn-default">11.20 - 11.30</a>
	              				</div>
							</center>
						</div>
						<div class="mdl-cell" style="margin-left: auto; margin-right: auto;">
							<center>
								<span class="mdl-color-text--primary mdl-typography--title">
									บ่าย
								</span>
								<br>
								<div class="btn-group-vertical">
					                <a href="#" class="btn btn-default">13.00 - 13.10</a>
					                <a href="#" class="btn btn-default disabled">13.10 - 13.20</a>
					                <a href="#" class="btn btn-default disabled">13.20 - 13.30</a>
					                <a href="#" class="btn btn-default disabled">13.30 - 13.40</a>
					                <a href="#" class="btn btn-default disabled">13.40 - 13.50</a>
					                <a href="#" class="btn btn-default">13.50 - 14.00</a>
					                <a href="#" class="btn btn-default">14.00 - 14.10</a>
					                <a href="#" class="btn btn-default disabled">14.10 - 14.20</a>
					                <a href="#" class="btn btn-default disabled">14.20 - 14.30</a>
					                <a href="#" class="btn btn-default disabled">14.30 - 14.40</a>
					                <a href="#" class="btn btn-default disabled">14.40 - 14.50</a>
					                <a href="#" class="btn btn-default">14.50 - 15.00</a>
					                <a href="#" class="btn btn-default disabled">15.00 - 15.10</a>
					                <a href="#" class="btn btn-default disabled">15.10 - 15.20</a>
					                <a href="#" class="btn btn-default disabled">15.20 - 15.30</a>
		              				</div>
							</center>
						</div>
					</div>
				</div>
              	<center>
	              	<div class="mdl-shadow--2dp" style="padding: 16px; width: auto; display: inline-block;">
		              	<span style="font-size: large;">วันนัด: </span>
		              	<span id="date-display" class="mdl-color-text--primary mdl-typography--title" style="padding-left: 4px;">พุธที่ 25 พฤศจิกายน 2015</span>
		              	<br>
		              	<span style="font-size: large;">เวลา: </span>
		              	<span id="time-display" class="mdl-color-text--primary mdl-typography--title" style="padding-left: 4px;">09.00 - 09.10 น.</span>
	              	</div>
	              	<br>
              		<a href="staff_newapp_confirm.php">
              			<button
              				class="mdl-button mdl-button--raised mdl-button--colored center"
              				style="margin-top: 16px;">
              				ต่อไป
              			</button>
              		</a>
              	</center>
  			</div>
  		</div>
  		<div class="mdl-cell mdl-cell--3-col">
      
    	</div>
	</div>
</main>

<!-- onSelectDateCallBack -->
<script>
	$("div.btn-group-vertical").on('click', 'a', function(e){
    	e.preventDefault();

    	$("div.btn-group-vertical").find(".btn-primary").removeClass("btn-primary").addClass("btn-default")
    	$(this).removeClass("btn-default").addClass("btn-primary");

    	var selectedTime = $(this).text();
    	$("#time-display").text(selectedTime);

    	//----- get selected time here -----
	});
</script>

<!-- import custom js -->
<script src="js/bootstrap.min.js"></script>
<script src="js/ripples.min.js"></script>


<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.th.min.js"></script>

<!-- setup calendar -->
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