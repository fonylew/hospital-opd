function addAppointment() {
	/* edit layout at /patient_app_item.php */
	/* generate DOM at http://rick.measham.id.au/paste/html2dom.htm */

	var div_appItem = document.createElement('div');
	div_appItem.id = "appItem";
	div_appItem.className = "mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col mdl-grid";

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
	span_appId.className = "mdl-color-text--primary";
	span_appId.style.paddingLeft = "8px";
	span_appId.style.fontSize = "large";
	span_appId.id = "appId";
	span_appId.appendChild( document.createTextNode("123-456-789") );
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
	span_deptName.id = "deptName";
	span_deptName.className = "mdl-color-text--primary";
	span_deptName.style.paddingLeft = "8px";
	span_deptName.style.fontSize = "large";
	span_deptName.appendChild( document.createTextNode("DEPARTMENTNAME") );
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
	span_docName.id = "docName";
	span_docName.className = "mdl-color-text--primary";
	span_docName.style.paddingLeft = "8px";
	span_docName.style.fontSize = "large";
	span_docName.appendChild( document.createTextNode("DOCNAME SURNAME") );
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
	span_date.id = "date";
	span_date.style.paddingLeft = "8px";
	span_date.style.fontSize = "large";
	span_date.className = "mdl-color-text--primary";
	span_date.appendChild( document.createTextNode("พุธที่ 25 พฤศจิกายน 2015") );
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
	span_time.id = "time";
	span_time.style.paddingLeft = "8px";
	span_time.style.fontSize = "large";
	span_time.className = "mdl-color-text--primary";
	span_time.appendChild( document.createTextNode("09.00 - 09.10 น.") );
	div_14.appendChild( span_time );

	div_12.appendChild( div_14 );

	div_appItem.appendChild( div_12 );


	var br_4 = document.createElement('br');
	div_appItem.appendChild( br_4 );


	var div_15 = document.createElement('div');
	div_15.className = "section__text mdl-cell mdl-cell--12-col";

	var center_0 = document.createElement('center');

	var button_0 = document.createElement('button');
	button_0.className = "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect";
	button_0.appendChild( document.createTextNode("\n						More Detail\n					") );
	center_0.appendChild( button_0 );

	div_15.appendChild( center_0 );

	div_appItem.appendChild( div_15 );

	document.getElementById("box1").appendChild(div_appItem);
};