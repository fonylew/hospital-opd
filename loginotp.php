<?php
include_once "header.php";
//include_once "control_patient.php";
?>

<link rel="stylesheet" type="text/css" href="css/patientLogin.css">

<div class="mdl-layout mdl-js-layout mdl-color--primary" align="center" style="padding-top:0">
    <main class="mdl-layout__content">

        <img src="HospitalODP_logo.png" style="width:50%; min-width:21.3em;">

        <div class="mdl-card mdl-shadow--6dp" style="margin-top:5%;width:30%">
            <div class="mdl-card__title mdl-color--white mdl-color-text--primary mdl-card--border">
                <center><h2 class="mdl-card__title-text">Enter One-Time Password</h2></center>
            </div>
            <div class="mdl-card__supporting-text">
                <form action="#">
                    <div class="mdl-textfield mdl-js-textfield  mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" 
                                pattern="-?[0-9]*(\.[0-9]+)?" id="otp" />
                        <label class="mdl-textfield__label" for="otp" id="user-label">One-Time Password</label>
                        <span class="mdl-textfield__error">Input must be number</span>
                    </div>
                </form>
            </div>
            <div class="mdl-card__actions">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
                   href="login.php">Back</a>
                <a style="color: rgb(255,171,64)"
                  class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
                   href="loginotp.php">Resend OTP</a>
                <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
                 onclick="checkOTP()">Login</button>
            </div>
            
        </div>
    </main1>
</div>

<script>
var otp = Math.floor(100000 + Math.random() * 900000);
console.log(otp);
window.open('otp_simulator.php?show='+otp,'OTP','width=380,height=screen.height, resizable=no, scrollbars=no, toolbar=no, menubar=no, location=no, directories=no, status=no,modal=yes,alwaysRaised=yes');

function checkOTP(){
  if(otp == document.getElementById("otp").value){
    location.href = "index.php";
  }
}
    //     //login();
    // window.open('otp_simulator.php?show='+otp,'OTP','width=380,height=screen.height, resizable=no, scrollbars=no, toolbar=no, menubar=no, location=no, directories=no, status=no,modal=yes,alwaysRaised=yes');
    //     return false;
    // }
  //Check OTP
  // if(otp == document.getElementById("otp").value){
  //   location.href = "index.php";
  // }


</script>

<footer>
    <center><p style="
    position:fixed;
    bottom: 0px;
    width:100%;
    color:white;">

        Outcube© 2015
    </p></center>   

    <script src="js/material.js"></script>
    <script src="js/material.min.js"></script>
    <script> $.material.init(); </script>
</footer>
    
<!-- close body from header.php -->
</body>
</html>