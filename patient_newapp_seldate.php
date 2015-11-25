<?php
include_once "header.php";
include_once "nav_patient.php";
session_start();
$hn = $_SESSION['patient_hn'];
$doctor_user = $_POST['selectdoc'];
$departno = $_POST['departno'];
echo $doctor_user;
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
					                <a href="#" id="timeslot1" class="btn btn-default disabled">09.00 - 09.10</a>
					                <a href="#" id="timeslot2" class="btn btn-default disabled">09.10 - 09.20</a>
					                <a href="#" id="timeslot3" class="btn btn-default disabled">09.20 - 09.30</a>
					                <a href="#" id="timeslot4" class="btn btn-default disabled">09.30 - 09.40</a>
					                <a href="#" id="timeslot5" class="btn btn-default disabled">09.40 - 09.50</a>
					                <a href="#" id="timeslot6" class="btn btn-default disabled">09.50 - 10.00</a>
					                <a href="#" id="timeslot7" class="btn btn-default disabled">10.00 - 10.10</a>
					                <a href="#" id="timeslot8" class="btn btn-default disabled">10.10 - 10.20</a>
					                <a href="#" id="timeslot9" class="btn btn-default disabled">10.20 - 10.30</a>
					                <a href="#" id="timeslot10" class="btn btn-default disabled">10.30 - 10.40</a>
					                <a href="#" id="timeslot11" class="btn btn-default disabled">10.40 - 10.50</a>
					                <a href="#" id="timeslot12" class="btn btn-default disabled">10.50 - 11.00</a>
					                <a href="#" id="timeslot13" class="btn btn-default disabled">11.00 - 11.10</a>
					                <a href="#" id="timeslot14" class="btn btn-default disabled">11.10 - 11.20</a>
					                <a href="#" id="timeslot15" class="btn btn-default disabled">11.20 - 11.30</a>
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
					                <a href="#" id="timeslot16" class="btn btn-default disabled">13.00 - 13.10</a>
					                <a href="#" id="timeslot17" class="btn btn-default disabled">13.10 - 13.20</a>
					                <a href="#" id="timeslot18" class="btn btn-default disabled">13.20 - 13.30</a>
					                <a href="#" id="timeslot19" class="btn btn-default disabled">13.30 - 13.40</a>
					                <a href="#" id="timeslot20" class="btn btn-default disabled">13.40 - 13.50</a>
					                <a href="#" id="timeslot21" class="btn btn-default disabled">13.50 - 14.00</a>
					                <a href="#" id="timeslot22" class="btn btn-default disabled">14.00 - 14.10</a>
					                <a href="#" id="timeslot23" class="btn btn-default disabled">14.10 - 14.20</a>
					                <a href="#" id="timeslot24" class="btn btn-default disabled">14.20 - 14.30</a>
					                <a href="#" id="timeslot25" class="btn btn-default disabled">14.30 - 14.40</a>
					                <a href="#" id="timeslot26" class="btn btn-default disabled">14.40 - 14.50</a>
					                <a href="#" id="timeslot27" class="btn btn-default disabled">14.50 - 15.00</a>
					                <a href="#" id="timeslot28" class="btn btn-default disabled">15.00 - 15.10</a>
					                <a href="#" id="timeslot29" class="btn btn-default disabled">15.10 - 15.20</a>
					                <a href="#" id="timeslot30" class="btn btn-default disabled">15.20 - 15.30</a>
		              				</div>
							</center>
						</div>
					</div>
				</div>
              	<center>
              		<form method="post" action="patient_newapp_confirm.php">
	              	<div class="mdl-shadow--2dp" style="padding: 16px; width: auto; display: inline-block;">
		              	<span style="font-size: large;">วันนัด: </span>
		              	<span id="date-display" value="1234" class="mdl-color-text--primary mdl-typography--title" style="padding-left: 4px;">Select date</span>
		              	<br>
		              	<span style="font-size: large;">เวลา: </span>
		              	<span id="time-display" value="123" class="mdl-color-text--primary mdl-typography--title" style="padding-left: 4px;">select time</span>
	              		<input type="hidden" name="getdoctor" value="<?php echo $doctor_user;?>">
	              		<input type="hidden" name="departno" value="<?php echo $departno;?>">
	              		<input type="hidden" id="getdate" name="getdate" value="">
	              		<input type="hidden" id="gettime" name="gettime" value="">
	              		<input type="hidden" id="gettimeslot" name="gettimeslot" value="">
	              		<input type="hidden" id="getfulldate" name="getfulldate" value="">
	              	</div>
	              	<br>
              		
              			<button
              				class="mdl-button mdl-button--raised mdl-button--colored center"
              				style="margin-top: 16px;" type="submit" >
              				ต่อไป
              			</button>
              		</form>
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
    	document.getElementById("gettime").value = $(this).text();
    	var time = document.getElementById("gettime").value;
    	var gettimeslot = e.target.id;
    	document.getElementById("gettimeslot").value = gettimeslot; 
		console.log(gettimeslot);
	

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
	/*$('.datepicker').datepicker({
		language: 'th',
		todayBtn: "linked"
	}).on("changeDate", function(e) {
		var date = e["date"];

		//----- get selected date here -----
    }); */

    var selectedDate;
    var employee_username = '<?php echo $doctor_user;?>';
    console.log(employee_username);

	$('.datepicker').datepicker({
		language: 'th',
		todayBtn: "linked"
	}).on("changeDate", function(e) {
		$("a.btn").removeClass("btn-primary").removeClass("work").addClass("btn-default");
		var date = new Date(e["date"]);
		selectedDate = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();
		
		//display date
		var monthNames = ["January", "February", "March","April", "May", "June", "July","August", "September", "October","November", "December"];
		var day = date.getDate();
		var monthIndex = date.getMonth();
		var year = date.getFullYear();
		$("#date-display").text(day + ' ' + monthNames[monthIndex] + ' ' + year);

		
		document.getElementById("getdate").value = selectedDate;
		document.getElementById("getfulldate").value = day + ' ' + monthNames[monthIndex] + ' ' + year;
		console.log(getdate);
      
      	$.ajax({
          	url: 'control_doctor.php',
          	type: 'POST',
          	data: {schedule_date: selectedDate, schedule_doctor: employee_username},
          	dataType: "json",
          	success: function(data) {
             	for (var i = 0; i < Object.keys(data).length; i++) {
             		$("#timeslot"+data[i].worktime_slot).removeClass("disabled").addClass(" btn-default");
             		console.log(data[i].worktime_slot);
             	}
          	}	
      	});
	});
</script>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>