<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>ThesisTech</title>
    <style>
      body {
        background-color: #111;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }
      .white-text {
        color: white;
      }
    </style>
  </head>
  <body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#!">ThesisTech</a>
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

    <div class="container mt-5">
      <!-- Flash Messages -->
  

      <div class="row mt-3">
        <div class="col-md-3">
          <div style="margin-top: 50px; margin-left: 10px;" class="text-center">
            <i id="animationDemo" data-mdb-animation="slide-right" data-mdb-toggle="animation"
               data-mdb-animation-reset="true" data-mdb-animation-start="onScroll"
               data-mdb-animation-on-scroll="repeat" class="fas fa-3x fa-shipping-fast text-white"></i>
            <h3 class="mt-3 text-white">Welcome</h3>
            <p class="white-text">Insert Your Expert Information Here!</p>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card card-custom pb-4">
            <div class="card-body mt-0 mx-5">
              <div class="text-center mb-3 pb-2 mt-3">
                <h4 style="color: #495057;">Expert Information</h4>
              </div>
              @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          @endif
          
          @if(session('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session('error') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          @endif


          <form class="mb-0" method="post" action="{{ route('storeExpert') }}">
            @csrf
            @method('post')
        
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="form9Example1">Full name</label>
                        <input type="text" id="form9Example1" name="E_Name" class="form-control input-custom" />
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="form9Example2">Address</label>
                        <input type="text" id="form9Example2" name="E_Address" class="form-control input-custom" />
                    </div>
                </div>
            </div>
        
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="form9Example3">Email</label>
                        <input type="email" id="form9Example3" name="E_Email" class="form-control input-custom" />
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="form9Example4">Tel</label>
                        <input type="text" id="form9Example4" name="E_PhoneNum" class="form-control input-custom" />
                    </div>
                </div>
            </div>
        
            <div class="row mb-4">
                <div class="col">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="E_Gender" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="E_Gender" id="male" value="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                </div>
            </div>
        
            <div class="col mb-4">
                <div data-mdb-input-init class="form-outline">
                  <label class="form-label" for="typeEmail">University</label>
                    <input type="text" id="typeEmail" name="E_University" class="form-control input-custom" />
                </div>
            </div>
        
            <div class="col mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="publicationType">Choose a publication type</label>
                    <select id="E_Publication" name="E_Publication" class="form-select input-custom">
                        <option value="journalArticle">Journal Article</option>
                        <option value="conferencePaper">Conference Paper</option>
                        <option value="book">Book</option>
                        <option value="magazineArticle">Magazine Article</option>
                        <option value="newspaperArticle">Newspaper Article</option>
                    </select>
                </div>
            </div>

            <div class="col mb-4">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="paper">Expert Paper</label>
                  <input type="text" id="E_Paper" name="E_Paper" class="form-control input-custom" />
              </div>
          </div>

          <div class="col mb-4">
            <div data-mdb-input-init class="form-outline">
              <label class="form-label" for="paper">Expert Topic</label>
                <input type="text" id="E_Topic" name="E_Topic" class="form-control input-custom" />
            </div>
        </div>

        
            <div class="float-end">
                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-rounded" style="background-color: #808080;">Submit</button>
                <a href="{{ url('viewExpert') }}" class="btn btn-danger">BACK</a>
            </div>
        </form>
        
        
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
      <div class="container"><p class="m-0 text-center text-white">Copyright &copy; ThesisTech 2024</p></div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>
</html>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
