<?php
include_once "header.php";
?>


<link rel="stylesheet" type="text/css" href="css/patientLogin.css">

<div class="mdl-layout mdl-js-layout mdl-color--primary" align="center">
    <main class="mdl-layout__content" >

        <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="width: 680px;">
            <div class="mdl-card__title mdl-color--white mdl-color-text--primary mdl-card--border">
                <center><h2 class="mdl-card__title-text">Register</h2></center>
            </div>
            <div class="mdl-card__supporting-text">
                <form action="#">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="firstname" maxlength="100"/>
                        <label class="mdl-textfield__label" for="firstname">First name</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="lastname" maxlength="100"/>
                        <label class="mdl-textfield__label" for="lastname">Last name</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="idnum" maxlength="20"/>
                        <label class="mdl-textfield__label" for="idnum">Identification Number</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="email" maxlength="50"/>
                        <label class="mdl-textfield__label" for="email">Email</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <textarea class="mdl-textfield__input" type="text" rows="6" id="address"></textarea>
                        <label class="mdl-textfield__label" for="address">Address</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <textarea class="mdl-textfield__input" type="text" rows="6" id="address"></textarea>
                        <label class="mdl-textfield__label" for="address">Symptom</label>
                    </div>
<!--                     <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="idnum" maxlength="15"/>
                        <label class="mdl-textfield__label" for="idnum">Telephone Number</label>
                    </div> -->
                </form>
            </div>
            <div class="mdl-card__actions">
                <center><button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
                    style="width:90%; align:center;" id="checkotp" >Next</button></center>
            </div>
        </div>
    </main>
</div>

<script type="text/javascript">
    var otp = Math.floor(100000 + Math.random() * 900000);
    console.log(otp);

    document.getElementById("checkotp").onclick = function () {
        showDialog({
          title: 'Enter Mobile Phone Number',
          text: '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">'+
                    '<input class="mdl-textfield__input" type="text" id="tel" maxlength="15"/>'+
                    '<label class="mdl-textfield__label" for="tel">Telephone Number</label>'+
                '</div>',
            negative: {
            id: 'cancel-button',
            title: 'Back',
            onClick: function() { 
              
            }
          },
          positive: {
              id: 'ok-button',
              title: 'OK',
              onClick: function() {
                // popupOTP({
                    //login();
                    window.open('otp_simulator.php?show='+otp,'OTP','width=380,height=screen.height, resizable=no, scrollbars=no, toolbar=no, menubar=no, location=no, directories=no, status=no,modal=yes,alwaysRaised=yes');
                    // return false;


                showDialog({
                  title: 'Enter One-Time Password',
                  text: '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">'+
                            '<input class="mdl-textfield__input" type="text" id="otp" maxlength="10"/>'+
                            '<label class="mdl-textfield__label" for="otp">One-Time Password</label>'+
                        '</div>',
                    negative: {
                    id: 'cancel-button',
                    title: 'Back',
                    onClick: function() { 
                      
                    }
                  },
                  positive: {
                      id: 'ok-button',
                      title: 'OK',
                      onClick: function() {
                        //console log
                        if(otp == document.getElementById("otp").value){
                            location.href = "index.php";
                        }
                        
                      }
                  },
                })

              }
          },
        })
   };
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