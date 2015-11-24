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
		<div id = "log0" class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col">
            <div class="section__text mdl-grid">
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
				<!-- just for testing delete this button later -->
				<button id = "test" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onClick="printAllprescription()">
					test
				</button>
				<button id = "det0" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onClick="printMedList(0)">
					show detail
				</button>

            </div>
        </div>

	</div>


	<script>
	function deletePrescription(idIn){
		document.getElementById("log"+idIn).remove();
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
	function printMedList(k){
		document.getElementById("medList"+k).innerHTML = "";
		for (var i = 1; i >= 0; i--) {
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

			document.getElementById("medList"+k).appendChild(nameNode);
			document.getElementById("medList"+k).appendChild(detailNode);
				
		};
	};

	var k = 0;
	function printAllprescription(){
		k = k+1;
		var div_log0 = document.createElement('div');
		   div_log0.id = "log0";
		   div_log0.className = "mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col";

		   var div_0 = document.createElement('div');
		      div_0.className = "section__text mdl-grid";

		      var div_1 = document.createElement('div');
		         div_1.className = "mdl-cell mdl-cell--3-col";

		         var img_0 = document.createElement('img');
		            img_0.src = "dashboard/images/user.jpg";
		            img_0.height = "80%";
		            img_0.width = "80%";
		            img_0.style.padding = "10px";
		            img_0.style.marginRight = "auto";
		            img_0.style.marginLeft = "auto";
		            img_0.border = 0;
		         div_1.appendChild( img_0 );

		      div_0.appendChild( div_1 );


		      var div_2 = document.createElement('div');
		         div_2.className = "mdl-cell mdl-cell--9-col";

		         var h5_0 = document.createElement('h5');
		            h5_0.appendChild( document.createTextNode("Name: ") );
		         div_2.appendChild( h5_0 );


		         var h5_1 = document.createElement('h5');
		            h5_1.appendChild( document.createTextNode("Doctor: ") );
		         div_2.appendChild( h5_1 );


		         var h5_2 = document.createElement('h5');
		            h5_2.appendChild( document.createTextNode("Time: ") );
		         div_2.appendChild( h5_2 );


		         var h5_3 = document.createElement('h5');
		            h5_3.appendChild( document.createTextNode("HN: ") );
		         div_2.appendChild( h5_3 );


		         var h5_4 = document.createElement('h5');
		            h5_4.appendChild( document.createTextNode("Medicine list") );
		         div_2.appendChild( h5_4 );


		         var div_medList0 = document.createElement('div');
		            div_medList0.className = "mdl-grid";
		            div_medList0.id = "medList"+k;
		         div_2.appendChild( div_medList0 );

		      div_0.appendChild( div_2 );

		      /* Raised button with ripple */

		      var button_acc0 = document.createElement('button');
		         button_acc0.id = "acc"+k;
		         button_acc0.onclick = function(){
		            popAccept(this.id)
		         };
		         button_acc0.className = "mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect";
		         button_acc0.appendChild( document.createTextNode("\n					Accept\n				") );
		      div_0.appendChild( button_acc0 );


		      var button_edi0 = document.createElement('button');
		         button_edi0.className = "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect";
		         button_edi0.onclick = function(){
		            popEdit(this.id)
		         };
		         button_edi0.id = "edi"+k;
		         button_edi0.appendChild( document.createTextNode("\n					Edit Prescription\n				") );
		      div_0.appendChild( button_edi0 );

		     // printMedList(this.id)
		      var button_det0 = document.createElement('button');
		         button_det0.onclick = function(){
		            printMedList(k)
		         };
		         button_det0.className = "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect";
		         button_det0.id = "det"+k;
		         button_det0.appendChild( document.createTextNode("\n					show detail\n				") );
		      div_0.appendChild( button_det0 );

		   div_log0.appendChild( div_0 );

		box1.appendChild( div_log0 );


	};
	</script>

</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>