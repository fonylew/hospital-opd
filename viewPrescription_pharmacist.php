<?php
include_once "header.php";
include_once "nav_pharmacist.php";
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
	            <div class = "mdl-grid">
	            	<div class = "mdl-cell mdl-cell--3-col">
	            		<div class = "mdl-card">
							<img src="dashboard/images/user.jpg" width="175" height="175" border="0" alt=""
							style="padding:10px; margin-right: auto; margin-left: auto;">	
	            		</div>
	            	</div>
	            	<div class = "mdl-cell mdl-cell--9-col">
		            	<div class = "mdl-grid">
			            	<div class = "mdl-cell mdl-cell--7-col">
								<h5>Date: </h5>
								<h5>Name: </h5>
								<h5>Doctor: </h5>
							</div>
							<div class = "mdl-cell mdl-cell--5-col">
								<h5>Time: </h5>
								<h5>HN: </h5>
							</div>
						</div>
						<div class = "mdl-cell mdl-cell--12-col">
							<h5>Medicine list</h5>
						</div>
						<div id = "medList" class = "mdl-cell mdl-cell--12-col"></div>
						
					</div>
				</div>

				<!-- Raised button with ripple -->
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
					Accept
				</button>
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
					Edit Prescription
				</button>
            </div>
        </div>
	</div>



	<script>		
	//function printMedList(){
		
		for (var i = 2; i >= 0; i--) {
			nameNode = document.createElement("div");
			nameNode.className = "mdl-cell mdl-cell--2-col";
			detailNode = document.createElement("div");
			detailNode.className = "mdl-cell mdl-cell--5-col"

			medF = document.createElement("h6");
			medName = document.createTextNode("Med"+i);
			medF.appendChild(medName);
			nameNode.appendChild(medF);

			detailF = document.createElement("h6");
			detaill = document.createTextNode("Let's random the detail!!!! adsfnjklwejmpxohrmfc[ihmc;dfkm[q2mgcjsbfdlmuchupowufpu");
			detailF.appendChild(detaill);
			detailNode.appendChild(detailF);

			document.getElementById("medList").appendChild(nameNode);
			document.getElementById("medList").appendChild(detailNode);
				
		};
	//};
	function addAppointment() {
			//get all appointments then change data below
			// for (var i = 0 ; i < 2; i++) {
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
			// };
		};
	</script>

	<!-- FAB button with ripple -->
	<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" 
			id="add-button" 
			onClick="addAppointment()">
		<i class="material-icons">add</i>
	</button>
</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>