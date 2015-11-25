<?php

include_once "header.php";
include_once "nav_doctor.php";
include_once "control_doctor.php";

$medicine_list = getMedicineList();
$medicine_count = sizeof($medicine_list);

if (isset($_GET['diagnose_appoint_id'])) {
	$diagnose_appoint_id = $_GET['diagnose_appoint_id'];
	$diagnose_appoint_hn = $_GET['diagnose_appoint_hn'];
	$diagnose_appoint_name = $_GET['diagnose_appoint_name'];
	$diagnose_appoint_date = $_GET['diagnose_appoint_date'];
	$diagnose_appoint_time = $_GET['diagnose_appoint_time'];
	$generaldetail = getMedrecGeneralDetail($diagnose_appoint_id);
}

?>

<!-- setup actionbar -->
<script type="text/javascript">
	$("#actionbar-left").append("<label onClick=\"browserBack()\" class=\"mdl-button mdl-js-button mdl-button--icon\" for=\"fixed-header-drawer-exp\"><i class=\"material-icons\">arrow_back</i></label>");
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">บันทึกผลการตรวจ</div>");
</script>
<script type="text/javascript">
	function browserBack(){
		window.history.back();
	}
</script>

<!-- for dropdown -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/material-fullpalette.css">
<link rel="stylesheet" type="text/css" href="css/jquery.dropdown.css">
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
	.no-padding {
		padding: 0px;
	}
	.divider {
		height: 1px;
		background-color: rgba(0,0,0,0.12);
		margin-top: 24px;
		margin-bottom: 24px;
	}
</style>

<!-- import function -->
<script src="js/doctor_diagnose_function.js"></script>

<main class="mdl-layout__content">
	<div class="mdl-grid page-content">
		<div class="mdl-cell mdl-cell--9-col mdl-color--white mdl-shadow--2dp mdl-grid" style="padding:24px; color: mdl-primary;">
			
			<!-- appointment detail -->
			<span class="mdl-color-text--primary mdl-cell--12-col" style="font-size: x-large; margin-left: 1em;">รายละเอียดการนัด</span>
			<div class="mdl-grid mdl-cell--9-col" style="margin-left: 16px; padding-bottom: 0px;">
				<div class="mdl-cell--12-col mdl-grid no-padding">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: medium; ">หมายเลขนัด: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="appId" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;"><?php echo $diagnose_appoint_id;?></span>
					</div>
				</div>
				
				<div class="mdl-cell--12-col mdl-grid no-padding">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: medium; ">HN: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="hn" class="mdl-color-text--primary" style="padding-left: 8px; font-size: medium;"><?php echo $diagnose_appoint_hn;?></span>
					</div>
				</div>
				
				<div class="mdl-cell--12-col mdl-grid no-padding">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: medium; ">ชื่อผู้ป่วย: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="patientName" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;"><?php echo $diagnose_appoint_name;?></span>
					</div>
				</div>
				
				<div class="mdl-cell--12-col mdl-grid no-padding">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: medium; ">วัน: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="date" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;"><?php echo $diagnose_appoint_date;?></span>
					</div>
				</div>
				
				<div class="mdl-cell--12-col mdl-grid no-padding">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: medium; ">เวลา: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="time" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;"><?php echo $diagnose_appoint_time;?></span>
					</div>
				</div>

			</div>

			<!-- patient picture -->
			<div class="mdl-cell--3-col" style="margin: auto;">
				<img src="dashboard/images/dog.png" style="width: 100%;">
			</div>

			<div class="mdl-cell--12-col divider"></div>

			<!-- patient info from nurse -->
			<span class="mdl-color-text--primary mdl-cell--12-col" style="font-size: x-large; margin-left: 1em; margin-bottom: 16px;">การตรวจร่างกายเบื้องต้น</span>
			<div class="mdl-cell--12-col" style="overflow: auto;">
				<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width: auto; margin-left: auto; margin-right: auto;">
					<thead>
						<tr>
							<th>น้ำหนัก</th>
							<th>ส่วนสูง</th>
							<th>อุณหภูมิร่างกาย</th>
							<th>อัตราการเต้นของหัวใจ</th>
							<th>ความดันโลหิต</th>
						</tr>
					</thead>
					<tbody>
						<tr id = "generaldetail_table">
						</tr>
					</tbody>
				</table>
			</div>

			<div class="mdl-cell--12-col divider" style="margin-top:32px;"></div>

			<!-- diagnose memo -->
			<span class="mdl-color-text--primary mdl-cell--12-col" style="font-size: x-large; margin-left: 1em;">บันทึกการตรวจ</span>
			<div class="mdl-cell--12-col mdl-grid" style="margin-left: auto; margin-right: auto; padding-top: 0px;">
				<div class="mdl-cell--5-col" style="margin-top: 14px; margin-left: auto; margin-right: auto;">
				<!--<div id="dropdown-menu" class="mdl-cell--5-col" style="margin-top: 14px; margin-left: auto; margin-right: auto;">-->
					<div class="form-group" style="margin-top: 0px;">
						<select id="s1" class="form-control" onchange="changeIllnessList()">
							<option value="-">-- ประเภทรหัสโรค --</option>
							<option value="ICD10">ICD10</option>
							<option value="SNOMED">SNOMED</option>
							<option value="DRG">DRG</option>
						</select>
					</div>
				</div>
				<div class="mdl-cell--5-col" style="margin-left: auto; margin-right: auto;">
					<div class="form-group" style="margin-top: 15px;">
						<select id="s2" class="form-control">
							<option value="-">-- รหัสโรค --</option>
						</select>
					</div>
				</div>
				<div class="mdl-cell--11-col" style="margin-left: auto; margin-right: auto;">
					<form action="#">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
							<input class="mdl-textfield__input" type="text" id="description" />
							<label class="mdl-textfield__label" for="username" id="user-label">รายละเอียด</label>
						</div>
					</form>
				</div>
			</div>

			<div class="mdl-cell--12-col divider" style="margin-top:32px;"></div>

			<!-- prescription -->
			<span class="mdl-color-text--primary mdl-cell--12-col" style="font-size: x-large; margin-left: 1em;">การสั่งยา</span>

			<div id="prescription-box" class="mdl-cell--12-col mdl-grid" style="margin: 0; padding: 0;"></div>

			<div class="mdl-cell--12-col mdl-grid">
				<div class="mdl-cell--4-col" style="margin-left: auto; margin-right: auto;">
					<center>
						<button onclick="addMedicineClicked()" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab" style="background-color: rgba(220,220,220,1); margin-bottom: 10px; ">
							<i class="material-icons">add</i>
						</button>
						<br>
						<span>เพิ่มชนิดยา</span>
					</center>
				</div>
			</div>
			
			<div class="mdl-cell--12-col divider"></div>

			<!-- next appointment -->
			<span class="mdl-color-text--primary mdl-cell--12-col" style="font-size: x-large; margin-left: 1em;">การนัดครั้งถัดไป</span>
			<div class="mdl-cell--3-col" style="margin: auto; padding-top: 16px; padding-left: 32px;">
				<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" onchange="onToggleNextApp(this)" for="next-app-checkbox">
					<input type="checkbox" id="next-app-checkbox" class="mdl-checkbox__input">
					<span style="font-size: medium; font-weight: 300;">นัดครั้งถัดไป</span>
				</label>
			</div>
			<div class="mdl-cell--4-col" style="margin-left: auto; margin-right: auto;">
				<form action="#">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
						<input class="mdl-textfield__input" type="text" id="code" />
						<label class="mdl-textfield__label" for="username" id="user-label">จำนวน</label>
					</div>
				</form>
			</div>
			<div id="dropdown-menu" class="mdl-cell--4-col" style="margin-top: 14px; margin-left: auto; margin-right: auto;">
				<div class="form-group" style="margin-top: 0px;">
					<select id="s2" class="form-control">
						<option value="-">-- หน่วย --</option>
						<option value="unit_1">วัน</option>
						<option value="unit_2">สัปดาห์</option>
						<option value="unit_2">เดือน</option>
					</select>
				</div>
			</div>


			<center class="mdl-cell--12-col" style="margin-top: 16px;">
				<button class="mdl-button mdl-button--raised mdl-color-text--primary mdl-color--white" onClick="showClearConfirm()">
					ลบทั้งหมด
				</button>
				<button class="mdl-button mdl-button--raised mdl-button--colored" style="margin-left: 16px;" onClick="showSubmitDiagnoseConfirm()">
					บันทึกผลการตรวจ
				</button>
			</center>
		</div>
		<div class="mdl-cell mdl-cell--3-col">

		</div>
	</div>
