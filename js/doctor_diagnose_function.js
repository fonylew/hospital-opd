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
				//do something
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
				//send data
				location.href = "doctor_viewappointment.php";
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