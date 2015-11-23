<?php
include_once "header.php";
include_once "nav_doctor.php";
?>

<!-- setup actionbar -->
<script type="text/javascript">
	$("#actionbar-left").append("<label onClick=\"browserBack()\" class=\"mdl-button mdl-js-button mdl-button--icon\" for=\"fixed-header-drawer-exp\"><i class=\"material-icons\">arrow_back</i></label>");
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">Diagnose</div>");
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
		margin-top: 16px;
		margin-bottom: 16px;
	}
</style>

<!-- import function -->
<script src="js/doctor_diagnose_function.js"></script>

<main class="mdl-layout__content">
	<div class="mdl-grid page-content">
		<div class="mdl-cell mdl-cell--10-col mdl-color--white mdl-shadow--2dp mdl-grid" style="padding:24px; color: mdl-primary;">
			
			<!-- appointment detail -->
			<div class="mdl-grid mdl-cell--9-col" style="margin-top: 16px; margin-left: 16px; padding-bottom: 0px;">
				<div class="mdl-cell--12-col mdl-grid no-padding">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: large; ">หมายเลขนัด: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="appId" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">123-456-789</span>
					</div>
				</div>
				
				<div class="mdl-cell--12-col mdl-grid no-padding">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: large; ">แผนก: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="deptName" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">DEPARTMENTNAME</span>
					</div>
				</div>
				
				<div class="mdl-cell--12-col mdl-grid no-padding">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: large; ">แพทย์: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="docName" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">DOCNAME SURNAME</span>
					</div>
				</div>
				
				<div class="mdl-cell--12-col mdl-grid no-padding">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: large; ">วัน: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="date" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">พุธที่ 25 พฤศจิกายน 2015</span>
					</div>
				</div>
				
				<div class="mdl-cell--12-col mdl-grid no-padding">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: large; ">เวลา: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="time" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">09.00 - 09.10 น.</span>
					</div>
				</div>

			</div>

			<!-- patient picture -->
			<div class="mdl-cell--3-col" style="margin: auto;">
				<img src="dashboard/images/dog.png" style="width: 100%;">
			</div>

			<div class="mdl-cell--12-col divider" style="margin-top:8px;"></div>

			<!-- patient info from nurse -->
			<table class="mdl-cell--12-col mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="margin-left: auto; margin-right: auto;">
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
					<tr>
						<td style="font-size: large;">75</td>
						<td style="font-size: large;">176</td>
						<td style="font-size: large;">37</td>
						<td style="font-size: large;">500</td>
						<td style="font-size: large;">500</td>
					</tr>
				</tbody>
			</table>



			<center class="mdl-cell--12-col">
				<button class="mdl-button mdl-button--raised mdl-button--colored" style="margin-top: 16px;" onClick="showSubmitDiagnoseConfirm()">
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
<script src="js/ripples.min.js"></script>


<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.th.min.js"></script>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>