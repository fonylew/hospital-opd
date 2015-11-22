<?php
include_once "header.php";
include_once "nav_patient.php";
?>

<!-- setup actonbar -->
<script type="text/javascript">
  $("#actionbar-middle").append("<div style=\"font-size:x-large\">ใบนัดแพทย์</div>");
</script>

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

		<!-- appointment itme -->
		<div id="appItem" class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col mdl-grid">
            <div class="section__text mdl-cell mdl-cell--3-col" style="margin-left: auto;">
				<div style="margin-top: 0px;">
					<span style="font-size: large; ">หมายเลขนัด: </span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
					<span style="font-size: large; ">แผนก: </span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
					<span style="font-size: large; ">แพทย์: </span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
					<span style="font-size: large; ">วัน: </span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
					<span style="font-size: large; ">เวลา: </span>
	        	</div>
	        	<br>
	        </div>
            <div class="section__text mdl-cell mdl-cell--6-col" style="margin-right: auto;">
				<div style="margin-top: 0px;">
	        		<span id="appId" class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">123-456-789</span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
	        		<span id="deptName" class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">DEPARTMENTNAME</span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
	        		<span id="docName" class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">DOCNAME SURNAME</span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
	        		<span id="date" class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">พุธที่ 25 พฤศจิกายน 2015</span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
	        		<span id="time" class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">09.00 - 09.10 น.</span>
	        	</div>
	        	<br>
	        </div>
	        <div class="section__text mdl-cell mdl-cell--12-col">
				<!-- Raised button with ripple -->
				<center>
					<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
						More Detail
					</button>
				</center>
            </div>
        </div>
        <div class="mdl-color--white mdl-cell mdl-cell--3-col">

        </div>
	</div>

	<script>		
		function addAppointment() {
			//prepare data
			appID = document.createElement("h5");
			appIDt = document.createTextNode("Appointment ID: getAppID>< ");
			appID.appendChild(appIDt);

			dep = document.createElement("h5");
			dept = document.createTextNode("Department: asdfjk");
			dep.appendChild(dept);

			dat = document.createElement("h5");
			datt = document.createTextNode("Date: xx/yy/zzzz");
			dat.appendChild(datt);

			tim = document.createElement("h5");
			timt = document.createTextNode("time: xx:xx");
			tim.appendChild(timt);

			//create button
			var bt = document.createElement("button");
			var bttext = document.createTextNode("More Detail");
			bt.className = "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect";
			bt.appendChild(bttext);

			//prepare node
			var nnode = document.createElement("div");
			var node = document.createElement("div");
			var t = document.createTextNode(appID);
			nnode.className = "section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone";
			node.className = "mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col mdl-grid";
			
			//add data to nnode
			nnode.appendChild(appID);
			nnode.appendChild(dep);
			nnode.appendChild(dat);
			nnode.appendChild(tim);
			nnode.appendChild(bt);

			//put everything in box1
			node.appendChild(nnode);
			document.getElementById("box1").appendChild(node);
		};
	</script>

	<!-- FAB button with ripple -->
	<a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" 
			id="add-button" 
			href="patient_newapp_seldoc.php">
		<i class="material-icons">add</i>
	</a>
</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>