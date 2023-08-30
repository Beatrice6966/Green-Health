<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

  <title>Laboratory Tests</title>
</head>

<body class="container bg-light">
  <!-- Start Header form -->
  <div class="text-center pt-5">
    <!-- <img src="https://i.ibb.co/8cDgdFX/Logo.png" alt="network-logo" width="72" height="72" /> -->
    <h2>LABORATORY TESTS BOOKING</h2>
    <p>
      Please Fill the Form Below to  help us to know the Details about the Appointment.
    </p>
  </div>
  <!-- End Header form -->

  <!-- Start Card -->
  <div class="card">
    <!-- Start Card Body -->
    <div class="card-body">
      <!-- Start Form -->
      <form id="bookingForm" action="labtests.php" method="post" class="needs-validation" novalidate autocomplete="off">
        <!-- Start Input Name -->
        <div class="form-group">
          <label for="inputName">Location</label>
          <input type="text" class="hidden" value="<?php echo $_SESSION['id']; ?>" name="user" required />
          <input type="text" class="form-control" id="inputName" name="address" placeholder="" required />
          <small class="form-text text-muted">Where Do you Live</small>
        </div>
        <!-- End Input Name -->

        <!-- Start Input Email -->
        <!-- <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
          <small class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div> -->
        <!-- End Input Email -->

        <!-- Start Input Telephone -->
        <!-- <div class="form-group">
          <label for="inputPhone">Phone</label>
          <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="099xxxxxxx" pattern="\d{3}\d{3}\d{4}" required />
          <small class="form-text text-muted">We'll never share your phone number with anyone else.</small>
        </div> -->
        <!-- End Input Telephone -->

        <!-- Start Input Date , Start Time and End Time -->
        <div class="form-row">
          <!-- Start Input Date -->
          <div class="form-group col-md-4">
            <label for="inputDate">Date</label>
            <input type="date" class="form-control" id="inputDate" name="date" required />
            <small class="form-text text-muted">Please choose date and time for meeting.</small>
          </div>
          <!-- End Input Date -->

          <!-- Start Input Start Time -->
          <div class="form-group col-md-4">
            <label>Start Time</label>
            <div class="d-flex flex-row justify-content-between align-items-center">
              <select class="form-control mr-1" id="inputStartTimeHour" name="time" required>
                <option value="" disabled selected>Hour</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="15">16</option>
                <option value="15">17</option>
                <option value="15">18</option>
                <option value="15">19</option>
                <option value="15">20</option>
                <option value="15">21</option>
                <option value="15">22</option>
              </select>
              <div class="pl-1 pr-2">:</div>
              <select class="form-control" id="inputStartTimeMinute" name="minutes" required>
                <option value="" disabled selected>Min</option>
                <option value="00">00</option>
                <option value="00">30</option>
              </select>
            </div>
          </div>
          <!-- End Input Start Time -->

          <!-- Start Input End Time -->
          <!-- <div class="form-group col-md-4">
            <label>End Time</label>
            <div class="d-flex flex-row justify-content-between align-items-center">
              <select class="form-control mr-1" id="inputEndTimeHour" name="endHour" required>
                <option value="" disabled selected>Hour</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
              </select>
              <div class="pl-1 pr-2">:</div>
              <select class="form-control" id="inputEndTimeMinute" name="endMinute" required>
                <option value="" disabled selected>Min</option>
                <option value="00">00</option>
                <option value="00">30</option>
              </select>
            </div>
          </div> -->
          <!-- End Input End Time -->
        </div>
        <!-- End Input Date , Start Time and End Time -->

        <!-- Start Check Room Type -->
        <div class="form-group">
          <legend class="col-form-label pt-0">Choose Laboratory Test</legend>
          <div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" name="tests[]" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Malaria</label>
</div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="2" name="tests[]" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">UTI</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="3" name="tests[]" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">HIV</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="4" name="tests[]" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Sexual Transmitted Deseases(STDs)</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="5" name="tests[]" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Blood Sugar</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="6" name="tests[]" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Pregnancy Test</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="7" name="tests[]" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Blood Group</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="8" name="tests[]" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Stool Analysis</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="9" name="tests[]" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Typhoid</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="10" name="tests[]" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">HB Level</label>
</div>
</div>
        </div>
        <!-- End Check Room Type -->
        <div class="input-group">
  

        <hr />

       
        <button class="btn btn-primary btn-block col-lg-2" type="submit">Book appointment</button>
        <!-- End Submit Button -->
      </form>
      <!-- End Form -->
    </div>
    <!-- End Card Body -->
  </div>
  <!-- End Card -->
  <!-- <footer>
    <div class="my-4 text-muted text-center">
      <p>© My Company</p>
    </div>
  </footer> -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Start Scritp for Form -->
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
  <!-- End Scritp for Form -->

</body>