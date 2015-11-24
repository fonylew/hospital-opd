<?php
include_once "header.php";
include_once "nav_staff.php";
?>

<!-- setup actionbar -->
<script type="text/javascript">
	$("#actionbar-left").append("<label onClick=\"browserBack()\" class=\"mdl-button mdl-js-button mdl-button--icon\" for=\"fixed-header-drawer-exp\"><i class=\"material-icons\">arrow_back</i></label>");
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">ค้นหานัดหมาย</div>");
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
    	<div class="mdl-cell mdl-cell--6-col">
    		<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col" style="padding:24px; color: mdl-primary;">
				<p class="mdl-color-text--primary mdl-typography--display-1" align="center" >
					เลือกวันเวลาที่ต้องการดูนัดหมาย
				</p>
				<div class="mdl-grid">
					<div class="mdl-shadow--2dp mdl-cell mdl-cell--4-col" style="display: inline-block; padding: 16px; min-width: 260px; margin-left: auto; margin-right: auto;">
						<!-- calendar -->
						<div class="datepicker datepicker-inline" style="margin-left: auto; margin-right: auto;"></div>
					</div>
				</div>
              	<center>
              		<a href="staff_viewapp_result.php">
              			<button
              				class="mdl-button mdl-button--raised mdl-button--colored center"
              				style="margin-top: 16px;">
              				ดูนัดหมาย
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