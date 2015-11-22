<?php
include_once "header.php";
//include_once "control_patient.php";
?>

<link rel="stylesheet" type="text/css" href="css/patientLogin.css">

<div class="mdl-layout mdl-js-layout mdl-color--primary" align="center" style="padding-top:0">
    <main class="mdl-layout__content">

        <img src="HospitalODP_logo.png" style="width:50%; min-width:21.3em;">

        <div class="mdl-card mdl-shadow--6dp" style="margin-top:7%">
            <div class="mdl-card__title mdl-color--white mdl-color-text--primary mdl-card--border">
                <center><h2 class="mdl-card__title-text">Enter HN to Login</h2></center>
            </div>
            <div class="mdl-card__supporting-text">
                <form action="#">
                    <div class="mdl-textfield mdl-js-textfield  mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" 
                                pattern="-?[0-9]*(\.[0-9]+)?" id="username" />
                        <label class="mdl-textfield__label" for="username" id="user-label">HN</label>
                        <span class="mdl-textfield__error">Input must be number</span>
                    </div>
                </form>
            </div>
            <div class="mdl-card__actions">
                <center><a onClick="popupOTP()" 
                            class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
                            style="width:90%; align:center;" href="loginotp.php">Log in</a></center>
            </div>
            
        </div>
        <div class="mdl-card__actions" style="margin-bottom:0%; padding-top:1em;">
            <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-shadow--6dp" 
                style="width:21.3em; color: rgb(255,171,64); background-color: white;" href="register.php">Register</a>
        </div>
    </main1>
</div>

<script>
//onClick="checkUser();
    // var otp = Math.floor(100000 + Math.random() * 900000);
    // console.log(otp);

    
/*    
    function login(){
        $("user-label").empty();
        $("user-label").append("OTP");
    }
    */

    // function popupOTP(){
    //     //login();
    // window.open('otp_simulator.php?show='+otp,'OTP','width=380,height=screen.height, resizable=no, scrollbars=no, toolbar=no, menubar=no, location=no, directories=no, status=no,modal=yes,alwaysRaised=yes');
    //     return false;
    // }

   //  document.getElementById("checkotp").onclick = function () {
   //      //Mobile Phone Number
   //              //OTP Popup Windows
   //      window.open('otp_simulator.php?show='+otp,'OTP','width=380,height=screen.height, resizable=no, scrollbars=no, toolbar=no, menubar=no, location=no, directories=no, status=no,modal=yes,alwaysRaised=yes');

   //      //Check OTP Dialog
   //      showDialog({
   //        title: 'Enter One-Time Password',
   //        text: '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">'+
   //                  '<input class="mdl-textfield__input" type="text" id="otp" maxlength="10"/>'+
   //                  '<label class="mdl-textfield__label" for="otp">One-Time Password</label>'+
   //              '</div>',
   //          negative: {
   //              id: 'cancel-button',
   //              title: 'Back',
   //              onClick: function() { 
                  
   //              }
   //          },
   //          positive: {
   //              id: 'ok-button',
   //              title: 'OK',
   //              onClick: function() {
   //                  //Check OTP
   //                  if(otp == document.getElementById("otp").value){
   //                      location.href = "index.php";
   //                  }

   //              }
   //          },
   //      })
   // };

/*
    $( "form" ).submit(function( event ) {
        popupOTP();
        //checkUser();
    });
*/
        
/*
    function checkUser(){
        if ($("#username").val()=='00') popupOTP();
    }
*/

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