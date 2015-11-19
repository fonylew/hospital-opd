<?php
	include_once "header.php";
?>
<style>
	div.fixed{
		position: fixed;
		top: 370px;
		width: 100%;
	}
</style>

<center>
	<img src="image/otp_sms.png" height="640px"/>

	<div class="fixed">
		<p id="sms">Your OTP is </p>
	</div>
</center>	

<script>
	var otp = Math.floor(100000 + Math.random() * 900000);
	console.log(otp);
	$("#sms").append(otp);

/*
	$.ajax({
		url: "test.html", context: document.body
	});
*/
	</script>

<?php
	include_once "footer.php";
?>