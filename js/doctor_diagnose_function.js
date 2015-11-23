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
				location.href = "doctor_viewappointment.php";
			}
		},
		cancelable: true,
	});
}