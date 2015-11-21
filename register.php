<?php
include_once "header.php";
?>

<link rel="stylesheet" type="text/css" href="css/patientLogin.css">


<div class="mdl-layout mdl-js-layout mdl-color--primary" align="center"
        style="padding-top:1em;padding-bottom:2em;">
    <main class="mdl-layout__content" >

        <div class="mdl-card mdl-shadow--6dp">
            <div class="mdl-card__title mdl-color--white mdl-color-text--primary mdl-card--border">
                <center><h2 class="mdl-card__title-text">Register</h2></center>
            </div>
            <div class="mdl-card__supporting-text">
                <form action="#">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="firstname" maxlength="100"/>
                        <label class="mdl-textfield__label" for="firstname">Firstname</label>
                        <!-- <span class="mdl-textfield__error">Input must be number</span> -->
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="lastname" maxlength="100"/>
                        <label class="mdl-textfield__label" for="lastname">Lastname</label>
                        <!-- <span class="mdl-textfield__error">Input must be number</span> -->
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="address" maxlength="200" />
                        <label class="mdl-textfield__label" for="address"]>Address</label>
                        <!-- <span class="mdl-textfield__error">Input must be number</span> -->
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="tel" maxlength="15"/>
                        <label class="mdl-textfield__label" for="tel">Telephone</label>
                        <span class="mdl-textfield__error">Input must be number</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="idnum" maxlength="20"/>
                        <label class="mdl-textfield__label" for="idnum">Identification Number</label>
                        <span class="mdl-textfield__error">Input must be number</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="email" maxlength="50"/>
                        <label class="mdl-textfield__label" for="email">Email</label>
                        <span class="mdl-textfield__error">Input must be number</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="symptom" maxlength="200"/>
                        <label class="mdl-textfield__label" for="symptom">Symptom</label>
                        <span class="mdl-textfield__error">Input must be number</span>
                    </div>
                </form>
            </div>
            <div class="mdl-card__actions">
                <center><a onClick="popupOTP()" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="width:90%; align:center;" href="index.php">Next</a></center>
            </div>
        </div>
    </main>
</div>

<script>
    var otp = Math.floor(100000 + Math.random() * 900000);
    console.log(otp);
    
    function popupOTP(){
        //login();
        window.open('otp_simulator.php?show='+otp,'OTP','width=380,height=screen.height, resizable=no, scrollbars=no, toolbar=no, menubar=no, location=no, directories=no, status=no,modal=yes,alwaysRaised=yes');
        return false;
    }
</script>

<footer>
    <center><p style="
    position:fixed;
    bottom: 0px;
    width:100%;
    color:white;">

        Outcube© 2015
    </p></center>   
</footer>
    
<!-- close body from header.php -->
</body>
</html>