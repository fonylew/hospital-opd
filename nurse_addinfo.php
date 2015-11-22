<?php
include_once "header.php";
include_once "nav_nurse.php";
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
                  <span id="span_normal">Asssssssssssssssssssssssssssssssss1sssssssdf</span><br><br>
                </td>
              </tr>
              <tr>
                <td>
                  <span id="span_head">นามสกุล: </span>
                  <span id="span_normal">Qwery</span><br><br>
                </td>
              </tr>
              <tr>
                <td>
                  <span id="span_head">HN: </span>
                  <span id="span_normal">1234567890</span><br>
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
            <label class="mdl-textfield__label" for="temperature">อุณหถูมิร่างกาย (องศาเซลเซียส)</label>
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
              Submit
            </button>
          </center>
      </div>
    </div>

  </div>
</main>

<script>
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
    console.log(strDateTime);

    showDialog({
      title: '<span id="span_confirm">Confirmation</span>',
      // title: 'Confirmation',
      text: '<table><tr><td><p id="bigp">Date: </h5></td>'+
      '<td><div id="div_valuetable">'+strDateTime+'</div></td></tr>'+

      '<tr><td><p id="bigp">น้ำหนัก (กิโลกรัม): </h5></td>'+
      '<td><div id="div_valuetable">'+document.getElementById("weight").value+
      '</div></td></tr>'+

      '<tr><td><p id="bigp">ส่วนสูง (เซนติเมตร): </h5></td>'+
      '<td><div id="div_valuetable">'+document.getElementById("height").value+
      '</div></td></tr>'+

      '<tr><td><p id="bigp">อุณหถูมิร่างกาย (องศาเซลเซียส): </h5></td>'+
      '<td><div id="div_valuetable">'+document.getElementById("temperature").value+
      '</div></td></tr>'+

      '<tr><td><p id="bigp">อัตราการเต้นหัวใจ (ครั้งต่อนาที): </h5></td>'+
      '<td><div id="div_valuetable">'+document.getElementById("heartrate").value+
      '</div></td></tr>'+

      '<tr><td><p id="bigp">ความดันโลหิต (S/D): </p></td>'+
      '<td><div id="div_valuetable">'+document.getElementById("bloodpressure").value+
      '</div></td></tr></table>',
      negative: {
        id: 'cancel-button',
        title: 'Cancel',
        onClick: function() { 
          
        }
      },
      positive: {
        id: 'ok-button',
        title: 'OK',
        onClick: function() {
          location.href = "nurse_index.php";
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