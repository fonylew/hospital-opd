<?php
include_once "header.php";
include_once "nav_staff.php";
?>

<!-- bootstrap -->
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
<link rel="stylesheet" type="text/css" href="css/jquery.dropdown.css">
<link rel="stylesheet" type="text/css" href="css/material-fullpalette.css">
<link rel="stylesheet" type="text/css" href="css/ripples.min.css">
<link rel="stylesheet" type="text/css" href="css/roboto.min.css">

<!-- setup actonbar -->
<script type="text/javascript">
$("#actionbar-left").append("<label onClick=\"browserBack()\" class=\"mdl-button mdl-js-button mdl-button--icon\" for=\"fixed-header-drawer-exp\"><i class=\"material-icons\">arrow_back</i></label>");
$("#actionbar-middle").append("<div style=\"font-size:x-large\">ค้นหานัดหมาย</div>");
</script>
<script type="text/javascript">
function browserBack(){
	window.history.back();
}
</script>

<main class="mdl-layout__content">
	<div class="mdl-grid page-content" id = "box1">

		<div class="mdl-cell mdl-cell--5-col">
			<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col" 
			style="padding:24px; color: mdl-primary;">

			<p class="mdl-color-text--primary mdl-typography--display-1" align="center" >
				ค้นหานัดหมายจาก HN
			</p>

			<!-- Search Patient -->
			  <div class="mdl-card__supporting-text" align="center" >
			    <form action="#">
			      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			        <input class="mdl-textfield__input" type="text" id="hnquery" maxlength="20"/>
			        <label class="mdl-textfield__label" for="hn">HN</label>
			      </div>
			    </form>
			  </div>

			  <center>
			    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" 
			            onClick = "findPatient()" 
			            id="search-button" >
			      	<i class="material-icons" style = "padding-right:3px">search</i> ค้นหา
			    </button>
			  </center>
			</div>

		</div>
	</div>
</div>
</main>

<script>
    var q_fname;
    var q_lname;
    var q_hn;
    var card = false;
    function findPatient(){
        // var hn = document.getElementById("hnquery").value;
        // console.log(hn);
        // $.ajax({
        //       url: 'control_nurse.php',
        //       type: 'POST',
        //       data: {search_hn: hn},
        //       dataType: "json",
        //       success: function(data) {
        //         console.log(data);
        //         if(card){
        //           divmain.removeChild(div1);
        //           card = false;
        //         }
        //         if (!jQuery.isEmptyObject(data)){
        //           q_fname = data.patient_initial + data.patient_fname;
        //           q_lname = data.patient_lname;
        //           q_hn = data.patient_hn;
        //           searchPatientInfo(q_fname, q_lname, q_hn);
        //           card = true;

        //         }
        //         else{
        //           alert('ไม่พบรหัสประจำตัวผู้ป่วย (HN) นี้ในระบบ');
        //         }

        //       }
        // });
		location.href = "staff_viewapp_result.php";
    }
</script>

<!-- import custom js -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dropdown.js"></script>
<script src="js/ripples.min.js"></script>
<script>
$("#dropdown-menu select").dropdown();
</script>


<?php
include_once "nav_end.php";
include_once "footer.php";
?>



