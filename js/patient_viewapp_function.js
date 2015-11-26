
function addAppointment(hn,appoint_id,department_name,doctor_name,appoint_date,appoint_time) {
	/* edit layout at /patient_app_item.php */
	/* generate DOM at http://rick.measham.id.au/paste/html2dom.htm */

	/* appointment item */


	var div_appItem = document.createElement('div');
	div_appItem.className = "mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col mdl-grid";
	div_appItem.id = "appItem";

	var div_0 = document.createElement('div');
	div_0.className = "mdl-cell--9-col mdl-grid";

	var div_1 = document.createElement('div');
	div_1.className = "section__text mdl-cell mdl-cell--4-col";

	var span_0 = document.createElement('span');
	span_0.style.fontSize = "large";
	span_0.appendChild( document.createTextNode("หมายเลขนัด: ") );
	div_1.appendChild( span_0 );

	div_0.appendChild( div_1 );


	var div_2 = document.createElement('div');
	div_2.className = "section__text mdl-cell mdl-cell--6-col";

	var span_appId = document.createElement('span');
	span_appId.id = "appId";
	span_appId.className = "mdl-color-text--primary";
	span_appId.style.paddingLeft = "8px";
	span_appId.style.fontSize = "large";
	span_appId.appendChild( document.createTextNode(appoint_id) );
	div_2.appendChild( span_appId );

	div_0.appendChild( div_2 );

	div_appItem.appendChild( div_0 );


	var br_0 = document.createElement('br');
	div_appItem.appendChild( br_0 );


	var div_3 = document.createElement('div');
	div_3.className = "mdl-cell--9-col mdl-grid";

	var div_4 = document.createElement('div');
	div_4.className = "section__text mdl-cell mdl-cell--4-col";

	var span_1 = document.createElement('span');
	span_1.style.fontSize = "large";
	span_1.appendChild( document.createTextNode("แผนก: ") );
	div_4.appendChild( span_1 );

	div_3.appendChild( div_4 );


	var div_5 = document.createElement('div');
	div_5.className = "section__text mdl-cell mdl-cell--6-col";

	var span_deptName = document.createElement('span');
	span_deptName.style.paddingLeft = "8px";
	span_deptName.style.fontSize = "large";
	span_deptName.id = "deptName";
	span_deptName.className = "mdl-color-text--primary";
	span_deptName.appendChild( document.createTextNode(department_name) );
	div_5.appendChild( span_deptName );

	div_3.appendChild( div_5 );

	div_appItem.appendChild( div_3 );


	var br_1 = document.createElement('br');
	div_appItem.appendChild( br_1 );


	var div_6 = document.createElement('div');
	div_6.className = "mdl-cell--9-col mdl-grid";

	var div_7 = document.createElement('div');
	div_7.className = "section__text mdl-cell mdl-cell--4-col";

	var span_2 = document.createElement('span');
	span_2.style.fontSize = "large";
	span_2.appendChild( document.createTextNode("แพทย์: ") );
	div_7.appendChild( span_2 );

	div_6.appendChild( div_7 );


	var div_8 = document.createElement('div');
	div_8.className = "section__text mdl-cell mdl-cell--6-col";

	var span_docName = document.createElement('span');
	span_docName.className = "mdl-color-text--primary";
	span_docName.id = "docName";
	span_docName.style.paddingLeft = "8px";
	span_docName.style.fontSize = "large";
	span_docName.appendChild( document.createTextNode(doctor_name) );
	div_8.appendChild( span_docName );

	div_6.appendChild( div_8 );

	div_appItem.appendChild( div_6 );


	var br_2 = document.createElement('br');
	div_appItem.appendChild( br_2 );


	var div_9 = document.createElement('div');
	div_9.className = "mdl-cell--9-col mdl-grid";

	var div_10 = document.createElement('div');
	div_10.className = "section__text mdl-cell mdl-cell--4-col";

	var span_3 = document.createElement('span');
	span_3.style.fontSize = "large";
	span_3.appendChild( document.createTextNode("วัน: ") );
	div_10.appendChild( span_3 );

	div_9.appendChild( div_10 );


	var div_11 = document.createElement('div');
	div_11.className = "section__text mdl-cell mdl-cell--6-col";

	var span_date = document.createElement('span');
	span_date.style.paddingLeft = "8px";
	span_date.style.fontSize = "large";
	span_date.className = "mdl-color-text--primary";
	span_date.id = "date";
	span_date.appendChild( document.createTextNode(appoint_date) );
	div_11.appendChild( span_date );

	div_9.appendChild( div_11 );

	div_appItem.appendChild( div_9 );


	var br_3 = document.createElement('br');
	div_appItem.appendChild( br_3 );


	var div_12 = document.createElement('div');
	div_12.className = "mdl-cell--9-col mdl-grid";

	var div_13 = document.createElement('div');
	div_13.className = "section__text mdl-cell mdl-cell--4-col";

	var span_4 = document.createElement('span');
	span_4.style.fontSize = "large";
	span_4.appendChild( document.createTextNode("เวลา: ") );
	div_13.appendChild( span_4 );

	div_12.appendChild( div_13 );


	var div_14 = document.createElement('div');
	div_14.className = "section__text mdl-cell mdl-cell--6-col";

	var span_time = document.createElement('span');
	span_time.style.paddingLeft = "8px";
	span_time.style.fontSize = "large";
	span_time.className = "mdl-color-text--primary";
	span_time.id = "time";
	span_time.appendChild( document.createTextNode(appoint_time) );
	div_14.appendChild( span_time );

	div_12.appendChild( div_14 );

	div_appItem.appendChild( div_12 );


	var br_4 = document.createElement('br');
	div_appItem.appendChild( br_4 );

 /* var input_id = document.createElement('input');
      input_id.value = hn;
      input_id.type = "text ";
      input_id.id = "id";
   div_appItem.appendChild( input_id );


   var input_appoint_id = document.createElement('input');
      input_appoint_id.id = "appoint_id";
      input_appoint_id.type = "text";
      input_appoint_id.value = appoint_id;
   div_appItem.appendChild( input_appoint_id );
*/

	var div_15 = document.createElement('div');
	div_15.className = "section__text mdl-cell mdl-cell--12-col";

	var center_0 = document.createElement('center');

	var button_0 = document.createElement('button');
	button_0.onclick = function(){
		moreDetail(hn,appoint_id,department_name,doctor_name,appoint_date,appoint_time)
	};
	button_0.className = "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect";
	button_0.appendChild( document.createTextNode("\n				More Detail\n			") );
	center_0.appendChild( button_0 ); 

	div_15.appendChild( center_0 );

	div_appItem.appendChild( div_15 );

	document.getElementById("box1").appendChild(div_appItem);
};

