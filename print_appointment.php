<!DOCTYPE html>
<!-- html will be closed in footer.php -->
<html>
<head>
	<title> Hospital OPD System </title>

	<link rel="stylesheet" href="css/material.teal-orange.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<script src="js/jquery-2.1.4.min.js"></script>

	<link rel="stylesheet" href="css/mdl-jquery-modal-dialog.css">
	<script src="js/mdl-jquery-modal-dialog.js"></script>
<head>

<!-- body will be closed in footer.php -->
<body>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.dropdown.css">
	<link rel="stylesheet" type="text/css" href="css/material-fullpalette.css">
	<link rel="stylesheet" type="text/css" href="css/ripples.min.css">
	<link rel="stylesheet" type="text/css" href="css/roboto.min.css">

	<main class="mdl-layout__content">
		<div class="mdl-grid page-content" id = "box1">
			<div id="appItem" 
					class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col mdl-grid"
					style="padding:15px">
				<p class="mdl-color-text--primary mdl-typography--display-1" align="center" >
					ใบนัดหมายพบแพทย์
				</p>
				<div class="mdl-cell--9-col mdl-grid">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: large; ">หมายเลขนัด: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="appId" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">123-456-789</span>
					</div>
				</div>
				<br>
				<div class="mdl-cell--9-col mdl-grid">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: large; ">ผู้ป่วย: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="deptName" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">นางสาว สมหญิง ซื่อสัตย์</span>
					</div>
				</div>
				<br>
				<div class="mdl-cell--9-col mdl-grid">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: large; ">แผนก: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="deptName" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">จิตเวช</span>
					</div>
				</div>
				<br>
				<div class="mdl-cell--9-col mdl-grid">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: large; ">แพทย์: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="docName" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">DOCNAME SURNAME</span>
					</div>
				</div>
				<br>
				<div class="mdl-cell--9-col mdl-grid">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: large; ">วัน: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="date" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">พุธที่ 25 พฤศจิกายน 2015</span>
					</div>
				</div>
				<br>
				<div class="mdl-cell--9-col mdl-grid">
					<div class="section__text mdl-cell mdl-cell--4-col">
						<span style="font-size: large; ">เวลา: </span>
					</div>
					<div class="section__text mdl-cell mdl-cell--6-col">
						<span id="time" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">09.00 - 09.10 น.</span>
					</div>
				</div>
				<br>

			</div>
		</div>
	</div>

<script src="js/material.js"></script>
<script src="js/material.min.js"></script>
<script> $.material.init(); </script>
	
<!-- close body and html from header.php -->
</body>
</html>