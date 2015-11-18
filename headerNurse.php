<!DOCTYPE html>
<html>
<head>
	<title> Hospital OPD System </title>

	<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.teal-orange.min.css" />
	<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
<head>

<!-- body will be closed in footer.php -->
<body>
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

			<div class="mdl-card__supporting-text">
				<h2 class="mdl-card__title-text">Nurse</h2>
			    <h6>Firstname:</h6>Mauris
			    <h6>Lastname:</h6>sagittis
			</div>

			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="">Add Medical Record</a>
				<a class="mdl-navigation__link" href="employeeLogin.php">Logout</a>
			</nav>
		</div>
