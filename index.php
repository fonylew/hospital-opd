<?php
include_once "header.php";
include_once "nav_patient.php";
?>

<!-- setup actonbar -->
<script type="text/javascript">
  $("#actionbar-middle").append("<div style=\"font-size:x-large\">ใบนัดแพทย์</div>");
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

		<!-- appointment itme -->
		<div id="appItem" class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col mdl-grid">
            <div class="section__text mdl-cell mdl-cell--3-col" style="margin-left: auto;">
				<div style="margin-top: 0px;">
					<span style="font-size: large; ">หมายเลขนัด: </span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
					<span style="font-size: large; ">แผนก: </span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
					<span style="font-size: large; ">แพทย์: </span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
					<span style="font-size: large; ">วัน: </span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
					<span style="font-size: large; ">เวลา: </span>
	        	</div>
	        	<br>
	        </div>
            <div class="section__text mdl-cell mdl-cell--6-col" style="margin-right: auto;">
				<div style="margin-top: 0px;">
	        		<span id="appId" class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">123-456-789</span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
	        		<span id="deptName" class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">DEPARTMENTNAME</span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
	        		<span id="docName" class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">DOCNAME SURNAME</span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
	        		<span id="date" class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">พุธที่ 25 พฤศจิกายน 2015</span>
	        	</div>
	        	<br>
	        	<div style="margin-top: 0px;">
	        		<span id="time" class="mdl-color-text--primary" style="padding-left: 4px; font-size: large;">09.00 - 09.10 น.</span>
	        	</div>
	        	<br>
	        </div>
	        <div class="section__text mdl-cell mdl-cell--12-col">
				<!-- Raised button with ripple -->
				<center>
					<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
						More Detail
					</button>
				</center>
            </div>
        </div>
        <div class="mdl-color--white mdl-cell mdl-cell--3-col">

        </div>
	</div>

	<script>		
		function addAppointment() {
			//prepare data
			var div_appItem = document.createElement('div');
   			div_appItem.id = "appItem";
   			div_appItem.className = "mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col mdl-grid";

   			var div_0 = document.createElement('div');
      		div_0.className = "section__text mdl-cell mdl-cell--3-col";
      		div_0.style.marginLeft = "auto";

      		var div_1 = document.createElement('div');
         	div_1.style.marginTop = "0px";

         	var span_0 = document.createElement('span');
            span_0.style.fontSize = "large";
            span_0.appendChild( document.createTextNode("หมายเลขนัด: ") );
         	div_1.appendChild( span_0 );

      		div_0.appendChild( div_1 );


      		var br_0 = document.createElement('br');
      		div_0.appendChild( br_0 );


      		var div_2 = document.createElement('div');
         	div_2.style.marginTop = "0px";

         	var span_1 = document.createElement('span');
            span_1.style.fontSize = "large";
            span_1.appendChild( document.createTextNode("แผนก: ") );
         	div_2.appendChild( span_1 );

      		div_0.appendChild( div_2 );


      		var br_1 = document.createElement('br');
      		div_0.appendChild( br_1 );


      		var div_3 = document.createElement('div');
         	div_3.style.marginTop = "0px";

         	var span_2 = document.createElement('span');
            span_2.style.fontSize = "large";
            span_2.appendChild( document.createTextNode("แพทย์: ") );
         	div_3.appendChild( span_2 );

      		div_0.appendChild( div_3 );


      		var br_2 = document.createElement('br');
      		div_0.appendChild( br_2 );


      		var div_4 = document.createElement('div');
         	div_4.style.marginTop = "0px";

         	var span_3 = document.createElement('span');
            span_3.style.fontSize = "large";
            span_3.appendChild( document.createTextNode("วัน: ") );
         	div_4.appendChild( span_3 );

      		div_0.appendChild( div_4 );


      		var br_3 = document.createElement('br');
      		div_0.appendChild( br_3 );


      		var div_5 = document.createElement('div');
         	div_5.style.marginTop = "0px";

         	var span_4 = document.createElement('span');
            span_4.style.fontSize = "large";
            span_4.appendChild( document.createTextNode("เวลา: ") );
         	div_5.appendChild( span_4 );

      		div_0.appendChild( div_5 );


      		var br_4 = document.createElement('br');
      		div_0.appendChild( br_4 );

   			div_appItem.appendChild( div_0 );


   			var div_6 = document.createElement('div');
      		div_6.style.marginRight = "auto";
      		div_6.className = "section__text mdl-cell mdl-cell--6-col";

      		var div_7 = document.createElement('div');
         	div_7.style.marginTop = "0px";

         	var span_appId = document.createElement('span');
            span_appId.className = "mdl-color-text--primary";
            span_appId.id = "appId";
            span_appId.style.paddingLeft = "4px";
            span_appId.style.fontSize = "large";
            span_appId.appendChild( document.createTextNode("123-456-789") );
         	div_7.appendChild( span_appId );

      		div_6.appendChild( div_7 );


      		var br_5 = document.createElement('br');
      		div_6.appendChild( br_5 );


      		var div_8 = document.createElement('div');
         	div_8.style.marginTop = "0px";

         	var span_deptName = document.createElement('span');
            span_deptName.style.paddingLeft = "4px";
            span_deptName.style.fontSize = "large";
            span_deptName.id = "deptName";
            span_deptName.className = "mdl-color-text--primary";
            span_deptName.appendChild( document.createTextNode("DEPARTMENTNAME") );
         	div_8.appendChild( span_deptName );

      		div_6.appendChild( div_8 );


      		var br_6 = document.createElement('br');
      		div_6.appendChild( br_6 );


      		var div_9 = document.createElement('div');
         	div_9.style.marginTop = "0px";

         	var span_docName = document.createElement('span');
            span_docName.id = "docName";
            span_docName.style.paddingLeft = "4px";
            span_docName.style.fontSize = "large";
            span_docName.className = "mdl-color-text--primary";
            span_docName.appendChild( document.createTextNode("DOCNAME SURNAME") );
         	div_9.appendChild( span_docName );

      		div_6.appendChild( div_9 );


      		var br_7 = document.createElement('br');
      		div_6.appendChild( br_7 );


      		var div_10 = document.createElement('div');
         	div_10.style.marginTop = "0px";

         	var span_date = document.createElement('span');
            span_date.className = "mdl-color-text--primary";
            span_date.id = "date";
            span_date.style.paddingLeft = "4px";
            span_date.style.fontSize = "large";
            span_date.appendChild( document.createTextNode("พุธที่ 25 พฤศจิกายน 2015") );
         	div_10.appendChild( span_date );

      		div_6.appendChild( div_10 );


      		var br_8 = document.createElement('br');
      		div_6.appendChild( br_8 );


      		var div_11 = document.createElement('div');
         	div_11.style.marginTop = "0px";

         	var span_time = document.createElement('span');
            span_time.className = "mdl-color-text--primary";
            span_time.style.paddingLeft = "4px";
            span_time.style.fontSize = "large";
            span_time.id = "time";
            span_time.appendChild( document.createTextNode("09.00 - 09.10 น.") );
         	div_11.appendChild( span_time );

      		div_6.appendChild( div_11 );


      		var br_9 = document.createElement('br');
      		div_6.appendChild( br_9 );

   			div_appItem.appendChild( div_6 );


   			var div_12 = document.createElement('div');
      		div_12.className = "section__text mdl-cell mdl-cell--12-col";
      /* Raised button with ripple */

      		var center_0 = document.createElement('center');

         	var button_0 = document.createElement('button');
            button_0.className = "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect";
            button_0.appendChild( document.createTextNode("\n				More Detail\n			") );
         	center_0.appendChild( button_0 );

      		div_12.appendChild( center_0 );

   			div_appItem.appendChild( div_12 );
   			
			document.getElementById("box1").appendChild(div_appItem);
		};
	</script>

	<!-- FAB button with ripple -->
	<a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" 
			id="add-button" 
			href="patient_newapp_seldoc.php">
		<i class="material-icons">add</i>
	</a>
</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>