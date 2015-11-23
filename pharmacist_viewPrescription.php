<?php
include_once "header.php";
include_once "nav_pharmacist.php";
?>

<script>
  //$("#actionbar").empty();
  $("#actionbar-middle").append("View Prescription");
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
		<div id = "log0" class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col mdl-grid">
            <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone mdl-grid">
            	<div class = "mdl-cell mdl-cell--3-col">
					<img src="dashboard/images/user.jpg" width="80%" height="80%" border="0" alt=""
					style="padding:10px; margin-right: auto; margin-left: auto;">			
            	</div>
            	<div class = "mdl-cell mdl-cell--9-col">
						<h5>Name: </h5>
						<h5>Doctor: </h5>
						<h5>Time: </h5>
						<h5>HN: </h5>
						<h5>Medicine list</h5>
					<div id = "medList0" class = "mdl-grid"></div>
				</div>
				

				<!-- Raised button with ripple -->
				<button id= "acc0" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" onClick = "popAccept(this.id)">
					Accept
				</button>
				<button id = "edi0" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onClick = "popEdit(this.id)">
					Edit Prescription
				</button>
				<button id = "test" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onClick="printAllprescription()">
					test
				</button>
				<button id = "det0" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onClick="printMedList(this.id)">
					show detail
				</button>

            </div>
        </div>

	</div>


	<script>
	function printAllprescription(){
		for (var i = 1; i >= 0; i--) {
			//document.getElementById("log0").innerHTML="";
			div1 = document.createElement("div");
			div1.id = "log"+i;
			div1.className = "mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col mdl-grid";
			div2 = document.createElement("div");
			div2.className = "section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone";
			div3 = document.createElement("div");
			div3.className = "mdl-grid";

			div31 = document.createElement("div");
			div31.className = "mdl-cell mdl-cell--3-col";
			propic = document.createElement("img");
			propic.src = "dashboard/images/user.jpg"
			propic.style = "width:80%; height:80%;padding:10px;margin-right:auto;margin-left:auto;";
			div31.appendChild(propic);

			div32 = document.createElement("div");
			div32.className = "mdl-cell mdl-cell--9-col";
			n = "Hatsune Muki";
			d = "this is DName";
			t = "dd/mm/yyyy hh:mm";
			number = "xxx-xxxx-xx";
			hName = document.createElement("h5");
			name1 = document.createTextNode("Name: "+n+i);
			hName.appendChild(name1);
			hDoctor = document.createElement("h5");
			doctor = document.createTextNode("Doctor: "+d);
			hDoctor.appendChild(doctor);
			hHN = document.createElement("h5");
			hN = document.createTextNode("HN: "+number);
			hHN.appendChild(hN);
			hTime = document.createElement("h5");
			time = document.createTextNode("Time: " + t);
			hTime.appendChild(time);
			hMedList = document.createElement("h5");
			medListText = document.createTextNode("Medicine List");
			hMedList.appendChild(medListText);
			div32.appendChild(hName);
			div32.appendChild(hDoctor);
			div32.appendChild(hHN);
			div32.appendChild(hTime);
			div32.appendChild(hMedList);

			div321 = document.createElement("div");
			div321.id = "medList"+i;
			div321.className = "mdl-grid";
			div32.appendChild(div321);

			btAccept = document.createElement("button");
			btAccept.id = "acc"+i;
			btAccept.className = "mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect";
			acceptText = document.createTextNode("accept");
			btAccept.onclick="popAccept2(this.id)";
			btAccept.appendChild(acceptText);

			btEdit = document.createElement("button");
			btEdit.id = "edi"+i;
			btEdit.className ="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect";
			editText = document.createTextNode("Edit Prescription");
			btEdit.appendChild(editText);
			btEdit.onclick="popEdit("+btEdit.id+")";
			
			//btAccept.addEventListener("click", popAccept(btAccept.id));
			btDetail = document.createElement("button");
			btDetail.id = "det"+i;
			btDetail.className ="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect";
			detailText = document.createTextNode("Show Detail");
			btDetail.appendChild(detailText);
			btDetail.onclick="printMedList(this.id)";
			

			div3.appendChild(div31);
			div3.appendChild(div32);
			div3.appendChild(btAccept);
			div3.appendChild(btEdit);
			div3.appendChild(btDetail);

			div2.appendChild(div3);
			div1.appendChild(div2);
			document.getElementById("box1").appendChild(div1);
		};
	};
	function printMedList(nid){
		id = nid.substring(3);
		document.getElementById("medList"+id).innerHTML = "";
		for (var i = 2; i >= 0; i--) {
			nameNode = document.createElement("div");
			nameNode.className = "mdl-cell mdl-cell--2-col";
			detailNode = document.createElement("div");
			detailNode.className = "mdl-cell mdl-cell--10-col";

			medF = document.createElement("h6");
			medName = document.createTextNode("Med"+i);
			medF.appendChild(medName);
			nameNode.appendChild(medF);

			detailF = document.createElement("h6");
			detaill = document.createTextNode("Let's random the detail!!!! adsfnjklwejmpxohrmfc[i hmc;dfkm[q2mgcj sbfdlmuchupowufpu");
			detailF.appendChild(detaill);
			detailNode.appendChild(detailF);

			document.getElementById("medList"+id).appendChild(nameNode);
			document.getElementById("medList"+id).appendChild(detailNode);
				
		};
	};
	function deletePrescription(idIn){
		document.getElementById("log"+idIn).innerHTML = "";
		document.getElementById("log"+idIn).className = "";
	};
	function popAccept(idIn){
  		showDialog({
	    	title: '<span id="span_confirm">Confirmation</span>',
	    	 // title: 'Confirmation',
	      	text: '<h5 style">ยืนยันการจ่ายยา?</h5>',
	      	negative: {
		        id: 'cancel-button',
		        title: 'ยกเลิก',
		        onClick: function() { 
		          	
		        }
		    },
		    positive: {
		        id: 'ok-button',
		        title: 'ตกลง',
		        onClick: function() {
		        	del = idIn.substring(3);
		        	deletePrescription(del);
		        }
		    },
		    cancelable: false,		  	
		})
	};
	function popEdit(idIn){
		showDialog({
		    	title: '<span id="span_confirm">Edit Prescription</span>',
		    	 // title: 'Confirmation',
		      	text: '<h5 style="float:left;">Allergic problem</h5><input type="text" name="editdesc" style = "height: 100px;width:60%; float:right;"><br>',
		      	negative: {
			        id: 'cancel-button',
			        title: 'ยกเลิก',
			        onClick: function() { 
			          
			        }
			    },
			    positive: {
			        id: 'ok-button',
			        title: 'ตกลง',
			        onClick: function() {
				        	//send allergicproblem to doctor then delete the prescription
				        	del = idIn.substring(3);
			        	deletePrescription(del);
			        }
			    },
			    cancelable: false,		  	
			})
	};
	</script>

</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>