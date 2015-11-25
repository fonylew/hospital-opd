<?php
include_once "header.php";
include_once "nav_staff.php";
include_once "control_staff.php";

$department_list = getAllDepartment();
$department_count = sizeof($department_list);
?>

<!-- setup actionbar -->
<script type="text/javascript">
	$("#actionbar-left").append("<label onClick=\"browserBack()\" class=\"mdl-button mdl-js-button mdl-button--icon\" for=\"fixed-header-drawer-exp\"><i class=\"material-icons\">arrow_back</i></label>");
	$("#actionbar-middle").append("<div style=\"font-size:x-large\">แก้ไขตารางเข้าตรวจ</div>");
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
					เลือกแพทย์ที่ต้องการแก้ไข
				</p>
				<br>
				<div id="dropdown-menu" style="position: relative; width: 70%; height: auto; margin-left: auto; margin-right: auto;">
					<div class="form-group">
	                	<label for="s1">เลือกแผนกที่แพทย์อยู่</label>
                		<select onchange="changeDepartment()" id="s1" class="form-control">
                			<option value="-">-- เลือกแผนก --</option>
                		</select>
	              	</div>
	              	<br>
					<div class="form-group">
	                	<label for="s2">เลือกแพทย์ที่ต้องการแก้ไข</label>
                		<select onchange="changeDoctor()" id="s2" class="form-control">
		                  	<option value="-">-- เลือกแพทย์ --</option>
                		</select>
	              	</div>
              	</div>
              	<center>
	              	<a id="editScheduleLink">
		              	<button
		              		class="mdl-button mdl-button--raised mdl-button--colored"
		              		style="margin-top: 8px; margin-right: 8px;">
		              		แก้ไข้ตารางทำงาน
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
  	

  	var department_list = <?php echo json_encode($department_list,JSON_FORCE_OBJECT)?>;
	var department_count = <?php echo json_encode($department_count,JSON_FORCE_OBJECT)?>;	
	for (var i = 0; i < department_count; i++) {
		$("#s1").append('<option value="'+department_list[i].dNo+'">'+department_list[i].dName+'</option>');
	}

	function changeDepartment() {
		var department = document.getElementById("s1").value;
		if (department != '-' && department != 0) {
			$.ajax({
	            url: 'control_staff.php',
	            type: 'POST',
	            data: {department_getdoctorlist: department},
	            dataType: "json",
	            success: function(data) {
	            	$('#s2').empty();
	            	$('#s2').append('<option value="-">-- เลือกแพทย์ --</option>');
	                for (var i = 0; i < Object.keys(data).length; i++) {
	                	$('#s2').append('<option value="'+data[i].doc_username+'">'+data[i].doc_name+'</option>');
	                }
	            }
        	});
		} 
	}

	function changeDoctor() {
		document.getElementById("editScheduleLink").href = "staff_editdocschedule.php?editschedule_doctorusername="+document.getElementById("s2").value;
	}

	// $("#dropdown-menu select").dropdown();

</script>


<?php
include_once "nav_end.php";
include_once "footer.php";
?>