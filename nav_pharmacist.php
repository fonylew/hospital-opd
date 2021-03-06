<?php
	session_start();
	$employee_initial = $_SESSION['employee_initial'];
	$employee_fname = $_SESSION['employee_fname'];
	$employee_lname = $_SESSION['employee_lname'];
	$employee_username = $_SESSION['employee_username'];
	$employee_usertype = $_SESSION['employee_usertype'];
	// remove below comments when finish 
	// use for security
	if ($employee_usertype != 'pharmacist') {
	    header("Location: login_employee.php");
	    exit();
	}
?>

	<!-- this div will be closed in nav_end.php -->
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row" id="actionbar">
				<div id="actionbar-left"></div>
				<div class="mdl-layout-spacer"></div>
				<div id="actionbar-middle"></div>
				<!--div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
        			<label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
          				<i class="material-icons">search</i>
					</label>
					<div class="mdl-textfield__expandable-holder">
						<input class="mdl-textfield__input" type="text" name="sample" id="fixed-header-drawer-exp">
        			</div>
      			</div-->
      			<div class="mdl-layout-spacer"></div>
      			<div id="actionbar-right"></div>
    		</div>
		</header>
		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title">Hospital OPD</span>
			<header class="demo-drawer-header">
				<center>
		        
		        	<img src="dashboard/images/dog.png" class="demo-avatar" style="width:60%;">
		        	<div id="pharmacist_name"></div>
		        </center>
		 	</header>
			<nav class="mdl-navigation" style="flex-grow: 1;">
				<a class="mdl-navigation__link" href="pharmacist_viewPrescription.php">View prescription</a>
				<a class="mdl-navigation__link" href="pharmacist_viewallergic.php">View patient's allergic record</a>
				<div class="mdl-layout-spacer"></div>
				<a class="mdl-navigation__link" href="javascript:void(0)" onclick="logout()">Log out</a>
			</nav>
		</div>



<script>

    var employee_initial = <?php echo json_encode($employee_initial,JSON_FORCE_OBJECT)?>;
    var employee_fname = <?php echo json_encode($employee_fname,JSON_FORCE_OBJECT)?>;
    var employee_lname = <?php echo json_encode($employee_lname,JSON_FORCE_OBJECT)?>;
    var employee_username = <?php echo json_encode($employee_username,JSON_FORCE_OBJECT)?>;

    document.getElementById("pharmacist_name").innerHTML = "<br>"+employee_initial + " " + employee_fname + " " + employee_lname+"</br>";

	function logout() {
      	$.ajax({
          	url: 'control_general.php',
          	type: 'POST',
          	data: {employee_logout: 'logout'},
          	success: function(data) {
             	if (data = 'logout') location.replace("login_employee.php")
          	}	
      	});
    }		
</script>