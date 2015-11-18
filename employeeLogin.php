<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.teal-orange.min.css" />
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/employeeLogin.css">


<div class="mdl-layout mdl-js-layout mdl-color--grey-100">
    <main class="mdl-layout__content">
        <div class="mdl-card mdl-shadow--6dp">
            <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
                <h2 class="mdl-card__title-text">เข้าสู่ระบบ</h2>
            </div>
            <div class="mdl-card__supporting-text">
                <form action="#">
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" id="username" maxlength="20"/>
                        <label class="mdl-textfield__label" for="username">Username</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password" id="password" maxlength="20"/>
                        <label class="mdl-textfield__label" for="password">Password</label>
                    </div>
                </form>
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <Button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    Log in
                </Button>
            </div>
        </div>
    </main>
</div>