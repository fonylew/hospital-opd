function showClearConfirm(){
	showDialog({
		title:
		'<span style="font-size: x-large; " class="mdl-color-text--primary">ลบบันทึกการตรวจทั้งหมด</span>',
		text:
		'ลบบันทึกการตรวจทั้งหมดหรือไม่ ?',
		negative: {
			id: 'cancel-button',
			title: 'ยกเลิก',
			onClick: function() { 

			}
		},
		positive: {
			id: 'ok-button',
			title: 'ลบ',
			onClick: function() {
				location.reload();
			}
		},
		cancelable: true,
	});
}

function showSubmitDiagnoseConfirm(){
	showDialog({
		title:
		'<span style="font-size: x-large; " class="mdl-color-text--primary">บันทึกผลการตรวจ</span>',
		text:
		'ต้องการบันทึกผลการตรวจหรือไม่ ?',
		negative: {
			id: 'cancel-button',
			title: 'ยกเลิก',
			onClick: function() { 

			}
		},
		positive: {
			id: 'ok-button',
			title: 'บันทึก',
			onClick: function() {
				var prescriptions = [];
				for (var i = 1; i <= medicineCount; i++) {
					var elementExists = document.getElementById("medName"+i);
					if(elementExists != null && elementExists.value != '-') {
						var prescription = [document.getElementById("medName"+i).value,document.getElementById("medAmount"+i).value,document.getElementById("medHowToUse"+i).value];
						prescriptions[i-1] = prescription;
					}
				}	
				prescriptions = JSON.stringify(prescriptions);
		        $.ajax({
		            url: 'control_doctor.php',
		            type: 'POST',
		            data: {prescription_prescriptid: diagnose_prescript_id, prescription_prescriptions: prescriptions},
		            dataType: "text",
		            success: function(data) {
		            	location.href = "doctor_viewrejectedprescription.php";
		            }
		        });
			}
		},
		cancelable: true,
	});
}

function onToggleNextApp(){
	console.log("toggle");
	if($('#next-app-checkbox').checked){
		console.log("check");

	} else {
		console.log("uncheck");

	}
}

function addPrescription(medicineCount,medcode,med_howto,med_amount){
	var div_0 = document.createElement('div');
	div_0.style.marginTop = "32px";
	div_0.style.marginBottom = "16px";
	div_0.style.marginLeft = "auto";
	div_0.style.marginRight = "auto";
	div_0.style.position = "relative";
	div_0.className = "mdl-cell--8-col mdl-shadow--2dp mdl-grid";

	var div_1 = document.createElement('div');
	div_1.style.marginLeft = "auto";
	div_1.style.marginRight = "auto";
	div_1.className = "mdl-cell--6-col";

	var div_2 = document.createElement('div');
	div_2.className = "form-group";
	div_2.style.width = "100%";
	div_2.style.marginTop ="15px";

	var input_medName = document.createElement('select');
	input_medName.id = "medName"+medicineCount;
	input_medName.className = "form-control";

	var option = document.createElement("option");
	option.text = "-- ชื่อยา --";
	option.value = "-";
	input_medName.add(option);

	for (var i = 0; i < medicine_count; i++) {
		var option = document.createElement("option");
		if (medicine_list[i].med_code == medcode) option.selected = "selected";
		option.text = medicine_list[i].med_name;
		option.value = medicine_list[i].med_code;
		input_medName.add(option);
	}

	div_2.appendChild( input_medName );

	div_1.appendChild( div_2 );

	div_0.appendChild( div_1 );

	var div_3 = document.createElement('div');
	div_3.className = "mdl-cell--6-col";
	div_3.style.marginLeft = "auto";
	div_3.style.marginRight = "auto";

	var form_1 = document.createElement('form');
	form_1.action = "#";

	var div_4 = document.createElement('div');
	div_4.className = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label";
	div_4.style.width = "100%";

	var input_medAmount = document.createElement('input');
	input_medAmount.className = "mdl-textfield__input";
	input_medAmount.type = "text";
	input_medAmount.id = "medAmount"+medicineCount;
	input_medAmount.value = med_amount;
	div_4.appendChild( input_medAmount );


	var label_userLabel_2 = document.createElement('label');
	label_userLabel_2.className = "mdl-textfield__label";
	label_userLabel_2.htmlFor = "username";
	label_userLabel_2.id = "user-label";
	label_userLabel_2.appendChild( document.createTextNode("จำนวน (เม็ด)") );
	div_4.appendChild( label_userLabel_2 );

	form_1.appendChild( div_4 );

	div_3.appendChild( form_1 );

	div_0.appendChild( div_3 );


	var div_5 = document.createElement('div');
	div_5.style.marginLeft = "auto";
	div_5.style.marginRight = "auto";
	div_5.className = "mdl-cell--12-col";

	var form_2 = document.createElement('form');
	form_2.action = "#";

	var div_6 = document.createElement('div');
	div_6.className = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label";
	div_6.style.width = "100%";

	var input_medHowToUse = document.createElement('input');
	input_medHowToUse.type = "text";
	input_medHowToUse.id = "medHowToUse"+medicineCount;
	input_medHowToUse.className = "mdl-textfield__input";
	input_medHowToUse.value = med_howto;
	div_6.appendChild( input_medHowToUse );


	var label_userLabel_3 = document.createElement('label');
	label_userLabel_3.id = "user-label";
	label_userLabel_3.htmlFor = "username";
	label_userLabel_3.className = "mdl-textfield__label";
	label_userLabel_3.appendChild( document.createTextNode("วิธีใช้ยา") );
	div_6.appendChild( label_userLabel_3 );

	form_2.appendChild( div_6 );

	div_5.appendChild( form_2 );

	div_0.appendChild( div_5 );


	var button_0 = document.createElement('button');
	button_0.style.position = "absolute";
	button_0.style.top = "-20px";
	button_0.style.right = "-20px";
	button_0.style.backgroundColor = "rgba(220,220,220,1)";
	button_0.className = "mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab remove-prescription";

	var i_0 = document.createElement('i');
	i_0.className = "material-icons";
	i_0.appendChild( document.createTextNode("clear") );
	button_0.appendChild( i_0 );

	div_0.appendChild( button_0 );

	document.getElementById("prescription-box").appendChild( div_0 );

	$('button.remove-prescription').click(function(){
		$(this).parent().remove();
	});

	// componentHandler.upgradeAllRegistered();
}

