<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LATIHAN LAYOUT BOOTSTRAP</title>
    <script src="{{ asset('assets/js/color-modes.js') }}"></script> 
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">-->   
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars-offcanvas/">
      Custom styles for this template -->
    <link href="{{ asset('asset/navbar-fixed.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/tambahan.css')}}" rel="stylesheet">
  </head>
  <body>    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Izyankareem</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        
       <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
          <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
        </li>
      </ul>
     <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>-->
    </div>
  </div>
</nav>

<main class="container">
  <div class="tertiary p-5 rounded">
    <H1></H1>
    
   </div>
  <div class="card">
    <div class="card-header"> <H2>@yield('title')</H2></div>
    <div class="card-body">
      @yield('form')
        {{-- <form>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3">
              </div>
            </div>           
          
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form> --}}
    </div>
  </div>
</main>

<script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>
<footer class="text-center text-lg-start text-light fixed-bottom" style="background-color: #45637d;">
    <div class="container">
    <!-- Copyright -->
    <div class="text-center p-3 text-light">
      © 2023 Copyright: Izyankareem
    </div>
    <!-- Copyright -->
    </div>
  </footer>
    </body>
</html>
