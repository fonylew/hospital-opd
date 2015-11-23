<?php
include_once "header.php";
include_once "nav_nurse.php";
?>

<script>
  //$("#actionbar").empty();
  $("#actionbar-middle").append("<div style=\"font-size:x-large\">ค้นหาผู้ป่วย</div>");
</script>


<style>
#span_head { 
  font-size: 1.50em;
  margin-top: 1.67em;
  margin-bottom: 1.67em;
  margin-left: 0;
  margin-right: 0.3em;
}
#span_normal { 
  font-size: 1.20em;
  margin-top: 1.67em;
  margin-bottom: 1.67em;
  margin-left: 0;
  margin-right: 0;
}
#span_add_info { 
  font-size: 1.50em;
  margin-top: 1.67em;
  margin-bottom: 1.67em;
  margin-left: 0;
  margin-right: 1;
}
.demo-card-wide.mdl-card {
  width: 512px;
}
</style>

<main class="mdl-layout__content">
  <div class="mdl-grid page-content" id="divmain">

    <!-- Search Patient -->
    <div class="demo-card-wide mdl-card mdl-shadow--2dp" 
          style="padding:24px; color: mdl-primary;">

      <p class="mdl-color-text--primary mdl-typography--display-1" align="center" >
        ค้นหาผู้ป่วย
      </p>

      <div class="mdl-card__supporting-text" align="center" >
        <form action="#">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="hnquery" maxlength="10"/>
            <label class="mdl-textfield__label" for="hn">HN</label>
          </div>
        </form>
      </div>

      <center>
        <button class="mdl-button mdl-shadow--2dp mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
                onClick = "checkPatientInfo()" 
                id="search-button" >
          <i class="material-icons" style = "padding-right:3px">search</i> ค้นหา
        </button>
      </center>
    </div>

    <!-- Patient Information HTML Original-->
<!--     <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--7-col mdl-grid">
      <div class="section__text mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
           
        <p class="mdl-color-text--primary mdl-typography--display-1" align="center" >
          Search Patient
        </p>

        <section class="section--footer mdl-color--white mdl-grid"> 
          <div class = "mdl-cell mdl-cell--3-col">
            <img src="dashboard/images/user.jpg" width="80%" height="80%" border="0"
            style="padding:10px; margin-right: auto; margin-left: auto;">     
          </div>  
          
          <div class="section__text mdl-cell mdl-cell--8-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
            <span id="span_head">Firstname: </span>
            <span id="span_normal">Asdf</span><br><br>
            <span id="span_head">Lastname: </span>
            <span id="span_normal">Qwery</span><br><br>
            <span id="span_head">HN: </span>
            <span id="span_normal">1234567890</span><br>
          </div>
        </section>

        <center>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"
                  id="addInfo">
              Add General Information
          </button>
        </center>
      </div>

    </div> -->

  <script>
    var show = 0;
    function checkPatientInfo(){
        if(show == 0){
          show = 1;
          console.log(show);
          console.log(document.getElementById("hnquery").value);
          searchPatientInfo();
        }
        else if (show == 1){
          divmain.removeChild(div1);
          console.log(show);
          console.log(document.getElementById("hnquery").value);
          searchPatientInfo();
        }
    };

    function searchPatientInfo(){
      div1 = document.createElement("div");
      div2_section__text = document.createElement("div");
      div1.className = "mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--7-col mdl-grid";
      div2_section__text.className = "section__text mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone";
      
      div3_card_title = document.createElement("p");
      div3_card_title.className = "mdl-color-text--primary mdl-typography--display-1";
      div3_card_title.setAttribute('align' , 'center');
      text1_head_patient = document.createTextNode("ข้อมูลผู้ป่วย");
      div3_card_title.appendChild(text1_head_patient);

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
      text_firstname = document.createTextNode("ชื่อจริง: ");
      span_firstname.appendChild(text_firstname);
      span_firstname_value= document.createElement("span");
      span_firstname_value.id = "span_normal";
      text_firstname_value = document.createTextNode("Asdf");
      span_firstname_value.appendChild(text_firstname_value);
      span_firstname_value.appendChild(br1);
      span_firstname_value.appendChild(br2);

      span_lastname= document.createElement("span");
      span_lastname.id = "span_head";
      text_lastname = document.createTextNode("นามสกุล: ");
      span_lastname.appendChild(text_lastname);
      span_lastname_value= document.createElement("span");
      span_lastname_value.id = "span_normal";
      text_lastname_value = document.createTextNode("Qwerty");
      span_lastname_value.appendChild(text_lastname_value);
      span_lastname_value.appendChild(br3);
      span_lastname_value.appendChild(br4);


      span_hn= document.createElement("span");
      span_hn.id = "span_head";
      text_hn = document.createTextNode("HN: ");
      span_hn.appendChild(text_hn);
      span_hn_value= document.createElement("span");
      span_hn_value.id = "span_normal";
      text_hn_value = document.createTextNode(document.getElementById("hnquery").value);
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

      center_0 = document.createElement('center');

      button = document.createElement("button");
      button.className = "mdl-button mdl-shadow--2dp mdl-button--colored mdl-js-button mdl-js-ripple-effect";
      button.id = "addInfo";

      button_text = document.createTextNode("เพิ่มข้อมูลพื้นฐานของผู้ป่วย");
      button.appendChild(button_text);

      center_0.appendChild(button);

      div2_section__text.appendChild(div3_card_title);
      div2_section__text.appendChild(section);
      div2_section__text.appendChild(center_0);

      div1.appendChild(div2_section__text);
      // div1.appendChild(button);

      document.getElementById("divmain").appendChild(div1);

      document.getElementById("addInfo").onclick = function () {
        location.href = "nurse_addinfo.php";
      }; 
      
    };
  </script>
  
  </div>
</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>