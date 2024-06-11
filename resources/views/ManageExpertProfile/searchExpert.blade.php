<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="viewexpert.css">
    <title>ThesisTech</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('') no-repeat center center fixed;
            background-size: cover;
            color: #0f0f0f; /* Ensures text is readable on a dark background */
        }
        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #333232;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-actions {
            display: flex;
            justify-content: space-between;
        }
    </style>
   </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">ThesisTech</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="aboutUs">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Profile</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPublications" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Publications
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownPublications">
                                <li><a class="dropdown-item" href="">Publication 1</a></li>
                                <li><a class="dropdown-item" href="#!">Publication 2</a></li>
                                <li><a class="dropdown-item" href="#!">Publication 3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownExperts" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Experts
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownExperts">
                                <li><a class="dropdown-item" href="listexpert">View Experts</a></li>
                                <li><a class="dropdown-item" href="addExpert">Add Experts</a></li>
                                <li><a class="dropdown-item" href="#!">Generate Report</a></li>
                                <li><a class="dropdown-item" href="searchExpert">Search Expert</a></li>
                            </ul>
                            <li class="nav-item"><a class="nav-link" href="#!">Log Out</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome!</h1>
                    <p class="lead mb-0">All your expert informations are here</p>
                </div>
            </div>
        </header>

  <div class="container">
      <div class="row" style="margin:10px;">                    
          
              @if(Session::has('success'))
                      <div class="alert alert-success" role="alert">
                          {{ Session::get('success') }}
                      </div>
                  @endif
          <div class="col-14">                    
              <div class="card">
                  <div class="card-header">
                      <div style="margin-right:10px">
                  <a href="{{url('addExpert')}}" style="float:right;" class="btn btn-primary">ADD EXPERT</a><br>
              </div><br>
              <div class="mb-4">
                <div class="input-group">
                    <form action="{{ route('searchExpert') }}" method="GET">
                        <input type="text" name="query" class="form-control" placeholder="Search experts by name or publication..." value="{{ request('query') }}">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
  
                      <table class = "table">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Expert Information
                            </div>
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Expert Name</th>
                              <th>Email</th>
                              <th>Gender</th>
                              <th>Address</th>
                              <th>Num Tel</th>
                              <th>University</th>
                              <th>Publication</th>
                              <th>Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php 
                              $i = 1;
                          @endphp
                          @foreach ($experts as $expert)
                              <tr>
                                  <td>{{ $i }}</td>
                                  <td>{{ $expert->E_Name }}</td>
                                  <td>{{ $expert->E_Email }}</td>
                                  <td>{{ $expert->E_Gender }}</td>
                                  <td>{{ $expert->E_Address }}</td>
                                  <td>{{ $expert->E_PhoneNum }}</td>
                                  <td>{{ $expert->E_University }}</td>
                                  <td>{{ $expert->E_Publication }}</td>
                                  <td>
                                  <a href="{{ route('listview') }}" class="btn btn-primary">VIEW</a>
                                  <a href="{{ url('editExpert/' . $expert->id) }}" class="btn btn-primary">EDIT</a>
                                  <form action="{{ route('deleteExpert', $expert->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>
  
                                  </td>
  
                              </tr>
                              @php 
                                  $i++;
                              @endphp
                          @endforeach
                      </tbody>
                      </table>
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
