<?php
include_once "header.php";
include_once "nav_nurse.php";
?>

<script>
  //$("#actionbar").empty();
  $("#actionbar-middle").append("Add General Information");

  // document.getElementById("cancleButton").onclick = function () {
  //       location.href = "nurseindex.php";
  //   };
</script>    

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
                <span id="span_add_info">Date: </span>
                <div>
                  <input class="mdl-textfield__input" type="date" id="date">
                  <label class="mdl-textfield__label" for="date">Date</label>
                </div>
                <br>

                <span id="span_add_info">Weight: </span>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="weight">
                  <label class="mdl-textfield__label" for="weight">Weight</label>
                </div>
                <span id="span_normal">(Kilograms)</span>
                <br>

                <span id="span_add_info">Height: </span>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="height">
                  <label class="mdl-textfield__label" for="height">Height</label>
                </div>
                <span id="span_normal">(Centimaters)</span>
                <br>

                <span id="span_add_info">Temperature: </span>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="temperature">
                  <label class="mdl-textfield__label" for="temperature">Temperature</label>
                </div>
                <span id="span_normal">(Degree Celsius)</span>
                <br>

                <span id="span_add_info">Heart Rate: </span>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="heartrate">
                  <label class="mdl-textfield__label" for="heartrate">Heart Rate</label>
                </div>
                <span id="span_normal">(bpm)</span>
                <br>

                <span id="span_add_info">Blood Pressure: </span>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="bloodpressure">
                  <label class="mdl-textfield__label" for="bloodpressure">Blood Pressure</label>
                </div>
                <span id="span_normal">(mm Hg)</span>
                <br>

                <!-- <table>
                  <tr>
                    <td><h5>Date: </h5></td>
                    <td>
                      <div>
                        <input class="mdl-textfield__input" type="date" id="date">
                        <label class="mdl-textfield__label" for="date">Date</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><h5>Weight: </h5></td>
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
                    <td><h5>Height: </h5></td>
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
                    <td><h5>Temperature: </h5></td>
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
                    <td><h5>Heart Rate: </h5></td>
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
                    <td><h5>Blood Pressure: </h5></td>
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
                </table> -->

               <!--  <div >
                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                    Submit
                  </button>
                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" 
                          id="cancleButton">
                    Cancle
                  </button>
                </div> -->

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
<script>
  document.getElementById("submitButton").onclick = function () {
    location.href = "nurseindex.php";
  };
  document.getElementById("cancleButton").onclick = function () {
    location.href = "nurseindex.php";
  };
</script>  

          </section>

      </div>
        
    </div>

  </div>
</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>