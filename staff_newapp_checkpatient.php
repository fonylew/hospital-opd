<?php
include_once "header.php";
include_once "nav_staff.php";
?>

<link rel="stylesheet" type="text/css" href="css/material-fullpalette.css">

<!-- setup actonbar -->
<script type="text/javascript">
	$("#actionbar-left").append("<label onClick=\"browserBack()\" class=\"mdl-button mdl-js-button mdl-button--icon\" for=\"fixed-header-drawer-exp\"><i class=\"material-icons\">arrow_back</i></label>");
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">New Appointment</div>");
</script>
<script type="text/javascript">
	function browserBack(){
		window.history.back();
	}
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
		<div class="mdl-cell mdl-cell--7-col mdl-shadow--2dp mdl-color--white"
				style="padding:24px; color: mdl-primary;" align="center">

			<p class="mdl-color-text--primary mdl-typography--display-1" align="center">
				ค้นหาและยืนยันผู้ป่วย
			</p>
			<div class="mdl-cell mdl-cell--10-col" align="center">
				<form action="#">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					    <input class="mdl-textfield__input" type="text" id="hn">
					    <label class="mdl-textfield__label" for="hn">HN (Hint "123")</label>
					</div>
					<button class="mdl-button mdl-js-button mdl-js-ripple-effect"
							onclick="checkHN()">
						Check
					</button>
					<div id="hn_done" style="display: inline-block; display: none;">
					    <i class="material-icons">done</i>
					</div>
					<div id="hn_fail" style="display: inline-block; display: none;">
					    <i class="material-icons">clear</i>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					    <input class="mdl-textfield__input" type="text" id="otp">
					    <label class="mdl-textfield__label" for="otp">One-Time Password</label>
					</div>
					<button class="mdl-button mdl-js-button mdl-js-ripple-effect"
							onclick="checkOTP()">
						Check
					</button>
					<div id="otp_done" style="display: inline-block; display:none;">
					    <i class="material-icons">done</i>
					</div>
					<div id="otp_fail" style="display: inline-block; display:none;" >
					    <i class="material-icons">clear</i>
					</div>

				</form>
				
				<button id="send_otp" onclick="generateOTP()"
          			class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent " 
          			style="color:white; margin-top: 8px; margin-right: 8px;">
		        	Send OTP
              	</button>
              	<a id="next_disable"
          			class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" 
          			style="margin-top: 8px; margin-right: 8px;" 
          			disabled>
		        	ต่อไป
              	</a>
              	<a id="next_able" onclick="checkNextButton()" 
          			class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" 
          			style="margin-top: 8px; margin-right: 8px; display:none;" 
          			href="staff_newapp_seldoc.php">
		        	ต่อไป
              	</a>
			</div>
  		</div>
	</div>
</main>

<script>
	var otp;
	var boolHN = false;
	var boolOTP = false;

	// $( document ).ready(function() {
	// 	generateOTP();
	// });

	function generateOTP(){
		otp = Math.floor(100000 + Math.random() * 900000);
		console.log(otp);
		window.open('otp_simulator.php?show='+otp,'OTP','width=380,height=screen.height, resizable=no, scrollbars=no, toolbar=no, menubar=no, location=no, directories=no, status=no,modal=yes,alwaysRaised=yes');
	}

	function checkHN(){
		// Correct HN
		if("123" == document.getElementById("hn").value){	
			// Show Correct Icon & Disable HN Input!!!
			document.getElementById("hn_done").style.display = "inline-block";
			document.getElementById("hn_fail").style.display = "none";
			document.getElementById("hn").disabled = true;	
			// Check Next Button
			boolHN = true;
			if(boolHN == true && boolOTP == true){
				document.getElementById("next_able").style.display = "inline-block";
				document.getElementById("next_disable").style.display = "none";
			}
		} else {	// Wrong HN
			document.getElementById("hn_done").style.display = "none";
			document.getElementById("hn_fail").style.display = "inline-block";
			boolHN = false;
		}
	}

	function checkOTP(){
		if(otp == document.getElementById("otp").value){	// Correct OTP
			// Show Correct Icon & Disable OTP Input & Disable Send OTP Button
			document.getElementById("otp_done").style.display = "inline-block";
			document.getElementById("otp_fail").style.display = "none";
			document.getElementById("otp").disabled = true;
			document.getElementById("send_otp").style.display = "none";
			// Check Next Button
			boolOTP = true;
			if(boolHN == true && boolOTP == true){
				document.getElementById("next_able").style.display = "inline-block";
				document.getElementById("next_disable").style.display = "none";
			}
		} else {	// Wrong OTP
			document.getElementById("otp_done").style.display = "none";
			document.getElementById("otp_fail").style.display = "inline-block";
			boolOTP = false;
		}
	}

	console.log(canCreateApp);
	

	// function checkNextButton(){
	// 	if(document.getElementById("otp_done").style.display == "inline"){
	// 		document.getElementById("next_button")
	// 	}
	// }

</script>


<?php
include_once "nav_end.php";
include_once "footer.php";
?>