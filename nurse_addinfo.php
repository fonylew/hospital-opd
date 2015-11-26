<?php
include_once "header.php";
include_once "nav_nurse.php";

  if (isset($_GET['patient_hn'])) {
        $patient_fname = $_GET['patient_fname'];
        $patient_lname = $_GET['patient_lname'];
        $patient_hn = $_GET['patient_hn'];
  }
?>

<script>
  // $("#actionbar-middle").append("Add General Information");
  $("#actionbar-left").append("<label onClick=\"browserBack()\" class=\"mdl-button mdl-js-button mdl-button--icon\" for=\"fixed-header-drawer-exp\"><i class=\"material-icons\">arrow_back</i></label>");
  $("#actionbar-middle").append("<div style=\"font-size:x-large\">ข้อมูลพื้นฐานของผู้ป่วย</div>");
</script>    
<script type="text/javascript">
  function browserBack(){
    window.history.back();
  }
</script>
<!-- Background (Grey) -->
<link rel="stylesheet" type="text/css" href="css/material-fullpalette.css">


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
#div_valuetable{
  margin-bottom: 0;
}
#upperh5{
  margin-bottom: 1.40em;
}
#span_confirm{
  text-align: center;
}
#bigp{
  font: bold;
  font-size: 1.2em;
  margin-bottom: 0;
}
.demo-card-wide.mdl-card {
  width: 512px;
}
</style>



<main class="mdl-layout__content">
  <div class="mdl-grid page-content">

    <!-- Add General Information -->
    <div class="demo-card-wide mdl-card mdl-shadow--2dp" 
          style="padding:24px; color: mdl-primary;">

      <p class="mdl-color-text--primary mdl-typography--display-1" align="center" >
        ข้อมูลพื้นฐานของผู้ป่วย
      </p>
            
      <div class="section__text mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
        <section class="section--footer mdl-color--white mdl-grid">
          <div class = "mdl-cell mdl-cell--3-col">
            <img src="dashboard/images/user.jpg" width="80%" height="80%" border="0"
            style="padding:10px; margin-right: auto; margin-left: auto;">     
          </div>
          <div class="section__text mdl-cell mdl-cell--8-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
            <table style="margin-left:5%" align="left">
              <tr>
                <td>
                  <span id="span_head">ชื่อจริง: </span>
                  <span id="span_normal"><?php echo $patient_fname;?></span><br><br>
                </td>
              </tr>
              <tr>
                <td>
                  <span id="span_head">นามสกุล: </span>
                  <span id="span_normal"><?php echo $patient_lname;?></span><br><br>
                </td>
              </tr>
              <tr>
                <td>
                  <span id="span_head">HN: </span>
                  <span id="span_normal"><?php echo $patient_hn;?></span><br>
                </td>
              </tr>
            </table>
          </div>
        </section>

        <form action="#" align="center">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="weight">
            <label class="mdl-textfield__label" for="weight">น้ำหนัก (กิโลกรัม)</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="height">
            <label class="mdl-textfield__label" for="height">ส่วนสูง (เซนติเมตร)</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="temperature">
            <label class="mdl-textfield__label" for="temperature">อุณหภูมิร่างกาย (องศาเซลเซียส)</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="heartrate">
            <label class="mdl-textfield__label" for="heartrate">อัตราการเต้นหัวใจ (ครั้งต่อนาที)</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="bloodpressure">
            <label class="mdl-textfield__label" for="bloodpressure">ความดันโลหิต (S/D)</label>
          </div>
        </form>
        <center>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect"
                    id="submitButton" align="center">
              ยืนยัน
            </button>
          </center>
      </div>
    </div>

  </div>
</main>

<script>
var patient_fname = <?php echo json_encode($patient_fname,JSON_FORCE_OBJECT)?>;
var patient_lname = <?php echo json_encode($patient_lname,JSON_FORCE_OBJECT)?>;
var patient_hn = <?php echo json_encode($patient_hn,JSON_FORCE_OBJECT)?>;

