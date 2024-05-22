<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>ThesisTech</title>
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
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome!</h1>
                    <p class="lead mb-0">All the expert informations are here</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://media.istockphoto.com/id/1194745993/photo/smiling-muslim-woman-wearing-hijab.jpg?s=612x612&w=0&k=20&c=8yu_OxGaAiDQas7hjLBy8-CnjY40r5Gxw06dZV8lxFs=" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted"> helizahelmi@gmail.com</div>
                                    <h2 class="card-title h4">Prof. Dr. Heliza Ahmad</h2>
                                    <p class="card-text">Associate Professor of Computer Science, Monash University</p>
                                    <a class="btn btn-primary" href="#!">View →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://www.shutterstock.com/image-photo/head-shot-portrait-close-smiling-600nw-1714666150.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">tony.gorshek@yahoo.com</div>
                                    <h2 class="card-title h4">Prof. Dr. Tony Gorschek</h2>
                                    <p class="card-text">Full Professor, Oakland University</p>
                                    <a class="btn btn-primary" href="#!">View →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://www.josejeuland.com/wp-content/uploads/2022/04/headshotindoor.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">AndreaA@yahoo.com</div>
                                    <h2 class="card-title h4">Andrea Arcuri</h2>
                                    <p class="card-text">Professor of Software Engineering at Kristiana University College</p>
                                    <a class="btn btn-primary" href="#!">View →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://www.barcouncil.org.uk/static/d9b8edd5-3e49-4324-ad512086447ed774/250x167_highestperformance_/MM.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">dianajasmine@gmail.com<</div>
                                    <h2 class="card-title h4">Diana Jasmine, Ph.D</h2>
                                    <p class="card-text">Professor of Computer Science, University Technology Malaysia</p>
                                    <a class="btn btn-primary" href="#!">View →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search your expert here ..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Research Group</div>
                        <div class="card-body">The academicians in the computing faculty are activelyinvolved in research and development in various areas related to computing and information technology fields.These are the following group</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">CSRG</a></li>
                                        <li><a href="#!">VISIC</a></li>
                                        <li><a href="#!">MIRG</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Cy-SIG</a></li>
                                        <li><a href="#!">DBIS</a></li>
                                        <li><a href="#!">SERG</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>
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
