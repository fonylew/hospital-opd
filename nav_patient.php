<?php
/*
	session_start();
	$patient_initial = $_SESSION['patient_initial'];
	$patient_fname = $_SESSION['patient_fname'];
	$patient_lname = $_SESSION['patient_lname'];
	$patient_hn = $_SESSION['patient_hn'];
	*/
?>
	<!-- this div will be closed in nav_end.php -->
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row" id="actionbar">
				<div id="actionbar-left"></div>
				<div class="mdl-layout-spacer"></div>
				<div id="actionbar-middle"></div>
      			<div class="mdl-layout-spacer"></div>
      			<div id="actionbar-right"></div>
    		</div>
		</header>
		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title">Hospital OPD</span>
			<header class="demo-drawer-header">
				<center>
		        
		        	<img src="dashboard/images/dog.png" class="demo-avatar" style="width:55%;">
		        	<div id="patient_name"></div>
		        	<div id="patient_hn"></div>
		        </center>
		 	</header>
			<nav class="mdl-navigation" style="flex-grow: 1;">
				<a class="mdl-navigation__link" href="index.php">ใบนัดแพทย์</a>
				<!--a class="mdl-navigation__link" href="#">ประวัติการนัดแพทย์</a-->
				<div class="mdl-layout-spacer"></div>
				<a class="mdl-navigation__link" href="javascript:void(0)" onclick="logout()" >Logout</a>
			</nav>
		</div>

<script>
/*
    var patient_initial = <?php echo json_encode($patient_initial,JSON_FORCE_OBJECT)?>;
    var patient_fname = <?php echo json_encode($patient_fname,JSON_FORCE_OBJECT)?>;
    var patient_lname = <?php echo json_encode($patient_lname,JSON_FORCE_OBJECT)?>;
    var patient_hn = <?php echo json_encode($patient_hn,JSON_FORCE_OBJECT)?>;
*/
    document.getElementById("patient_name").innerHTML = "<br>"+patient_initial + " " + patient_fname + " " + patient_lname+"</br>";
    document.getElementById("patient_hn").innerHTML = "<br>HN :"+patient_hn+"</br>";

	function logout() {
      	$.ajax({
          	url: 'control_patient.php',
          	type: 'POST',
          	data: {logout: 'logout'},
          	success: function(data) {
             	if (data = 'logout') location.replace("login.php")
          	}	
      	});
    }		
</script>