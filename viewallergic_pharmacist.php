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
	#circlepic{
		background-repeat: no-repeat;
	    background-position: 50%;
	    border-radius: 50%;
	    width: 100px;
	    height: 100px;
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
	        	<div class="mdl-cell mdl-cell--2-col" style="margin:20px;">
	   				<img src="dashboard/images/dog.png" id = "circlepic" class="demo-avatar" style = "margin:auto;">
				</div>
				<div class = "mdl-cell mdl-cell--1-col"></div>
				<div class="section__text mdl-cell mdl-cell--8-col" style="margin: auto; font-size:1.3em">
					Name: Happy Viva<br><br>
					HN: 123-4-6789			
				</div>
			</div>
		</div>
		<div id = "fo" class = "mdl-cell mdl-cell--9-col">
		</div>
		
	</div>




	<script>		
		function searchPatientAllergic(){
			//code here><
			info = document.createElement("div");
			ininfo = document.createElement("div");
			ininfo.className = "section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone";
			info.className = "demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid";
			
			dat = document.createElement("h5");
			datt = document.createTextNode("date: xx/yy/zzzz");
			dat.appendChild(datt);

			doc = document.createElement("h5");
			doct = document.createTextNode("Doctor: Hatsune Miku");
			doc.appendChild(doct);

			ininfo.appendChild(dat);
			ininfo.appendChild(doc);
				
			grd = document.createElement("div");
			grd.className = "mdl-grid";

			for (var i =  1; i >= 0; i--) {
				meddiv = document.createElement("div");
				med = document.createElement("h5");
				meddiv.className = "mdl-cell mdl-cell--2-col";
				medt = document.createTextNode("APTX4862");
				med.appendChild(medt);
				meddiv.appendChild(med);

				dediv = document.createElement("div");
				meddetail = document.createElement("h5");
				dediv.className = "mdl-cell mdl-cell--9-col";
				meddetailt = document.createTextNode("after have this your age will back to 7 years old or die");
				meddetail.appendChild(meddetailt);
				dediv.appendChild(meddetail);

				ininfo.appendChild(meddiv);
				ininfo.appendChild(dediv);
			};
			info.appendChild(ininfo);
			document.getElementById("fo").appendChild(info);
		};
		function showPatientAllergic(){
			hn = document.getElementById("hn").value;
			document.getElementById("info").innerHTML = "<h5>"+hn+"</h5>";
		};
	</script>

</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>