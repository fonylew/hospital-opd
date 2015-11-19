	<!-- this div will be closed in footer.php -->
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
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="">ใบนัดแพทย์</a>
				<a class="mdl-navigation__link" href="">ประวัติการนัดแพทย์</a>
				<a class="mdl-navigation__link" href="viewAppointment_patient.php">View Appointment (Patient)</a>
				<a class="mdl-navigation__link"
				href="login.php" 
				style="position:fixed; bottom: 0px; width: 100%">Logout</a>
			</nav>
		</div>