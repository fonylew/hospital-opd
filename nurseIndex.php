<?php
include_once "header.php";
include_once "nav_employee.php";
?>
<!--
<style>
  #add-button {
        position: fixed;
        display: block;
        right: 0;
        bottom: 0;
        margin-right: 40px;
        margin-bottom: 40px;
        z-index: 900;
  }
</style>
-->

<main class="mdl-layout__content">
	<div class="mdl-grid page-content">
      <div class="mdl-cell mdl-cell--9-col">

        <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell--12-col">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Search Patient</h2>
          </div>

          <div class="mdl-card__supporting-text">
            <form action="#">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="firstname" maxlength="100"/>
                <label class="mdl-textfield__label" for="firstname">Firstname</label>
              </div>

              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="lastname" maxlength="100"/>
                <label class="mdl-textfield__label" for="lastname">Lastname</label>
              </div>

              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="hn" maxlength="10"/>
                <label class="mdl-textfield__label" for="hn">HN</label>
              </div>

              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="identificationNumber" maxlength="20"/>
                <label class="mdl-textfield__label" for="identificationNumber">ID</label>
              </div>
            </form>
          </div>

          <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              Search <i class="material-icons">search</i>
            </a>

          </div>
        </div>
  		</div>
<!--
  		<div class="mdl-cell mdl-cell--3-col">
    		<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" id="add-button">
				<i class="material-icons">add</i>
			 </button>
  		</div>
-->
	</div>
</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>