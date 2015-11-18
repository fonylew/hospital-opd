<?php
include_once "header.php";
?>

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

	<script>		
		//get all appointments then change data below
		for (var i = 0 ; i < 2; i++) {
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
			node.className = "mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid";
			
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
	<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" id="add-button">
		<i class="material-icons">add</i>
	</button>
</main>

<?php
include_once "footer.php";
?>