<?php
include_once "header.php";
include_once "nav_pharmacist.php";
?>

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

<main class="mdl-layout__content">
	<div class="mdl-grid page-content">
        <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
        	<div class="mdl-card__title">
            	<h2 class="mdl-card__title-text">Search Patient</h2>
          	</div>

          	<div class="mdl-card__supporting-text">
           		<form action="#">
	            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	                	<input class="mdl-textfield__input" type="text" id="hn" maxlength="10"/>
	                	<label class="mdl-textfield__label" for="hn">HN</label>
	            	</div>
	            	<button class="mdl-button mdl-shadow--2dp mdl-button--colored mdl-js-button mdl-js-ripple-effect" onClick = "searchPatientAllergic()" 
						id="search-button" >
						<i class="material-icons" style = "padding-right:3px">search</i> search
					</button>
        		</form>
        	</div>
        </div>

        <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col">
        	<div class="mdl-grid" style="margin:20px;">
	        	<div class="mdl-cell mdl-cell--3-col" style="margin:20px;">
	   				<img src="dashboard/images/dog.png" class="demo-avatar" style = "width =: 60%; margin:auto;">
				</div>
				<div class="mdl-cell mdl-cell--1-col"></div>
				<div class="mdl-cell mdl-cell--6-col" style="align:center;">
					<h5>Name: Happy Viva</h5>
					<h5>HN: 123-4-6789</h5>			
				</div>
			</div>
		</div>

		<div class = "mdl-cell mdl-cell--3-col"></div>
		<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-grid" id = "info">
			<div class="mdl-cell mdl-cell--12-col">
				<center><img src="dashboard/images/dog.png" class="demo-avatar" style = "width =: 60%; margin:auto;">
					<h5>Name: Happy Viva</h5>
					<h5>HN: 123-4-6789</h5>
					
			</center>
			</div>
		</div>
		<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-grid" id = "allergic">
			ig,d,d;
		</div>
	</div>




	<script>		
		function searchPatientAllergic(){
			//code here><
			hn = document.getElementById("hn").value;
			document.getElementById("info").innerHTML = "Paragraph changed!";
			showPatientAllergic(hn);
		};
		function showPatientAllergic(hn){

		};
	</script>

</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>