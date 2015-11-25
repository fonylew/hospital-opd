<?php
include_once "header.php";
include_once "nav_pharmacist.php";
?>

<script>
  //$("#actionbar").empty();
  $("#actionbar-middle").append("View Prescription");
</script>
<!-- Background (Grey) -->
<link rel="stylesheet" type="text/css" href="css/material-fullpalette.css">

<style>
	.large{
		font-size: large;
		
	}
	.x-large{
		font-size: x-large;
	}
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
		<!--<div id = "log0" class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col">
            <div class="section__text mdl-grid">
            <!--
            	<div class = "mdl-cell mdl-cell--3-col">
					<img src="dashboard/images/user.jpg" width="70%" height="70%"
					style="padding:10px; margin-right: auto; margin-left: auto;">			
            	</div>
            	
            	<div class = "mdl-cell mdl-cell--9-col mdl-grid">
            		<div class = "mdl-cell mdl-cell--2-col">
						<span class="large">Name: </span><br><br>
						<span class="large">Doctor: </span><br><br>
						<span class="large">Time: </span><br><br>
						<span class="large">HN: </span><br><br>
					</div>
					<div class = "mdl-cell mdl-cell--9-col">
						<span class="mdl-color-text--primary large">VY321 UUUU</span><br><br>
						<span class="mdl-color-text--primary large">VY321 UUUU</span><br><br>
						<span class="mdl-color-text--primary large">VY321 UUUU</span><br><br>
						<span class="mdl-color-text--primary large">VY321 UUUU</span>
					</div>
					<span class="large">Medicine list</span>
					<div id = "medList0" class = "mdl-grid"></div>
				</div>
				
				<button id= "acc0" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" onClick = "popAccept(this.id)">
					Accept
				</button>
				<button id = "edi0" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onClick = "popEdit(this.id)">
					Reject Prescription
				</button>


				<button id = "test" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onClick="printAllprescription()">
					test
				</button>
				<button id = "det0" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onClick="printMedList(0)">
					show detail
				</button>
			-->
            </div>
        </div>

	</div>


	<script>
	var k=0
	var a={};
	$(document).ready(function(){
		$.ajax({
          url: 'control_pharmacist.php',
          type: 'POST',
          data: {listprescript:true},
          dataType: "json",
          success: function(data) {
            console.log(data);
            for(var i = 0 ; i < Object.keys(data).length ;i++){
              var patient_name = data[i]['patient_initial']+data[i]['patient_fName']+" "+data[i]['patient_lName'];
              var doctor_name = data[i]['doctor_initial']+data[i]['doctor_fName']+" "+data[i]['doctor_lName'];
              a[k]=data[i]['prescript_id'];
              printAllprescription(patient_name,doctor_name,data[i]['datetime'],data[i]['hn']);
             console.log(a);
            }
          }
      	});
	});

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
		        	//WTF
		        	var index = parseInt(idIn.substring(3))-1;
		        	console.log('this is a = ');
		        	var pid = a[index];
		        	console.log(pid,employee_username);
		        	$.ajax({
		            	url: 'control_pharmacist.php',
		            	type: 'POST',
		            	data: {accept_prescript:pid ,pharmacist_username: employee_username},
		            	success: function(data) {
		            	  console.log(data);
		            	  if(data == 'true'){
		            	    console.log("accepted");
		            	    location.href = "pharmacist_viewPrescription.php";
		            	  }
		            	  else{
		            	    console.log(":( cannot accept");
		            	  }
		            	}
          			});
		        }
		    },
		    cancelable: false,		  	
		})
	};

	function popEdit(idIn){
		showDialog({
		    	title: '<span id="span_confirm">Reject Prescription</span>',
		    	 // title: 'Confirmation',
		      	//text: '<h5 style="float:left;">Allergic problem</h5><input type="text" name="editdesc" style = "height: 100px;width:60%; float:right;"><br>',
		      	text: '<h5 style">ต้องการแจ้งเปลี่ยนการจ่ายยาไปยังหมอเจ้าของไข้?</h5>',
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
			        //WTF
		        	var index = parseInt(idIn.substring(3))-1;
		        	console.log('this is a = ');
		        	var pid = a[index];
		        	console.log(pid,employee_username);
		        	$.ajax({
		            	url: 'control_pharmacist.php',
		            	type: 'POST',
		            	data: {reject_prescript:pid ,pharmacist_username: employee_username},
		            	success: function(data) {
		            	  console.log(data);
		            	  if(data == 'true'){
		            	    console.log("rejected");
		            	    location.href = "pharmacist_viewPrescription.php";
		            	  }
		            	  else{
		            	    console.log(":( cannot reject");
		            	  }
		            	}
          			});
			        }
			    },
			    cancelable: false,		  	
			})
	};
	function printMedList(idIn,prescript_id){
		//This line got error so I comment it out
		//document.getElementById("medList"+k).innerHTML = "";
		//getMedicine HERE
		//FONY code here not generated one.
			$.ajax({
            	url: 'control_pharmacist.php',
            	type: 'POST',
            	data: {listmedicine:prescript_id},
            	dataType: 'json',
            	success: function(data) {
            	  console.log(data);
            	  for(var i = 0 ; i < Object.keys(data).length ;i++){
		              var med_code = data[i]['med_code'];
		              var med_name = data[i]['med_name'];
		              var amount = data[i]['amount'];
		              var howto = data[i]['howTo'];

		             // Two Parameter in DOM here

		             var medicine = "["+med_code+"] "+med_name;
					 // var description = "จำนวน :  "+amount+"เม็ด  |       วิธีการใช้ : "+howto;
					 var description_amount = "จำนวน : "+amount+"เม็ด";
					 var description_howto ="วิธีการใช้ : "+howto;

		             //UNUN generated code
		             	num = idIn.substring(3);
						nameNode = document.createElement("div");
						nameNode.className = "mdl-cell mdl-cell--3-col";
						detailNode = document.createElement("div");
						detailNode.className = "mdl-cell mdl-cell--9-col";

						medF = document.createElement("h6");
						medName = document.createTextNode(medicine);
						medF.appendChild(medName);
						nameNode.appendChild(medF);
						
						// detailF = document.createElement("h6");
						// detaill = document.createTextNode(description);
						// detailF.appendChild(detaill);
						// detailNode.appendChild(detailF);
						detail_head_amount = document.createElement("h6");
						detail_amount = document.createTextNode(description_amount);

						detail_head_howto = document.createElement("h6");
						detail_howto = document.createTextNode(description_howto);

						detail_head_amount.appendChild(detail_amount);
						detail_head_howto.appendChild(detail_howto);
						detailNode.appendChild(detail_head_amount);
						detailNode.appendChild(detail_head_howto);

						document.getElementById("medList"+num).appendChild(nameNode);
						document.getElementById("medList"+num).appendChild(detailNode);

		          }
            	}
  			});
	}

	function printAllprescription(patient_name,doctor_name,datetime,hn){
	k = k+1;
		
	var div_log0 = document.createElement('div');
	   div_log0.className = "mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col";
	   div_log0.id = "log"+k;

	   var div_0 = document.createElement('div');
	      div_0.className = "section__text mdl-grid";

	      var div_1 = document.createElement('div');
	         div_1.className = "mdl-cell mdl-cell--3-col";

	         var img_0 = document.createElement('img');
	            img_0.src = "dashboard/images/user.jpg";
	            img_0.style.height = "70%";
	            img_0.style.padding = "10px";
	            img_0.style.marginRight = "auto";
	            img_0.style.marginLeft = "auto";
	            img_0.style.width = "70%";
	         div_1.appendChild( img_0 );

	      div_0.appendChild( div_1 );


	      var div_2 = document.createElement('div');
	         div_2.className = "mdl-cell mdl-cell--9-col mdl-grid";

	         var div_3 = document.createElement('div');
	            div_3.className = "mdl-cell mdl-cell--2-col";

	            var span_0 = document.createElement('span');
	               span_0.className = "large";
	               span_0.appendChild( document.createTextNode("ชื่อผู้ป่วย: ") );
	            div_3.appendChild( span_0 );


	            var br_0 = document.createElement('br');
	            div_3.appendChild( br_0 );


	            var br_1 = document.createElement('br');
	            div_3.appendChild( br_1 );


	            var span_1 = document.createElement('span');
	               span_1.className = "large";
	               span_1.appendChild( document.createTextNode("แพทย์: ") );
	            div_3.appendChild( span_1 );


	            var br_2 = document.createElement('br');
	            div_3.appendChild( br_2 );


	            var br_3 = document.createElement('br');
	            div_3.appendChild( br_3 );


	            var span_2 = document.createElement('span');
	               span_2.className = "large";
	               span_2.appendChild( document.createTextNode("เวลา: ") );
	            div_3.appendChild( span_2 );


	            var br_4 = document.createElement('br');
	            div_3.appendChild( br_4 );


	            var br_5 = document.createElement('br');
	            div_3.appendChild( br_5 );


	            var span_3 = document.createElement('span');
	               span_3.className = "large";
	               span_3.appendChild( document.createTextNode("HN: ") );
	            div_3.appendChild( span_3 );


	            var br_6 = document.createElement('br');
	            div_3.appendChild( br_6 );


	            var br_7 = document.createElement('br');
	            div_3.appendChild( br_7 );

	         div_2.appendChild( div_3 );


         var div_4 = document.createElement('div');
            div_4.className = "mdl-cell mdl-cell--9-col";

            var span_4 = document.createElement('span');
               span_4.className = "mdl-color-text--primary large";
               span_4.appendChild( document.createTextNode(patient_name) );
            div_4.appendChild( span_4 );


            var br_8 = document.createElement('br');
            div_4.appendChild( br_8 );


            var br_9 = document.createElement('br');
            div_4.appendChild( br_9 );


            var span_5 = document.createElement('span');
               span_5.className = "mdl-color-text--primary large";
               span_5.appendChild( document.createTextNode(doctor_name) );
            div_4.appendChild( span_5 );


            var br_10 = document.createElement('br');
            div_4.appendChild( br_10 );


            var br_11 = document.createElement('br');
            div_4.appendChild( br_11 );


            var span_6 = document.createElement('span');
               span_6.className = "mdl-color-text--primary large";
               span_6.appendChild( document.createTextNode(datetime) );
            div_4.appendChild( span_6 );


            var br_12 = document.createElement('br');
            div_4.appendChild( br_12 );


            var br_13 = document.createElement('br');
            div_4.appendChild( br_13 );


            var span_7 = document.createElement('span');
               span_7.className = "mdl-color-text--primary large";
               span_7.appendChild( document.createTextNode(hn) );
            div_4.appendChild( span_7 );

         div_2.appendChild( div_4 );


         var span_8 = document.createElement('span');
            span_8.className = "large";
            span_8.appendChild( document.createTextNode("รายการยา") );
         div_2.appendChild( span_8 );


         var div_medList0 = document.createElement('div');
            div_medList0.className = "mdl-cell mdl-cell--12-col mdl-grid";
            div_medList0.id = "medList"+k;
         div_2.appendChild( div_medList0 );

      div_0.appendChild( div_2 );

		      /* Raised button with ripple */
		      var div_temp = document.createElement('center');
		      var button_acc0 = document.createElement('button');
		         button_acc0.id = "acc"+k;
		         button_acc0.onclick = function(){
		            popAccept(this.id)
		         };
		         button_acc0.className = "mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect";
		         button_acc0.style = "margin:10px;"
		         button_acc0.appendChild( document.createTextNode("\n					ยอมรับ\n				") );
		      div_0.appendChild( button_acc0 );


		      var button_edi0 = document.createElement('button');
		         button_edi0.className = "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect";
		         button_edi0.onclick = function(){
		            popEdit(this.id)
		         };
		         button_edi0.id = "edi"+k;
		         button_edi0.style = "margin:10px;"
		         button_edi0.appendChild( document.createTextNode("\n					ปฏิเสธรายการยา\n				") );
		      div_0.appendChild( button_edi0 );

		     // printMedList(this.id)
		      var button_det0 = document.createElement('button');
		         button_det0.onclick = function(){
		            var prescript_id = a[parseInt((this.id).substring(3))-1];
		            printMedList(button_det0.id,prescript_id)
		            console.log(a[parseInt((this.id).substring(3))-1]);
		            //YEAHHHHH HERE
		         };
		         button_det0.className = "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect";
		         button_det0.id = "det"+k;
		         button_det0.style = "margin:10px;"
		         button_det0.appendChild( document.createTextNode("\n					แสดงรายละเอียด\n				") );
		      div_0.appendChild( button_det0 );
		      div_temp.appendChild(div_0);
		   div_log0.appendChild( div_temp );

		box1.appendChild( div_log0 );


	};
	</script>

</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>