var appoint_time;
var appoint_id;
var doctor_username;
var htmldoctorsel;
var form_weight;
var form_height;
var form_heart;
var form_blood;
var form_temp;

  $( document ).ready(function() {
    console.log("GET value: "+patient_fname+patient_lname+patient_hn);
    checkAppointment(patient_hn);
  });

  function checkAppointment(hn){
      $.ajax({
          url: 'control_nurse.php',
          type: 'POST',
          data: {check_appoint_hn: hn},
          dataType: "json",
          success: function(data) {
            if(data == false){
              console.log("no appointment");
              showSelectDoctorPopup();
            }
            else{
              appoint_id = data['appoint_id'];
              appoint_time = data['appoint_time'];
              doctor_username = data['doctor_username'];
              console.log("appoint_time : "+appoint_time+"appoint_id : "+appoint_id+"  doctor_username : "+doctor_username);
            }
          }
      });
  }

  function showSelectDoctorPopup(){
    htmldoctorsel = '<form action="nurse_addinfo.php" method="get"><input type="text" list="doctorlist" id="doctor_sel" name="doctor_user" style="width: 100%;"><datalist id="doctorlist"><option value="doctor01" label="Mr.Doctor First">';
    $.ajax({
          url: 'control_nurse.php',
          type: 'POST',
          data: {listdoctor:true},
          dataType: "json",
          success: function(data) {
            console.log(data);
            for(var i = 0 ; i < Object.keys(data).length ;i++){
              console.log("i = "+i);
              var doctoruser = data[i]['username'];
              var doctorname = data[i]['initial']+""+data[i]['fName']+" "+data[i]['lName'];
              console.log("i = "+i+doctoruser+doctorname);
              htmldoctorsel += '<option value="'+doctoruser+'" label="'+doctorname+'">';
          }
        }
    });
    htmldoctorsel+= '</datalist></form>'

    showDialog({
      title: '<span id="span_confirm">ไม่พบการนัดหมายของผู้ป่วย</span>',
      text: '<p>เพื่อทำการนัดหมายทันที โปรดเลือกแพทย์ที่ตรวจ</p>'+htmldoctorsel,
      negative: {
        id: 'cancel-button',
        title: 'ยกเลิก',
        onClick: function() { 
            location.replace('nurse_index.php');
        }
      },
      positive: {
        id: 'ok-button',
        title: 'ตกลง',
        onClick: function() {
          console.log($("doctor_sel").val());
          doctor_username = 'doctor01';
          $.ajax({
              url: 'control_nurse.php',
              type: 'POST',
              data: {appointnow_hn: patient_hn, appointnow_doctor: doctor_username},
              success: function(data) {
                console.log(data);
                console.log(patient_hn+' make appoint '+doctor_username);
                if(data == true){
                  console.log("added");
                }
                else{
                  console.log('cannot make it');
                  alert('กรุณาเลือกค่าใหม่อีกครั้ง');   
                }
                location.replace('nurse_addinfo.php?patient_fname='+patient_fname+'&patient_lname='+patient_lname+'&patient_hn='+patient_hn);
              }
          });
          location.replace('nurse_addinfo.php?patient_fname='+patient_fname+'&patient_lname='+patient_lname+'&patient_hn='+patient_hn);
        }
      },
      cancelable: false,
    })
  }

  document.getElementById("submitButton").onclick = function () {
    // console.log(document.getElementById("date").value);
    // console.log(document.getElementById("weight").value);
    // console.log(document.getElementById("height").value);
    // console.log(document.getElementById("temperature").value);
    // console.log(document.getElementById("heartrate").value);
    // console.log(document.getElementById("bloodpressure").value);
    var dateTime  = new Date();
    var year      = dateTime.getFullYear();
    var month     = dateTime.getMonth();
    var date      = dateTime.getDate();
    var hours     = dateTime.getHours();
    var minutes   = dateTime.getMinutes();
    var seconds   = dateTime.getSeconds();
    var strDateTime = date+'/'+month+'/'+year+' '+hours+':'+minutes+':'+seconds;
    //console.log(strDateTime);

    form_weight = document.getElementById("weight").value;
    form_height = document.getElementById("height").value;
    form_temp = document.getElementById("temperature").value;
    form_heart = document.getElementById("heartrate").value;
    form_blood = String(document.getElementById("bloodpressure").value)


    showDialog({
      title: '<span id="span_confirm">Confirmation</span>',
      // title: 'Confirmation',
      text: '<table><tr><td><p id="bigp">วันที่ตรวจ: </h5></td>'+
      '<td><div id="div_valuetable">'+strDateTime+'</div></td></tr>'+

      '<tr><td><p id="bigp">น้ำหนัก (กิโลกรัม): </h5></td>'+
      '<td><div id="div_valuetable">'+form_weight+
      '</div></td></tr>'+

      '<tr><td><p id="bigp">ส่วนสูง (เซนติเมตร): </h5></td>'+
      '<td><div id="div_valuetable">'+form_height+
      '</div></td></tr>'+

      '<tr><td><p id="bigp">อุณหภูมิร่างกาย (องศาเซลเซียส): </h5></td>'+
      '<td><div id="div_valuetable">'+form_temp+
      '</div></td></tr>'+

      '<tr><td><p id="bigp">อัตราการเต้นหัวใจ (ครั้งต่อนาที): </h5></td>'+
      '<td><div id="div_valuetable">'+form_heart+
      '</div></td></tr>'+

      '<tr><td><p id="bigp">ความดันโลหิต (S/D): </p></td>'+
      '<td><div id="div_valuetable">'+form_blood+
      '</div></td></tr></table>',
      negative: {
        id: 'cancel-button',
        title: 'ยกเลิก',
        onClick: function() { 
          
        }
      },
      positive: {
        id: 'ok-button',
        title: 'ตกลง',
        onClick: function() {
          $.ajax({
              url: 'control_nurse.php',
              type: 'POST',
              data: {add_hn: patient_hn,add_appoint: appoint_time, add_appointid: appoint_id, add_weight: form_weight, add_height: form_height, add_blood: form_blood, add_temp: form_temp, add_heart: form_heart, add_nurse: employee_username, add_doctor: doctor_username},
              success: function(data) {
                console.log(data);
                console.log(patient_hn+'|'+appoint_time+'|'+appoint_id+'|'+form_weight+'|'+form_height+'|'+form_blood+'|'+form_temp+'|'+form_heart+'|'+employee_username+'|'+doctor_username);
                if(data == 'true'){
                  console.log("added");
                  alert("บันทึกสำเร็จ");
                  location.href = "nurse_index.php";
                }
                else{
                  console.log(":( addPatientInfo");
                }
              }
          });
        }
      },
      cancelable: false,
    })
   };
</script> 

<script src="js/bootstrap.min.js"></script>
<script src="js/ripples.min.js"></script>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>