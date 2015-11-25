<?php
include_once "header.php";
include_once "nav_patient.php";
session_start();
$hn = $_SESSION['patient_hn'];
?>

<!-- setup actionbar -->
<script type="text/javascript">
	$("#actionbar-left").append("<label onClick=\"browserBack()\" class=\"mdl-button mdl-js-button mdl-button--icon\" for=\"fixed-header-drawer-exp\"><i class=\"material-icons\">arrow_back</i></label>");
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">New Appointment</div>");
</script>
<script type="text/javascript">
	function browserBack(){
		window.history.back();
	}
</script>

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/jquery.dropdown.css">
<link rel="stylesheet" type="text/css" href="css/material-fullpalette.css">
<link rel="stylesheet" type="text/css" href="css/ripples.min.css">
<link rel="stylesheet" type="text/css" href="css/roboto.min.css">

<main class="mdl-layout__content">
	<div class="mdl-grid page-content">
    	<div class="mdl-cell mdl-cell--9-col">
    		<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col" style="padding:24px; color: mdl-primary;">
				<p class="mdl-color-text--primary mdl-typography--display-1" align="center" >
					เลือกแผนกที่ต้องการนัด
				</p>
				<br>
				<form method="post" action="patient_newapp_seldate.php">
				<div id="dropdown-menu" style="position: relative; width: 70%; height: auto; margin-left: auto; margin-right: auto;">
					<div class="form-group">
	                	<label for="s1">เลือกแผนกที่ต้องการเข้าตรวจ</label>
                		<select id="s1" class="form-control" onchange="callDoctor()">
		                 <!-- <option value="department_0">โปรดเลือกแผนก</option>
		                  <option value="department_1">DEPARTMENT_NAME1</option>
		                  <option value="department_2">DEPARTMENT_NAME2</option>
		                  <option value="department_3">DEPARTMENT_NAME3</option>
		                  <option value="department_4">DEPARTMENT_NAME4</option>
		                  <option value="department_5">DEPARTMENT_NAME5</option> -->
                		</select>
                		  
	              	</div>
	              	<br>
					<div class="form-group">
	                	<label for="s1">เลือกแพทย์ที่ต้องการนัด (ไม่จำเป็นต้องเลือก)</label>
                		<select id="s2" class="form-control">
                		
		                 <option value="doc_id_จ">ไม่ระบุแพทย์</option>

		                 <!--  <option value="doc_id_1">Dr. NAME1 SURMANE1</option>
		                  <option value="doc_id_2">Dr. NAME2 SURMANE2</option>
		                  <option value="doc_id_3">Dr. NAME3 SURMANE3</option>
		                  <option value="doc_id_4">Dr. NAME4 SURMANE4</option>
		                  <option value="doc_id_5">Dr. NAME5 SURMANE5</option>
		                  <option value="doc_id_6">Dr. NAME6 SURMANE6</option>
		                  <option value="doc_id_7">Dr. NAME7 SURMANE7</option>
		                  <option value="doc_id_8">Dr. NAME8 SURMANE8</option>
		                  <option value="doc_id_9">Dr. NAME9 SURMANE9</option>
		                  <option value="doc_id_10">Dr. NAME10 SURMANE10</option> -->
                		</select>
	              	</div>
              	</div>
              	<center>
	              
		              	<button
		              		class="mdl-button mdl-button--raised mdl-button--colored"
		              		style="margin-top: 8px; margin-right: 8px;" type="submit">
		              		เลือกวันที่
		              	</button>
		            </from>
		            <a href="patient_newapp_confirm.php">
		              	<button
		              		class="mdl-button mdl-button--raised mdl-button--accent"
		              		style="margin-top: 8px; color: white;">
		              		นัดเร็วที่สุด
		              	</button>
	              	</a>
              	</center>
  			</div>
  		</div>
  		<div class="mdl-cell mdl-cell--3-col">
      
    	</div>
	</div>
</main>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dropdown.js"></script>
<script src="js/ripples.min.js"></script>
<script>
  $("#dropdown-menu select").dropdown();
</script>

<script>
	
        var hn =<?php echo $hn;?>;
       
        $.ajax({
              url: 'control_patient.php',
              type: 'POST',
              data: {get_department: hn},
              dataType: "json",
              success: function(data) {
              	for(var i = 0 ; i < Object.keys(data).length ;i++){
              	 $('#s1').append('<option value="'+data[i]['dNo']+'">'+data[i]['dName']+'</option>'); 
              	 console.log(data[i]['dName']);
              	}
              }
          	
          });
    
       function callDoctor(){
       	 var depart_no = document.getElementById("s1").value;
       	 // console.log(depart_no);
           $.ajax({
              url: 'control_patient.php',
              type: 'POST',
              data: {get_doctor: depart_no},
              dataType: "json",
              success: function(data) {
              	for(var i = 0 ; i < Object.keys(data).length ;i++){
              	 $('#s2').append('<option value="'+data[i]['doc_username']+'">'+data[i]['doc_name']+'</option>'); 
              	 console.log(data);

              	}
              } 
          	
          });
        }
    
    

</script>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>