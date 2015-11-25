<?php
include_once "header.php";
include_once "nav_staff.php";
$doctor_username = $_GET['editschedule_doctorusername'];
?>

<!-- setup actionbar -->
<script type="text/javascript">
	$("#actionbar-left").append("<label onClick=\"browserBack()\" class=\"mdl-button mdl-js-button mdl-button--icon\" for=\"fixed-header-drawer-exp\"><i class=\"material-icons\">arrow_back</i></label>");
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">แก้ไขตารางเข้าตรวจ</div>");
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
				<div class="mdl-grid">
					<div class="mdl-cell--4-col" style="display: inline-block; min-width: 260px; margin-left: auto; margin-right: auto;">

						<center><div id="hint" style="margin-bottom: 16px;">
							<i class="material-icons">help</i><br>
							<span stlye="">วิธีการใข้งาน</span>
						</div><center>

						<div class="mdl-tooltip mdl-tooltip--large" style="width: 300px; max-width: 500px;" for="hint">
							<ol>
								<li>เลือกวันทีต้องการกำหนดตารางเวลา</li>
								<li>กดที่ช่วงเวลาที่ต้องการตั้งสถานะ:
									<br>สีเขียว: เข้าตรวจ
									<br>สีขาว: ไม่เข้าตรวจ

								</li>
							</ol>
						</div>
						
						<div class="mdl-shadow--2dp" style=" height: 332px; padding-top: 16px; padding-bottom: 16px;">
							<!-- calendar -->
							<div class="datepicker datepicker-inline" style="margin-left: auto; margin-right: auto; margin-bottom: auto;"></div>
						</div>
					</div>

					<div class="mdl-cell--8-col" style="margin-left: auto; margin-right: auto; margin-bottom: 16px;">
						<div style="margin-bottom: 8px;">
							<center style=" margin-top: 16px; margin-bottom: 16px;">
								<button id="clear" class="mdl-button mdl-button--raised mdl-button--colored center" style="margin-right: 16px;">
									<i class="material-icons"  style="padding-right: 16px;">close</i>ล้างทั้งหมด
								</button>
								<button id="all" class="mdl-button mdl-button--raised mdl-button--colored center">
									<i class="material-icons"  style="padding-right: 16px;">check</i>เลือกทั้งหมด
								</button>
							</center>
						</div>
						<div class="mdl-shadow--2dp mdl-grid">
							<div class="mdl-cell" style="margin-left: auto; margin-right: auto;">
								<center>
									<span class="mdl-color-text--primary mdl-typography--title">
										เช้า
									</span>
									<br>
									<div class="btn-group-vertical">
										<a href="#" id="timeslot1" class="btn btn-default">09.00 - 09.10</a>
										<a href="#" id="timeslot2" class="btn btn-default">09.10 - 09.20</a>
										<a href="#" id="timeslot3" class="btn btn-default">09.20 - 09.30</a>
										<a href="#" id="timeslot4" class="btn btn-default">09.30 - 09.40</a>
										<a href="#" id="timeslot5" class="btn btn-default">09.40 - 09.50</a>
										<a href="#" id="timeslot6" class="btn btn-default">09.50 - 10.00</a>
										<a href="#" id="timeslot7" class="btn btn-default">10.00 - 10.10</a>
										<a href="#" id="timeslot8" class="btn btn-default">10.10 - 10.20</a>
										<a href="#" id="timeslot9" class="btn btn-default">10.20 - 10.30</a>
										<a href="#" id="timeslot10" class="btn btn-default">10.30 - 10.40</a>
										<a href="#" id="timeslot11" class="btn btn-default">10.40 - 10.50</a>
										<a href="#" id="timeslot12" class="btn btn-default">10.50 - 11.00</a>
										<a href="#" id="timeslot13" class="btn btn-default">11.00 - 11.10</a>
										<a href="#" id="timeslot14" class="btn btn-default">11.10 - 11.20</a>
										<a href="#" id="timeslot15" class="btn btn-default">11.20 - 11.30</a>
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
										<a href="#" id="timeslot16" class="btn btn-default">13.00 - 13.10</a>
										<a href="#" id="timeslot17" class="btn btn-default">13.10 - 13.20</a>
										<a href="#" id="timeslot18" class="btn btn-default">13.20 - 13.30</a>
										<a href="#" id="timeslot19" class="btn btn-default">13.30 - 13.40</a>
										<a href="#" id="timeslot20" class="btn btn-default">13.40 - 13.50</a>
										<a href="#" id="timeslot21" class="btn btn-default">13.50 - 14.00</a>
										<a href="#" id="timeslot22" class="btn btn-default">14.00 - 14.10</a>
										<a href="#" id="timeslot23" class="btn btn-default">14.10 - 14.20</a>
										<a href="#" id="timeslot24" class="btn btn-default">14.20 - 14.30</a>
										<a href="#" id="timeslot25" class="btn btn-default">14.30 - 14.40</a>
										<a href="#" id="timeslot26" class="btn btn-default">14.40 - 14.50</a>
										<a href="#" id="timeslot27" class="btn btn-default">14.50 - 15.00</a>
										<a href="#" id="timeslot28" class="btn btn-default">15.00 - 15.10</a>
										<a href="#" id="timeslot29" class="btn btn-default">15.10 - 15.20</a>
										<a href="#" id="timeslot30" class="btn btn-default">15.20 - 15.30</a>
									</div>
								</center>
							</div>
						</div>
					</div>
				</div>
				<center>
					<a href="javascript:void(0)" onclick="saveChanges()">
						<button
						class="mdl-button mdl-button--raised mdl-button--colored center"
						style="margin-top: 16px;">
						<i class="material-icons" style="padding-right: 16px;">save</i>บันทึก
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

		if($(this).hasClass("work")){
			$(this).removeClass("btn-primary").removeClass("work").addClass("btn-default");
		} else {
			$(this).removeClass("btn-default").addClass("btn-primary").addClass("work");
		}

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

	var doctor_username = <?php echo json_encode($doctor_username,JSON_FORCE_OBJECT)?>;
	var selectedDate;

	$('.datepicker').datepicker({
		language: 'th',
		todayBtn: "linked"
	}).on("changeDate", function(e) {
		$("a.btn").removeClass("btn-primary").removeClass("work").addClass("btn-default");
		var date = new Date(e["date"]);
		selectedDate = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();
      	$.ajax({
          	url: 'control_doctor.php',
          	type: 'POST',
          	data: {schedule_date: selectedDate, schedule_doctor: doctor_username},
          	dataType: "json",
          	success: function(data) {
             	for (var i = 0; i < Object.keys(data).length; i++) {
             		$("#timeslot"+data[i].worktime_slot).removeClass("btn-default").addClass("btn-primary").addClass("work");
             	}
          	}	
      	});
	});
</script>

<script>

	$('#clear').click(function(){
		console.log('clear');
		$("a.btn").removeClass("btn-primary").removeClass("work").addClass("btn-default");
	});
	$('#all').click(function(){
		console.log('all');
		$("a.btn").removeClass("btn-default").addClass("btn-primary").addClass("work");
	});

	function saveChanges() {
		var worktimes = [];
		for (var i = 0; i < 31; i++) {
			if ($("#timeslot"+(i+1)).hasClass("work")) worktimes[i] = 1;
			else worktimes[i] = 0;
		}
		worktimes = JSON.stringify(worktimes);
      	$.ajax({
          	url: 'control_doctor.php',
          	type: 'POST',
          	data: {save_schedule_date: selectedDate, save_schedule_doctor: doctor_username, save_schedule_worktime: worktimes},
          	success() {
          		alert("Update schedule successfully.");
          	}
      	});
	}

</script>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>