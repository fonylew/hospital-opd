<?php
include_once "header.php";
?>

<link rel="stylesheet" type="text/css" href="css/employeeLogin.css">

<div class="mdl-layout mdl-js-layout mdl-color--primary" align="center">
    <main class="mdl-layout__content">

        <img src="HospitalODP_logo.png" style="width:40%; padding-bottom:100px">

        <div class="mdl-card mdl-shadow--6dp" style="margin-bottom:80px">
            <div class="mdl-card__title mdl-color--white mdl-color-text--primary mdl-card--border">
                <center><h2 class="mdl-card__title-text">Employee Login</h2></center>
            </div>
            <div class="mdl-card__supporting-text">
                <form action="#">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="username" maxlength="20"/>
                        <label class="mdl-textfield__label" for="username">Username</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="password" id="password" maxlength="20"/>
                        <label class="mdl-textfield__label" for="password">Password</label>
                    </div>
                </form>
            </div>
            <div class="mdl-card__actions">
                <center>
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"
                       style="width:90%; align:center;"
                       href="#">Log in</a>
                </center>
            </div>
        </div>
    </main>
</div>

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