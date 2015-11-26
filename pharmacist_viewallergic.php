<?php
include_once "header.php";
include_once "nav_pharmacist.php";
?>

<script>
  //$("#actionbar").empty();
  $("#actionbar-middle").append("View Patient's Allergic Record");
</script>
<!-- Background (Grey) -->
<link rel="stylesheet" type="text/css" href="css/material-fullpalette.css">

<style>
	.large{
		font-size: large;
		
	}
	.x-large{
		font-size: x-large;
	}
	#span_head { 
	  font-size: large;
	  margin-top: 1.67em;
	  margin-bottom: 1.67em;
	  margin-left: 0;
	  margin-right: 0.3em;
	}
	#span_normal { 
	  font-size: large;
	  margin-top: 1.67em;
	  margin-bottom: 1.67em;
	  margin-left: 0;
	  margin-right: 0;
	}
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
	    max-width: 100px;
	    max-height: 100px;
	    width: 80%;
	    height: 80%;
	    margin: 20px;
	    margin-left: 30px;
	}
</style>

<main class="mdl-layout__content">
	<div class="mdl-grid page-content">
        <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
	       	<div class="mdl-card__title">
            	<span class="mdl-card__title-text x-large">Search Patient</span>
          	</div>

          	<div class="mdl-card__supporting-text">
           		<form action="#">
	            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	                	<input class="mdl-textfield__input" type="text" id="hn" maxlength="10"/>
	                	<label class="mdl-textfield__label" for="hn">HN</label>
	            	</div>
	            	<button class="mdl-button mdl-shadow--2dp mdl-button--colored mdl-js-button mdl-js-ripple-effect" onClick = "findPatientAllergic()" 
						id="search-button" >
						<i class="material-icons" style = "padding-right:3px">search</i> search
					</button>
        		</form>
        	</div>
        </div>

        <div id = "divmain" class= "mdl-cell mdl-cell--5-col">
        	
		</div>
		<div id = "fo" class = "mdl-cell mdl-cell--9-col">

		</div>
		
	</div>




	<script>
	document.getElementById("fo").innerHTML = "";
	function findPatientAllergic(){
		var hn = document.getElementById("hn").value;
        console.log(hn);
        $.ajax({
              url: 'control_pharmacist.php',
              type: 'POST',
              data: {search_hn: hn},
              dataType: "json",
              success: function(data) {
                console.log(data);
                if (!jQuery.isEmptyObject(data)){
                  q_fname = data.patient_initial + data.patient_fname;
                  q_lname = data.patient_lname;
                  q_hn = data.patient_hn;
                  searchPatientInfo(q_fname, q_lname, q_hn);
                  createLog();

                }
                else{
                  alert('ไม่พบรหัสประจำตัวผู้ป่วย (HN) นี้ในระบบ');
                }

              }
        });

        createLog();

	}
		function searchPatientInfo(){
			//info
		    div1 = document.createElement("div");
		    div2_section__text = document.createElement("div");
		    div1.className = "mdl-color--white mdl-shadow--2dp mdl-grid"; 
		    div2_section__text.className = "section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone";
		    div2_section__text.style = "margin:0px;"
		    div1.style = "margin:0px;"

		    div3_card_title = document.createElement("div");
		    div3_card_title.className = "mdl-card__title";
		    h2 = document.createElement("span");
		    h2.className = "mdl-card__title-text x-large";
		    text1_head_patient = document.createTextNode("Patient");
		    h2.appendChild(text1_head_patient);
		    div3_card_title.appendChild(h2);

		    section = document.createElement("section");
		    section.className = "section--footer mdl-color--white mdl-grid";

		    div4_img = document.createElement("div");
		    div4_img.className = "mdl-cell mdl-cell--3-col";
		    img = document.createElement("img");
		    img.setAttribute('src', 'dashboard/images/user.jpg');
		    img.setAttribute('width', '80%');
		    img.setAttribute('height', '80%');
		    img.setAttribute('border', '0');
		    img.setAttribute('style', 'padding:10px; margin-right: auto; margin-left: auto;');
		    div4_img.appendChild(img);

		    div5_info = document.createElement("div");
		    div5_info.className = "section__text mdl-cell mdl-cell--8-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone";

		      //Infomation
		    br1= document.createElement("br");
		    br2= document.createElement("br");
		    br3= document.createElement("br");
		    br4= document.createElement("br");
		    br5= document.createElement("br");
		    br6= document.createElement("br");
		   
		    span_firstname= document.createElement("span");
		    span_firstname.id = "span_head";
		    text_firstname = document.createTextNode("Firstname: ");
		    span_firstname.appendChild(text_firstname);
		    span_firstname_value= document.createElement("span");
		    span_firstname_value.id = "span_normal";
		    span_firstname_value.className = "mdl-color-text--primary";
		    text_firstname_value = document.createTextNode(q_fname);
		    span_firstname_value.appendChild(text_firstname_value);
		    span_firstname_value.appendChild(br1);
		    span_firstname_value.appendChild(br2);

		    span_lastname= document.createElement("span");
		    span_lastname.id = "span_head";
		    text_lastname = document.createTextNode("Lastname: ");
		    span_lastname.appendChild(text_lastname);
		    span_lastname_value= document.createElement("span");
		    span_lastname_value.id = "span_normal";
		    span_lastname_value.className = "mdl-color-text--primary";
		    text_lastname_value = document.createTextNode(q_lname);
		    span_lastname_value.appendChild(text_lastname_value);
		    span_lastname_value.appendChild(br3);
		    span_lastname_value.appendChild(br4);

		    span_hn= document.createElement("span");
		    span_hn.id = "span_head";
		    text_hn = document.createTextNode("HN: ");
		    span_hn.appendChild(text_hn);
		    span_hn_value= document.createElement("span");
		    span_hn_value.id = "span_normal";
		    span_hn_value.className = "mdl-color-text--primary";
		    text_hn_value = document.createTextNode(q_hn);
		    span_hn_value.appendChild(text_hn_value);
		    span_hn_value.appendChild(br5);
		    span_hn_value.appendChild(br6);

		    div5_info.appendChild(span_firstname);
		    div5_info.appendChild(span_firstname_value);
		    div5_info.appendChild(span_lastname);
		    div5_info.appendChild(span_lastname_value);
		    div5_info.appendChild(span_hn);
		    div5_info.appendChild(span_hn_value);

		    section.appendChild(div4_img);
		    section.appendChild(div5_info);
		    div2_section__text.appendChild(div3_card_title);
		    div2_section__text.appendChild(section);

		    div1.appendChild(div2_section__text);

		    document.getElementById("divmain").removeChild(document.getElementById("divmain").lastChild);
		    document.getElementById("divmain").appendChild(div1);

		    //create log
		}

		function createLog(){
		    
			    info = document.createElement("div");
				ininfo = document.createElement("div");
				ininfo.className = "section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone  mdl-grid";
				info.className = "mdl-color--white mdl-shadow--2dp";
				
				headN = document.createElement("div");
				headN.className = "mdl-cell mdl-cell--2-col"
				valueN = document.createElement("div");
				valueN.className = "mdl-cell mdl-cell--10-col"


				// dat = document.createElement("span");
				// datt = document.createTextNode("Date: ");
				// dat.appendChild(datt);
				// dat.className = "large";
				// dat_value = document.createElement("span");
				// dat_valuet = document.createTextNode("lalala lalalalala");
				// dat_value.appendChild(dat_valuet);
				// dat_value.className = "mdl-color-text--primary large";


				doc = document.createElement("span");
				doct = document.createTextNode("Doctor: ");
				doc.appendChild(doct);
				doc.className = "large";
				doc_value = document.createElement("span");
				doc_valuet = document.createTextNode("lalala lalalalala");
				doc_value.appendChild(doc_valuet);
				doc_value.className = "mdl-color-text--primary large";

				rec = document.createElement("span");
				rect = document.createTextNode("Record");
				rec.appendChild(rect);
				rec.className = "large";

				headN.appendChild(dat);
				headN.appendChild(document.createElement("br"));
				headN.appendChild(document.createElement("br"));
				headN.appendChild(doc);
				headN.appendChild(document.createElement("br"));
				headN.appendChild(document.createElement("br"));
				headN.appendChild(rec);
				valueN.appendChild(dat_value);
				valueN.appendChild(document.createElement("br"));
				valueN.appendChild(document.createElement("br"));
				valueN.appendChild(doc_value);
				ininfo.appendChild(headN);
				ininfo.appendChild(valueN);
				
				grd = document.createElement("div");
				grd.className = "mdl-grid";

				medNumber = 1;
				for (var i =  medNumber; i >= 0; i--) {
					meddiv = document.createElement("div");
					med = document.createElement("span");
					meddiv.className = "mdl-cell mdl-cell--2-col large";
					medt = document.createTextNode("APTX4862");
					med.appendChild(medt);
					meddiv.appendChild(med);

					spacediv = document.createElement("div");
					spacediv.className = "mdl-cell mdl-cell--1-col";

					dediv = document.createElement("div");
					meddetail = document.createElement("span");
					dediv.className = "mdl-cell mdl-cell--8-col large";
					meddetailt = document.createTextNode("after have this your age will back to 7 years old or die");
					meddetail.appendChild(meddetailt);
					dediv.appendChild(meddetail);

					grd.appendChild(meddiv);
					grd.appendChild(spacediv);
					grd.appendChild(dediv);
				};
				ininfo.appendChild(grd);
				info.appendChild(ininfo);
				document.getElementById("fo").appendChild(info);
		}	
		
	</script>

</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>