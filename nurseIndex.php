<?php
include_once "header.php";
include_once "nav_nurse.php";
?>

<script>
  //$("#actionbar").empty();
  $("#actionbar-middle").append("Add General Information");
</script>

<main class="mdl-layout__content">
  <div class="mdl-grid page-content">

    <!-- Search Patient -->
    <div class="mdl-cell mdl-cell--9-col">
      <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell--12-col">
        
        <div class="mdl-card__title">
          <h2 class="mdl-card__title-text">Search Patient</h2>
        </div>

        <div class="mdl-card__supporting-text">
          <form action="#">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="text" id="firstname" maxlength="100"/>
              <label class="mdl-textfield__label" for="firstname">Firstname</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="text" id="lastname" maxlength="100"/>
              <label class="mdl-textfield__label" for="lastname">Lastname</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="text" id="hn" maxlength="10"/>
              <label class="mdl-textfield__label" for="hn">HN</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="text" id="identificationNumber" maxlength="20"/>
              <label class="mdl-textfield__label" for="identificationNumber">ID</label>
            </div>
          </form>
        </div>

        <!-- <div class="mdl-card__actions mdl-card--border"> -->
          <button class="mdl-button mdl-shadow--2dp mdl-button--colored mdl-js-button mdl-js-ripple-effect" onClick = "searchPatientAllergic()" 
            id="search-button" >
            <i class="material-icons" style = "padding-right:3px">search</i> search
          </button>
        <!-- </div> -->
      </div>
    </div>

    <!-- Patient Information -->
  <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col mdl-grid">
    <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
      <!-- <div class="mdl-cell mdl-cell--9-col  mdl-shadow--2dp"> -->
        
        <div class="mdl-card__title">
          <h2 class="mdl-card__title-text">Patient</h2>
        </div>

        <section class="section--footer mdl-color--white mdl-grid"> 
          <div class = "mdl-cell mdl-cell--3-col">
            <img src="dashboard/images/user.jpg" width="80%" height="80%" border="0" alt=""
            style="padding:10px; margin-right: auto; margin-left: auto;">     
          </div>  
          
          <div class="section__text mdl-cell mdl-cell--2-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">

            <table>
              <tr>
                <td><h5>Firstname: </h5></td>
                <td>Asdf</td>
              </tr>
              <tr>
                <td><h5>Lastname: </h5></td>
                <td>Asdf</td>
              </tr>
              <tr>
                <td><h5>HN: </h5></td>
                <td>123456</td>
              </tr>
            </table>
          </div>

        </section>

      <!-- </div> -->
    </div>

    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
        Add General Information
    </button>
  </div>


    <!-- Add General Information -->
    <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col mdl-grid">
      <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
        <!-- <div class="mdl-cell mdl-cell--9-col  mdl-shadow--2dp"> -->
          
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">General Information</h2>
          </div>

          <section class="section--footer mdl-color--white mdl-grid"> 
            
            <div class="section__text mdl-cell mdl-cell--8-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">

              <form action="#">
                <table>
                  <tr>
                    <td><h5>Date: </h5></td>
                    <td>
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="sample3">
                        <label class="mdl-textfield__label" for="sample3">Date</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><h5>Weight: </h5></td>
                    <td>
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="sample3">
                        <label class="mdl-textfield__label" for="sample3">Weight</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><h5>Height: </h5></td>
                    <td>
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="sample3">
                        <label class="mdl-textfield__label" for="sample3">Weight</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><h5>Temperature: </h5></td>
                    <td>
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="sample3">
                        <label class="mdl-textfield__label" for="sample3">Temperature</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><h5>Heart Rate: </h5></td>
                    <td>
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="sample3">
                        <label class="mdl-textfield__label" for="sample3">Heart Rate</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><h5>Blood Pressure: </h5></td>
                    <td>
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="sample3">
                        <label class="mdl-textfield__label" for="sample3">Blood Pressure</label>
                      </div>
                    </td>
                  </tr>
                </table>
              </form>
            </div>

          </section>

        <!-- </div> -->
      </div>
        <div class="mdl-card__actions mdl-card--border">
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
            Accept
          </button>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
            Edit Prescription
          </button>
        </div>
    </div>

  </div>
</main>

<?php
include_once "nav_end.php";
include_once "footer.php";
?>