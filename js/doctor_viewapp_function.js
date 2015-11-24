function addAppointment(appoint_id,appoint_hn,appoint_name,appoint_date,appoint_time) {
	/* edit layout at /patient_app_item.php */
	/* generate DOM at http://rick.measham.id.au/paste/html2dom.htm */

	/* appointment item */

	var div_appItem = document.createElement('div');
	div_appItem.id = "appItem";
	div_appItem.className = "mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col mdl-grid";

	var div_0 = document.createElement('div');
	div_0.style.padding = "0px";
	div_0.className = "mdl-cell--9-col mdl-grid";

	var div_1 = document.createElement('div');
	div_1.className = "section__text mdl-cell mdl-cell--4-col";

	var span_0 = document.createElement('span');
	span_0.style.fontSize = "medium";
	span_0.appendChild( document.createTextNode("หมายเลขนัด: ") );
	div_1.appendChild( span_0 );

	div_0.appendChild( div_1 );


	var div_2 = document.createElement('div');
	div_2.className = "section__text mdl-cell mdl-cell--6-col";

	var span_appId = document.createElement('span');
	span_appId.id = "appId";
	span_appId.className = "mdl-color-text--primary";
	span_appId.style.paddingLeft = "8px";
	span_appId.style.fontSize = "medium";
	span_appId.appendChild( document.createTextNode(appoint_id) );
	div_2.appendChild( span_appId );

	div_0.appendChild( div_2 );

	div_appItem.appendChild( div_0 );


	var br_0 = document.createElement('br');
	div_appItem.appendChild( br_0 );


	var div_3 = document.createElement('div');
	div_3.className = "mdl-cell--9-col mdl-grid";
	div_3.style.padding = "0px";

	var div_4 = document.createElement('div');
	div_4.className = "section__text mdl-cell mdl-cell--4-col";

	var span_1 = document.createElement('span');
	span_1.style.fontSize = "medium";
	span_1.appendChild( document.createTextNode("HN: ") );
	div_4.appendChild( span_1 );

	div_3.appendChild( div_4 );


	var div_5 = document.createElement('div');
	div_5.className = "section__text mdl-cell mdl-cell--6-col";

	var span_hn = document.createElement('span');
	span_hn.style.paddingLeft = "8px";
	span_hn.style.fontSize = "medium";
	span_hn.className = "mdl-color-text--primary";
	span_hn.appendChild( document.createTextNode(appoint_hn) );
	div_5.appendChild( span_hn );

	div_3.appendChild( div_5 );

	div_appItem.appendChild( div_3 );


	var br_1 = document.createElement('br');
	div_appItem.appendChild( br_1 );


	var div_6 = document.createElement('div');
	div_6.style.padding = "0px";
	div_6.className = "mdl-cell--9-col mdl-grid";

	var div_7 = document.createElement('div');
	div_7.className = "section__text mdl-cell mdl-cell--4-col";

	var span_2 = document.createElement('span');
	span_2.style.fontSize = "medium";
	span_2.appendChild( document.createTextNode("ชื่อผู้ป่วย: ") );
	div_7.appendChild( span_2 );

	div_6.appendChild( div_7 );


	var div_8 = document.createElement('div');
	div_8.className = "section__text mdl-cell mdl-cell--6-col";

	var span_patientName = document.createElement('span');
	span_patientName.id = "patientName";
	span_patientName.className = "mdl-color-text--primary";
	span_patientName.style.paddingLeft = "8px";
	span_patientName.style.fontSize = "medium";
	span_patientName.appendChild( document.createTextNode(appoint_name) );
	div_8.appendChild( span_patientName );

	div_6.appendChild( div_8 );

	div_appItem.appendChild( div_6 );


	var br_2 = document.createElement('br');
	div_appItem.appendChild( br_2 );


	var div_9 = document.createElement('div');
	div_9.style.padding = "0px";
	div_9.className = "mdl-cell--9-col mdl-grid";

	var div_10 = document.createElement('div');
	div_10.className = "section__text mdl-cell mdl-cell--4-col";

	var span_3 = document.createElement('span');
	span_3.style.fontSize = "medium";
	span_3.appendChild( document.createTextNode("วัน: ") );
	div_10.appendChild( span_3 );

	div_9.appendChild( div_10 );


	var div_11 = document.createElement('div');
	div_11.className = "section__text mdl-cell mdl-cell--6-col";

	var span_date = document.createElement('span');
	span_date.id = "date";
	span_date.className = "mdl-color-text--primary";
	span_date.style.paddingLeft = "8px";
	span_date.style.fontSize = "medium";
	span_date.appendChild( document.createTextNode(appoint_date) );
	div_11.appendChild( span_date );

	div_9.appendChild( div_11 );

	div_appItem.appendChild( div_9 );


	var br_3 = document.createElement('br');
	div_appItem.appendChild( br_3 );


	var div_12 = document.createElement('div');
	div_12.style.padding = "0px";
	div_12.className = "mdl-cell--9-col mdl-grid";

	var div_13 = document.createElement('div');
	div_13.className = "section__text mdl-cell mdl-cell--4-col";

	var span_4 = document.createElement('span');
	span_4.style.fontSize = "medium";
	span_4.appendChild( document.createTextNode("เวลา: ") );
	div_13.appendChild( span_4 );

	div_12.appendChild( div_13 );


	var div_14 = document.createElement('div');
	div_14.className = "section__text mdl-cell mdl-cell--6-col";

	var span_time = document.createElement('span');
	span_time.className = "mdl-color-text--primary";
	span_time.style.paddingLeft = "8px";
	span_time.style.fontSize = "medium";
	span_time.id = "time";
	span_time.appendChild( document.createTextNode(appoint_time) );
	div_14.appendChild( span_time );

	div_12.appendChild( div_14 );

	div_appItem.appendChild( div_12 );


	var br_4 = document.createElement('br');
	div_appItem.appendChild( br_4 );


	var div_15 = document.createElement('div');
	div_15.className = "section__text mdl-cell mdl-cell--12-col";

	var center_0 = document.createElement('center');

	var a_0 = document.createElement('a');
	a_0.href = "doctor_diagnose.php?diagnose_appoint_id="+appoint_id+"&diagnose_appoint_hn="+appoint_hn+"&diagnose_appoint_name="+appoint_name+"&diagnose_appoint_date="+appoint_date+"&diagnose_appoint_time="+appoint_time;

	a_0.className = "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect";
	a_0.appendChild( document.createTextNode("\n				ตรวจ\n			") );

	center_0.appendChild( a_0 );

	div_15.appendChild( center_0 );

	div_appItem.appendChild( div_15 );

	document.getElementById("box1").appendChild(div_appItem);
};

function hideDetail(){
	var dialog = $('#orrsDiag');
	hideDialog(dialog);
}

function showConfirmDeleteDialog(){
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
				hideDetail();
			}
		},
		cancelable: true,
	});
}