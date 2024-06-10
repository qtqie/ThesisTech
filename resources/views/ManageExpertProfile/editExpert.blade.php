<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="viewexpert.css">
    <title>ThesisTech - Edit Expert</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://img.freepik.com/free-photo/free-photo-black-grunge-abstract-background-pattern-wallpaper_1340-33834.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff; /* Ensures text is readable on a dark background */
        }
        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgb(255, 255, 255); /* Transparent black background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .form-container h2 {
            font-family: Arial, sans-serif;
            margin-bottom: 20px;
            text-align: center;
            color: #070707; /* Custom color for form title */
        }
        .form-group label {
            font-weight: bold;
            color: #000000; /* Custom color for labels */
        }
        .form-group input {
            color: #000000; /* Custom color for input text */
        }
        .form-actions {
            display: flex;
            justify-content: space-between;
        }
        .btn-primary {
            background-color: #2c2c2cf8;
            border: none;
            color: #ffffff;
        }
        .btn-danger {
            background-color: #ff4d4d;
            border: none;
        }
        .btn-primary:hover, .btn-danger:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#!">ThesisTech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Profile</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPublications" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Publications
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownPublications">
                            <li><a class="dropdown-item" href="#!">Publication 1</a></li>
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
                            <li><a class="dropdown-item" href="generateReport">Generate Report</a></li>
                        </ul>
                        <li class="nav-item"><a class="nav-link" href="#!">Log Out</a></li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success text-center" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <!-- Edit Form -->
    <div class="form-container">
        <h2>Edit Expert</h2>
        <form action="{{ route('updateExpert') }}" method="post">
            @csrf
            @method('post')
            <input type="hidden" name="id" value="{{ $experts->id }}">
            <div class="form-group mb-3">
                <label for="E_Name">Name</label>
                <input type="text" class="form-control" id="E_Name" name="E_Name" value="{{ old('E_Name', $experts->E_Name) }}" required>
                @error('E_Name')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="E_Email">Email</label>
                <input type="email" class="form-control" id="E_Email" name="E_Email" value="{{ old('E_Email', $experts->E_Email) }}" required>
                @error('E_Email')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="E_Gender">Gender</label>
                <input type="text" class="form-control" id="E_Gender" name="E_Gender" value="{{ old('E_Gender', $experts->E_Gender) }}" required>
                @error('E_Gender')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="E_Address">Address</label>
                <input type="text" class="form-control" id="E_Address" name="E_Address" value="{{ old('E_Address', $experts->E_Address) }}" required>
                @error('E_Address')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="E_University">Workplace</label>
                <input type="text" class="form-control" id="E_University" name="E_University" value="{{ old('E_University', $experts->E_University) }}" required>
                @error('E_University')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="E_PhoneNum">Phone Number</label>
                <input type="tel" class="form-control" id="E_PhoneNum" name="E_PhoneNum" value="{{ old('E_PhoneNum', $experts->E_PhoneNum) }}" required>
                @error('E_PhoneNum')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('listexpert') }}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; ThesisTech 2024</p>
        </div>
    </footer>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="js/scripts.js"></script>
</body>
</html>