function moreDetail(hn,appoint_id,department_name,doctor_name,appoint_date,appoint_time){
	console.log(hn);
	console.log(appoint_id);
	showDialog({
		title:
		'<form method="post" action="patient_edit_app.php"><span style="font-size: x-large; ">หมายเลขนัด: </span>' + '<span id="appId" class="mdl-color-text--primary" style="padding-left: 8px; font-size: x-large;" >'+appoint_id+'</span>',
		text:
		
		'<div class="mdl-cell--12-col mdl-grid"> <div class="section__text mdl-cell mdl-cell--4-col"> <span style="font-size: large; ">แผนก: </span> </div> <div class="section__text mdl-cell mdl-cell--8-col">'+""+ 
		'<span id="deptName" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">'+department_name+'</span> </div> </div>'+""+
		'<div class="mdl-cell--12-col mdl-grid"> <div class="section__text mdl-cell mdl-cell--4-col"> <span style="font-size: large; ">แพทย์: </span> </div> <div class="section__text mdl-cell mdl-cell--8-col"> <span id="docName" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">'+doctor_name+'</span> </div> </div> '+""+
		'<div class="mdl-cell--12-col mdl-grid"> <div class="section__text mdl-cell mdl-cell--4-col"> '+""+
		'<span style="font-size: large; ">วัน: </span> </div> <div class="section__text mdl-cell mdl-cell--8-col"> <span id="date" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">'+appoint_date+'</span> </div> </div> <div class="mdl-cell--12-col mdl-grid"> '+""+
		'<div class="section__text mdl-cell mdl-cell--4-col"> <span style="font-size: large; ">เวลา: </span> </div> <div class="section__text mdl-cell mdl-cell--8-col"> '+""+
		'<span id="time" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">'+appoint_time+'</span> </div> </div> <div class="section__text mdl-cell mdl-cell--12-col"> <center> '+""+
		
		'<a href="patient_edit_app.php?appointid='+appoint_id+'" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="margin-right: 16px;"> แก้ไขนัด </a> '+""+
		'<button onClick="showConfirmDeleteDialog('+appoint_id+')" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"> ยกเลิกนัด </button> '+""+
		'<button onClick="hideDetail()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="margin-left: 16px;"> ปิด </button> </center> </div></form>' 
	}); 
}




function hideDetail(){
	var dialog = $('#orrsDiag');
	hideDialog(dialog);
}



function showConfirmDeleteDialog(appoint_id){

	showDialog({
		title:
		'<span style="font-size: x-large; " class="mdl-color-text--primary">ยกเลิกนัด</span>',
		text:
		'ต้องการยกเลิกนัดหรือไม่ ?',
		negative: {
	        id: 'cancel-button',
	        title: 'ไม่ยกเลิกนัด',
	        onClick: function() { 

	        }
      	},
      	positive: {
	        id: 'ok-button',
	        title: 'ยกเลิกนัด',
	        onClick: function() {
	        console.log(appoint_id);
	          $.ajax({
              url: 'control_patient.php',
              type: 'POST',
              data: {cancel_appoint: appoint_id},
              dataType: "json",
              success: function(data) {
              	console.log('hello');
          	  }
         	  });
	          hideDetail();
	          location.reload();
	        }
      	},
      	cancelable: true,
	});
}
