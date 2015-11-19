	<!-- this div will be closed in nav_end.php -->
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<div class="mdl-layout-spacer"></div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
        			<label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
          				<i class="material-icons">search</i>
					</label>
					<div class="mdl-textfield__expandable-holder">
						<input class="mdl-textfield__input" type="text" name="sample" id="fixed-header-drawer-exp">
        			</div>
      			</div>
    		</div>
		</header>
		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title">Hospital OPD</span>
			<img src="dashboard/images/dog.png" width="125" height="125" border="0" alt=""
							style="padding:10px; margin-right: auto; margin-left: auto;">
			<div class="mdl-card__supporting-text">
				<h2 class="mdl-card__title-text">Pharmacist</h2>
			    <h6>Miss Mauris SoHappy</h6>
			    ID: 123-4-56789
			</div>

			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="viewPrescription_pharmacist.php">View prescription</a>
				<a class="mdl-navigation__link" href="viewallergic_pharmacist.php">View patient's allergic record</a>
				<a class="mdl-navigation__link" href="login_employee.php">Log out</a>
			</nav>
		</div>