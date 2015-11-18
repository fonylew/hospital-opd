<?php
include_once "header.php";
?>

<link rel="stylesheet" type="text/css" href="css/patientLogin.css">

<div class="mdl-layout mdl-js-layout mdl-color--grey-100">
    <main class="mdl-layout__content">
        <div class="mdl-card mdl-shadow--6dp">
            <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
                <h2 class="mdl-card__title-text">Enter HN to Login</h2>
            </div>
        <div class="mdl-card__supporting-text">
                <form action="#">
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" id="username" />
                        <label class="mdl-textfield__label" for="username">HN</label>
                    </div>
                </form>
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Log in</button>
            </div>
        </div>
    </main>
</div>

<?php
include_once "footer.php";
?>