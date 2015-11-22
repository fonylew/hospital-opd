<?php
include_once "header.php";
include_once "nav_nurse.php";
?>

<script>
  //$("#actionbar").empty();
  $("#actionbar-middle").append("Add General Information");
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
</style>

<main class="mdl-layout__content">
  <div class="mdl-grid page-content" id="divmain">

    <!-- Add General Information -->
    <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col mdl-grid">
      <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
          
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">General Information</h2>
          </div>

          <section class="section--footer mdl-color--white mdl-grid"> 
            
            <div class="section__text mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">

              <form action="#">
                <table>
                  <tr>
                    <td><h5 id="upperh5">Date: </h5></td>
                    <td>
                      <div>
                        <input class="mdl-textfield__input" type="date" id="date">
                        <label class="mdl-textfield__label" for="date">Date</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><h5 id="upperh5">Weight: </h5></td>
                    <td>
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="weight">
                        <label class="mdl-textfield__label" for="weight">Weight</label>
                      </div>
                    </td>
                    <td>
                      (Kilograms)
                    </td>
                  </tr>
                  <tr>
                    <td><h5 id="upperh5">Height: </h5></td>
                    <td>
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="height">
                        <label class="mdl-textfield__label" for="height">Height</label>
                      </div>
                    </td>
                    <td>
                      (Centimaters)
                    </td>
                  </tr>
                  <tr>
                    <td><h5 id="upperh5">Temperature: </h5></td>
                    <td>
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="temperature">
                        <label class="mdl-textfield__label" for="temperature">Temperature</label>
                      </div>
                    </td>
                    <td>
                      (Degree Celsius)
                    </td>
                  </tr>
                  <tr>
                    <td><h5 id="upperh5">Heart Rate: </h5></td>
                    <td>
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="heartrate">
                        <label class="mdl-textfield__label" for="heartrate">Heart Rate</label>
                      </div>
                    </td>
                    <td>
                      (bpm)
                    </td>
                  </tr>
                  <tr>
                    <td><h5 id="upperh5">Blood Pressure: </h5></td>
                    <td>
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="bloodpressure">
                        <label class="mdl-textfield__label" for="bloodpressure">Blood Pressure</label>
                      </div>
                    </td>
                    <td>
                      (mm Hg)
                    </td>
                  </tr>
                </table>

              </form>
            </div>

            <div >
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect"
                      id="submitButton">
                Submit
              </button>
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" 
                      id="cancleButton">
                Cancle
              </button>
            </div>    

          </section>

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
    showDialog({
      title: '<span id="span_confirm">Confirmation</span>',
      // title: 'Confirmation',
      text: '<table><tr><td><p id="bigp">Date: </h5></td>'+
      '<td><div id="div_valuetable">'+document.getElementById("date").value+'</div></td></tr>'+

      '<tr><td><p id="bigp">Weight: </h5></td>'+
      '<td><div id="div_valuetable">'+document.getElementById("weight").value+
      '</div></td><td id="div_valuetable">(Kilograms)</td></tr>'+

      '<tr><td><p id="bigp">Height: </h5></td>'+
      '<td><div id="div_valuetable">'+document.getElementById("height").value+
      '</div></td><td id="div_valuetable">(Centimaters)</td></tr>'+

      '<tr><td><p id="bigp">Temperature: </h5></td>'+
      '<td><div id="div_valuetable">'+document.getElementById("temperature").value+
      '</div></td><td id="div_valuetable">(Degree Celsius)</td></tr>'+

      '<tr><td><p id="bigp">Heart Rate: </h5></td>'+
      '<td><div id="div_valuetable">'+document.getElementById("heartrate").value+
      '</div></td><td id="div_valuetable">(bpm)</td></tr>'+

      '<tr><td><p id="bigp">Blood Pressure: </p></td>'+
      '<td><div id="div_valuetable">'+document.getElementById("bloodpressure").value+
      '</div></td><td id="div_valuetable">(mm Hg)</td></tr></table>',
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
    })
   };
  document.getElementById("cancleButton").onclick = function () {
    location.href = "nurse_index.php";
  };
</script> 

<?php
include_once "nav_end.php";
include_once "footer.php";
?>