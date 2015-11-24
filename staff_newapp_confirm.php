<?php
include_once "header.php";
include_once "nav_staff.php";
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

<!-- for dropdown -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/material-fullpalette.css">
<link rel="stylesheet" type="text/css" href="css/ripples.min.css">
<link rel="stylesheet" type="text/css" href="css/roboto.min.css">

<main class="mdl-layout__content">
	<div class="mdl-grid page-content">
    	<div class="mdl-cell mdl-cell--9-col mdl-color--white mdl-shadow--2dp" style="padding:24px;">
    	<center>
    		<p class="mdl-color-text--primary mdl-typography--display-1" align="center" >
				ยืนยันข้อมูลการนัดแพทย์
			</p>
		</center>
		<div style="margin-top: 16px; margin-left: auto; margin-right: auto; width: 20em;">
			<div style="margin-top: 0px;">
				<span style="font-size: large; ">แผนก: </span>
	        	<span class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">ผิวหนัง</span>
	        </div>
	        <br>
	        <div style="margin-top: 0px;">
				<span style="font-size: large;">แพทย์: </span>
	        	<span class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">DOCNAME SURNAME</span>
	        </div>
	        <br>
	        <div style="margin-top: 0px;">
				<span style="font-size: large;">วันที่: </span>
	        	<span class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">พุธที่ 25 พฤศจิกายน 2015</span>
	        </div>
	        <br>
	        <div style="margin-top: 0px;">
				<span style="font-size: large;">เวลา: </span>
	        	<span class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">09.00 - 09.10 น.</span>
	        </div>
	        <br>
		</div>
    	<center>
    		<a href="staff_newapp_seldoc.php" style="margin-right: 16px;">
	  			<button
	  				class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary mdl-shadow--2dp"
	  				style="margin-top: 16px;">
	  				แก้ไข แผนก/หมอ
	  			</button>
	  		</a>
    		<a href="staff_newapp_seldate.php" style="margin-right: 16px;">
	  			<button
	  				class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary mdl-shadow--2dp"
	  				style="margin-top: 16px;">
	  			แก้ไข วัน/เวลา
	  			</button>
	  		</a>
    		<a style="margin-right: 16px;">
	  			<button
	  				class="mdl-button mdl-button--raised mdl-button--primary "
	  				style="margin-top: 16px;" id="submitButton">
	  				ยืนยันการนัดแพทย์
	  			</button>
	  		</a>
    	</center>
    	</div>
  		<div class="mdl-cell mdl-cell--3-col">
      
    	</div>
	</div>
</main>

<script>
  document.getElementById("submitButton").onclick = function () {
    showDialog({
      title: '<span style="font-size: x-large; " class="mdl-color-text--primary">ยืนยันการสร้างนัดหมาย</span>',
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
          location.href = "staff_viewAppointment.php";
        }
      },
      cancelable: false,
    })
   };
</script> 


<!-- import custom js -->
<script src="js/bootstrap.min.js"></script>
<script src="js/ripples.min.js"></script>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>