<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>ThesisTech</title>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">ThesisTech </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Profile</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header - set the background image for the header in the line below-->
        <header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" src="https://media.istockphoto.com/id/825083248/photo/mature-mixed-race-man-smiling.jpg?s=612x612&w=0&k=20&c=CkjBBkdepaK7LvP7dGAbRjY0vqWs0jnlmpha1-2VMoE=" alt="..." />
                <h1 class="text-white fs-3 fw-bolder">Prof. Dr. Luiz Eduardo Galvao Martins</h1>
                <p class="text-white-50 mb-0">Edit Your Expert Information </p>
            </div>
        </header>
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
              style="background-color: #808080 ;">Submit</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
        <!-- Image element - set the background image for the header in the line below-->
        
        <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>