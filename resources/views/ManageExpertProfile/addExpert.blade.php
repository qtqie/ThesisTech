<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Expert Information</title>
    <style>
    body {
      background-color: #ad1fff;
      background-image: url('');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
  </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
  <div class="container-fluid" style="padding: 0;">
    <div class="row mt-3 mx-3" style="margin-top:25px ;">
  <div class="col-md-3">
    <div style="margin-top: 50px; margin-left: 10px;" class="text-center">
      <i id="animationDemo" data-mdb-animation="slide-right" data-mdb-toggle="animation"
        data-mdb-animation-reset="true" data-mdb-animation-start="onScroll"
        data-mdb-animation-on-scroll="repeat" class="fas fa-3x fa-shipping-fast text-white"></i>
      <h3 class="mt-3 text-white">Welcome</h3>
      <p class="white-text">Insert Your Expert Information Here!</p>
    </div>
    <div class="text-center">
      <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-white btn-rounded back-button">Go back</button>
    </div>


  </div>
  <div class="col-md-9 justify-content-center">
    <div class="card card-custom pb-4">
      <div class="card-body mt-0 mx-5">
        <div class="text-center mb-3 pb-2 mt-3">
          <h4 style="color: #495057 ;">Expert Information</h4>
        </div>

        <form class="mb-0">

          <div class="row mb-4">
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <input type="text" id="form9Example1" class="form-control input-custom" />
                <label class="form-label" for="form9Example1">Full name</label>
              </div>
            </div>
            <!-- Address input --> 
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <input type="text" id="form9Example2" class="form-control input-custom" />
                <label class="form-label" for="form9Example2">Address</label>
              </div>
            </div>
          </div>
          <!-- Email input --> 
          <div class="row mb-4">
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <input type="text" id="form9Example3" class="form-control input-custom" />
                <label class="form-label" for="form9Example3">Email</label>
              </div>
            </div>
            <!-- Number Phone input --> 
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <input type="text" id="form9Example4" class="form-control input-custom" />
                <label class="form-label" for="form9Example4">Tel</label>
              </div>
            </div>
          </div>
          <!-- Gender input --> 
          <div class="row mb-4">
  <div class="col">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" id="female" value="female">
      <label class="form-check-label" for="female">Female</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" id="male" value="male">
      <label class="form-check-label" for="male">Male</label>
    </div>
  </div>
  <!-- University input --> 
  <div class="col">
              <div data-mdb-input-init class="form-outline">
                <input type="email" id="typeEmail" class="form-control input-custom" />
                <label class="form-label" for="typeEmail">University</label>
              </div>
            </div>
          </div>
          <div class="col">
    <div class="form-outline">
      <input type="file" id="fileInput" class="form-control input-custom" multiple /><br>
    </div>

          <div class="float-end ">
            <!-- Submit button -->
            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-rounded"
              style="background-color: #44006b ;">Submit</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>