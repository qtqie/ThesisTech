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
            background-color: #3EA99F;
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

        /* Carousel styles */
.carousel-container {
    position: relative;
    width: 100%;
    height: 500px; /* Adjust the height as needed */
    overflow: hidden;
}

.carousel-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel-item {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel-item.active {
    z-index: 1;
}

.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
}

.carousel-navigation {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    justify-content: space-between;
    width: 100px;
}

.carousel-prev, .carousel-next {
    background-color: #3EA99F;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}

.carousel-prev:hover, .carousel-next:hover {
    background-color: #444;
}

.about-us {
    color: #3EA99F; /* White color */
}

.about-us h1 {
    color: #3EA99F; /* White color */
}

.about-us h2 {
    color: #3EA99F; /* White color */
}

.about-us p {
    color: #3EA99F; /* White color */
}

.about-us ul {
    color: #3EA99F; /* White color */
}

.about-us li {
    color: #3EA99F; /* White color */
}



    </style>
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
            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
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
    </nav>>
    <main>
        <!-- Carousel container -->
        <article>
            <!-- Bootstrap Carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://www.educationmalaysia.in/assets/uploadFiles/study/IMG_20230811_194625.jpg" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                  <img src="https://ecomm.ump.edu.my/assets_eccom/img/login.jpg" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                  <img src="https://www.myeducationrepublic.com/wp-content/uploads/2023/06/Cara-Daftar-Biaya-Kuliah-9.jpg" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </article>
          
        <section class="about-us">
            <h1>Welcome to Our Thesis Management System</h1>
            <p>
                "We are thrilled to welcome you to our thesis management system. This platform is designed to support you throughout your academic journey, providing tools and resources to help you manage your thesis effectively. We are excited to have you on board and look forward to seeing the great work you will accomplish."
            <h2>Your Thesis, Your Success</h2>
            <p>
                Our platform is designed to provide you with the tools and resources you need to succeed, and we are always here to help you overcome any challenges you may face. We are excited to work with you and help you achieve your academic goals.
            </p>
        </section>
    </main>
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
  
