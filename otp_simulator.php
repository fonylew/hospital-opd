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
		<p id="sms">Your OTP is 
			<?php
				if(isset($_GET['show'])){
					echo $_GET['show'];
				}
			?>
	</div>
</center>	


<script>
	/*
	console.log(otp);
	$("#sms").append(otp);
	*/
</script>


<?php
	include_once "footer.php";
?>