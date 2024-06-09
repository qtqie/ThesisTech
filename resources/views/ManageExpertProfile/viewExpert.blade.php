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
            font-family: Arial, sans-serif; /* Ensure the body uses the desired font */
        }

        .bubble {
            width: 200px; /* Set the width of the bubble */
            height: 200px; /* Set the height of the bubble */
            background-color: #808080; /* Set the background color */
            color: white; /* Set the text color */
            border-radius: 50%; /* Make it a circle */
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }

        .container {
            text-align: center;
        }

        .greeting {

            padding: 8px 8px 8px 16px;
            text-decoration: none;
            font-size: 18px; /* Adjusted font size */
            color: #818181;
            display: block;
        }

        .textbox {
            background-color: #808080;
            width: 250px;
            padding: 10px;
            font-size: 16px;
            border: 3px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            justify-content: center;
            align-items: center;
            text: center;
        }

        .sidenav {
            height: 100%; /* Full-height: remove this if you want "auto" height */
            width: 200px; /* Adjusted width of the sidebar */
            position: fixed; /* Fixed Sidebar (stay in place on scroll) */
            z-index: 1; /* Stay on top */
            top: 0; /* Stay at the top */
            left: 0;
            background-color: #111; /* Black */
            overflow-x: hidden; /* Disable horizontal scroll */
            padding-top: 20px;
            font-family: Arial, sans-serif; /* Match the font with the rest of the site */
        }

        .sidenav a, .dropdown-toggle {
            padding: 8px 8px 8px 16px;
            text-decoration: none;
            font-size: 18px; /* Adjusted font size */
            color: #818181;
            display: block;
        }

        .sidenav a:hover, .dropdown-toggle:hover {
            color: #f1f1f1;
        }

        main {
            margin-left: 170px; /* Same as the width of the sidebar */
            padding: 0px;
        }

        .dropdown-menu a {
            color: #111; /* Default text color */
        }

        .dropdown-menu a:hover {
            color: #f1f1f1; /* Text color on hover */
        }

        /* Remove border between navbar and main page */
        .navbar {
            margin-bottom: 0;
            border: none;
        }

        .container.px-lg-5, .p-4, .p-lg-5 {
            margin: 0;
            padding: 0;
        }

        .logo {
            border-radius: 50%; /* Make it a circle */
            width: 50px; /* Set the width */
            height: 50px; /* Set the height */
        }

    </style>
  
  <title>Expert List</title>

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
                      <h3>Expert List</h3>
                      <div style="margin-right:10px">
                  <a href="{{url('addExpert')}}" style="float:right;" class="btn btn-primary">ADD EXPERT</a><br>
              </div><br>
  
                      <table class = "table">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Expert Name</th>
                              <th>Email</th>
                              <th>Gender</th>
                              <th>Address</th>
                              <th>Num Tel</th>
                              <th>University</th>
                              <th>Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php 
                              $i = 1;
                          @endphp
                          @foreach ($data as $experts)
                              <tr>
                                  <td>{{$i}}</td>
                                  <td>{{$experts->E_Name}}</td>
                                  <td>{{$experts->E_Email}}</td>
                                  <td>{{$experts->E_Gender}}</td>
                                  <td>{{$experts->E_Address}}</td>
                                  <td>{{$experts->E_PhoneNum}}</td>
                                  <td>{{$experts->E_University}}</td>
                                  <td>
                                  <a href="{{url('ExpertDetail/'.$experts->id)}}" class="btn btn-primary">VIEW</a>
                                  <a href="{{url('editExpert/'.$experts->id)}}" class="btn btn-primary">EDIT</a>
                                  <a href="{{url('deleteExpert')}}" class="btn btn-danger">DELETE</a>
  
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
