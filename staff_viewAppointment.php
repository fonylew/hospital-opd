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

<!-- for dropdown -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.paper.min.css">
<link rel="stylesheet" type="text/css" href="css/material-fullpalette.css">
<link rel="stylesheet" type="text/css" href="css/ripples.min.css">
<link rel="stylesheet" type="text/css" href="css/roboto.min.css">

<!-- for calendar -->
<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.css">

<!-- setup actonbar -->
<script type="text/javascript">
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">ใบนัดแพทย์</div>");
	
	$("#actionbar-right").append("<button id=\"demo-menu-lower-right\"class=\"mdl-button mdl-js-button mdl-button--icon\"><i class=\"material-icons\">filter_list</i></button><ul class=\"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\"for=\"demo-menu-lower-right\">"+
		"<div class=\"mdl-grid\"> <div class=\"mdl-cell mdl-cell--9-col\"style=\"min-width:300px ;padding: 10px;display: inline-block;\"> <!-- Select Date --> <div class=\"mdl-cell mdl-cell--4-col mdl-shadow--2dp\" style=\"display: inline-block; padding: 16px; min-width: 260px; margin-right: auto;\"> <!-- calendar --> <div class=\"datepicker datepicker-inline\" style=\"color:#666666; margin-left: auto; margin-right: auto;\"></div> </div> <!-- Select Doctor --> <div class=\"mdl-cell mdl-cell--4-col mdl-shadow--2dp\"style=\"margin-left:10px; position:relative; top:0px; height:300px; display: inline-block; min-width:260px;\"> <div id=\"dropdown-menu\" style=\"color:#666666; position: relative; width: 90%; margin-left: auto; margin-right: auto;\"> <div class=\"form-group\"> <label for=\"s1\">เลือกแผนกที่ต้องการเข้าตรวจ</label> <select id=\"s1\" class=\"form-control\"> <option value=\"department_0\">โปรดเลือกแผนก</option> <option value=\"department_1\">DEPARTMENT_NAME1</option> </select> </div> <br> <div class=\"form-group\"> <label for=\"s1\">เลือกแพทย์ที่ต้องการนัด (ไม่จำเป็นต้องเลือก)</label> <select id=\"s1\" class=\"form-control\"> <option value=\"doc_id_จ\">ไม่ระบุแพทย์</option> <option value=\"doc_id_1\">Dr. NAME1 SURMANE1</option> <option value=\"doc_id_2\">Dr. NAME2 SURMANE2</option> </select> </div> </div> </div> <center> <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect\" style=\"margin-right:1em\"> Clear </button> <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\"> Apply </button> </center> </div> </div>"+"</ul>");

	//<div class=\"mdl-cell mdl-cell--4-col\" style=\"display: inline-block; padding: 16px; min-width: 260px; margin-left: auto; margin-right: auto;\"><div class=\"datepicker datepicker-inline\" style=\"color:#666666;margin-left: auto; margin-right: auto;\"></div><center>\<button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect\" style=\"margin-right:1em\">Clear</button><button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\">Apply</button></center></div>
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
		<div class="mdl-cell mdl-cell--10-col">
    		<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col" 
    				style="padding:24px; color: mdl-primary;">

				<p class="mdl-color-text--primary mdl-typography--display-1" align="center" >
					Test Filter Area (Bug T^T)
				</p>

				<!-- In the Filter Menu -->
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--9-col mdl-shadow--2dp" 
							style="min-width:300px ;padding: 10px;display: inline-block;">
						
						<!-- Select Date -->
						<div class="mdl-cell mdl-cell--4-col mdl-shadow--2dp" style="display: inline-block; padding: 16px; min-width: 260px; margin-right: auto;">
							<!-- calendar -->
							<div class="datepicker datepicker-inline" style="color:#666666; margin-left: auto; margin-right: auto;"></div>
						</div>

						<!-- Select Doctor -->
						<div class="mdl-cell mdl-cell--4-col mdl-shadow--2dp" 
								style="margin-left:10px; position:relative; top:0px; height:300px; display: inline-block; min-width:260px;">
							<div id="dropdown-menu" style="color:#666666; position: relative; width: 90%; margin-left: auto; margin-right: auto;">
								<div class="form-group">
				                	<label for="s1">เลือกแผนกที่ต้องการเข้าตรวจ</label>
			                		<select id="s1" class="form-control">
					                  <option value="department_0">โปรดเลือกแผนก</option>
					                  <option value="department_1">DEPARTMENT_NAME1</option>
					                  <option value="department_2">DEPARTMENT_NAME2</option>
					                  <option value="department_3">DEPARTMENT_NAME3</option>
					                  <option value="department_4">DEPARTMENT_NAME4</option>
					                  <option value="department_5">DEPARTMENT_NAME5</option>
			                		</select>
				              	</div>
				              	<br>
								<div class="form-group">
				                	<label for="s1">เลือกแพทย์ที่ต้องการนัด (ไม่จำเป็นต้องเลือก)</label>
			                		<select id="s1" class="form-control">
					                  <option value="doc_id_จ">ไม่ระบุแพทย์</option>
					                  <option value="doc_id_1">Dr. NAME1 SURMANE1</option>
					                  <option value="doc_id_2">Dr. NAME2 SURMANE2</option>
					                  <option value="doc_id_3">Dr. NAME3 SURMANE3</option>
					                  <option value="doc_id_4">Dr. NAME4 SURMANE4</option>
					                  <option value="doc_id_5">Dr. NAME5 SURMANE5</option>
					                  <option value="doc_id_6">Dr. NAME6 SURMANE6</option>
					                  <option value="doc_id_7">Dr. NAME7 SURMANE7</option>
					                  <option value="doc_id_8">Dr. NAME8 SURMANE8</option>
					                  <option value="doc_id_9">Dr. NAME9 SURMANE9</option>
					                  <option value="doc_id_10">Dr. NAME10 SURMANE10</option>
			                		</select>
				              	</div>
			              	</div>
						</div>
						
						<center>
							<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="margin-right:1em">
  								Clear
							</button>
							<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  								Apply
							</button>
						</center>

					</div>
				</div>
				<!-- End Filter Menu -->
  			</div>
  		</div>

	<!-- FAB button with ripple -->
	<a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" 
	id="add-button" 
	href="patient_newapp_seldoc.php">
	<i class="material-icons">add</i>
</a>
</main>

<!-- import custom js -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dropdown.js"></script>
<script src="js/ripples.min.js"></script>
<script>
  $("#dropdown-menu select").dropdown();
</script>

<!-- setup calendar -->
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.th.min.js"></script>
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