</main>

<!-- import custom js -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dropdown.js"></script>
<script src="js/ripples.min.js"></script>

<script>

	var medicine_list = <?php echo json_encode($medicine_list,JSON_FORCE_OBJECT)?>;
	var medicine_count = <?php echo json_encode($medicine_count,JSON_FORCE_OBJECT)?>;	
	var diagnose_appoint_id = <?php echo json_encode($diagnose_appoint_id,JSON_FORCE_OBJECT)?>;
	var medicineCount = 0;

	var generaldetail = <?php echo json_encode($generaldetail,JSON_FORCE_OBJECT)?>;
	$("#generaldetail_table").append("<td style='font-size: large;''>"+generaldetail.weight+" kg.</td>");
	$("#generaldetail_table").append("<td style='font-size: large;''>"+generaldetail.height+" cm.</td>");
	$("#generaldetail_table").append("<td style='font-size: large;''>"+generaldetail.temperature+" ํC</td>");
	$("#generaldetail_table").append("<td style='font-size: large;''>"+generaldetail.heartRate+" ครั้ง/นาที</td>");
	$("#generaldetail_table").append("<td style='font-size: large;''>"+generaldetail.bloodPressure+"</td>");

	$("#dropdown-menu select").dropdown();
	
	function addMedicineClicked() {
		medicineCount++;
		addPrescription(medicineCount);
	}

	function changeIllnessList() {
		var illness_type = document.getElementById("s1").value;
		if (illness_type != '-') {
			$.ajax({
	            url: 'control_doctor.php',
	            type: 'POST',
	            data: {illness_type: illness_type},
	            dataType: "json",
	            success: function(data) {
	            	$('#s2').empty();
	            	$('#s2').append('<option value="-">-- รหัสโรค --</option>');
	                for (var i = 0; i < Object.keys(data).length; i++) {
	                	$('#s2').append('<option value="'+data[i].illness_code+'">'+data[i].illness_name+'</option>');
	                }
	            }
        	});
		} 
	}

</script>

<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.th.min.js"></script>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>