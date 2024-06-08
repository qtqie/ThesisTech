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
                    <p class="lead mb-0">All your expert informations are here</p>
                </div>
            </div>
        </header>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="filter-container">
                        <label for="filter">Filter</label>
                        <select id="filter" wire:model="nyFilter" class="filter-select">
                            <option value="">No Selected</option>
                            @foreach ($experts as $expert)
                                <option value="{{ $expert->e_ID }}">{{ $expert->e_Expertise}}</option>
                            @endforeach
                        </select>
                    </div>

                    <form action="{{url('SearchExpert')}}" method="GET">
                        <input type="text" name="query" class="search-input" placeholder="Search...">
                        <button type="submit" class="search-button">Search</button>
                    </form>
                </div>

            </nav>


            @if(isset($experts))
                <div class="container mt-5">
                    <h4>Search Results for "{{ $query }}"</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Workspace</th>
                                <th>Address</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($experts as $expert)
                                <tr>
                                    <td>{{ $expert->E_Name }}</td>
                                    <td>{{ $expert->E_University }}</td>
                                    <td>{{ $expert->E_Adress }}</td>
                                    <td>{{ $expert->E_Email }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">No experts found matching your search criteria.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            @endif
      
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
