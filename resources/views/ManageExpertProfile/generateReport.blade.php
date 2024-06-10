<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="viewexpert.css">
    <title>ThesisTech</title>
  </head>
  
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">ThesisTech</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="aboutUs">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPublications" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Publications
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownPublications">
                <li><a class="dropdown-item" href="#">Publication 1</a></li>
                <li><a class="dropdown-item" href="#">Publication 2</a></li>
                <li><a class="dropdown-item" href="#">Publication 3</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownExperts" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Experts
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownExperts">
                <li><a class="dropdown-item" href="listexpert">View Experts</a></li>
                <li><a class="dropdown-item" href="addExpert">Add Experts</a></li>
                <li><a class="dropdown-item" href="generateReport">Generate Report</a></li>
                <li><a class="dropdown-item" href="searchExpert">Search Expert</a></li>
            </ul>
            <li class="nav-item"><a class="nav-link" href="#!">Log Out</a></li>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
        <div class="container position-relative">
          <div class="row justify-content-center">
            <div class="col-xl-6">
              <div class="text-center text-white">
                <form>
                  <div class="row">
                    <div class="col">
                      <input class="form-control form-control-lg" id="expertname" type="text" placeholder="Enter Publication Here" required />
                      <div class="invalid-feedback text-white">Expert Name is required.</div>
                    </div>
                    <div class="col-auto">
                      <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Search</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container my-5">
      <h1>Generate Report</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>University</th>
            <th>Address</th>
            <th>Publication</th>
            <th>Paper</th>
            <th>Topic</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $expert)
            <tr>
              <td>{{ $expert->E_Name }}</td>
              <td>{{ $expert->E_Email }}</td>
              <td>{{ $expert->E_PhoneNum }}</td>
              <td>{{ $expert->E_Gender }}</td>
              <td>{{ $expert->E_University }}</td>
              <td>{{ $expert->E_Address }}</td>
              <td>{{ $expert->E_Publication }}</td>
              <td>{{ $expert->E_Paper }}</td>
              <td>{{ $expert->E_Topic }}</td>
              <td><a href="{{ route('listview') }}" class="btn btn-primary">Generate</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <nav aria-label="Pagination">
      <hr class="my-0" />
      <ul class="pagination justify-content-center my-4">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a>
        </li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#">...</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">15</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">Older</a>
        </li>
      </ul>
    </nav>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; ThesisTech 2024</p>
      </div>
    </footer>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="js/scripts.js"></script>
  </body>
</html>
