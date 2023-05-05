<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" href=" {{ url('img/log.png') }} " type="image/icon type">
    <title>XYZ</title>
    <style>
      .banner-image {
        background-image: url('img/fondo.png');
        background-size: cover;
      }
    </style>
  </head>

  <body>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 bg-dark" style="background-image: linear-gradient(to right, #0f2027, #203a43, #2c5364);">
        <div class="container">
            <img src="{{ url('img/logo.png') }}" alt="YNv@XYZ" width="60" height="80">
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white bg-primary" href=" {{ url('/') }} ">Inicio</a>
                        </li>
                    <li class="nav-item">
                        <button onclick="location.href = '{{ route('register') }}'" type="button" class="btn btn-link" disabled>Nosotros</button>
                    </li>
                    <li class="nav-item">
                        <button onclick="location.href = '{{ route('register') }}'" type="button" class="btn btn-link" disabled>Servicios</button>
                    </li>
                    <li class="nav-item">
                        <button onclick="location.href = '{{ route('login') }}'" type="button" class="btn btn-success" >Acceder</button>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar  -->

    <!-- Banner Image  -->
    <div class="banner-image w-80 vh-100 d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <a class="nav-link text-white" href=" {{ url('login') }} ">
                        <img src="{{url('img/admin.png')}}" alt="admin-dev" width="200" height="200">
                    </a>
                    <div class="text-with">
                        <a class="nav-link text-white" href=" {{ url('login') }} ">
                            <h2 class="text-light">Adminitrador</h2>
                        </a>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <a class="nav-link text-white" href=" {{ url('login') }} ">
                        <img src="{{url('img/users.png')}}" alt="user-cliente" width="190" height="200">
                    </a>
                    <div class="text-white">
                        <a class="nav-link text-white" href=" {{ url('login') }} ">
                            <h2 class="text-light">Ususario</h2>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Banner Image  -->

    <!-- Copyright -->
    <footer class="text-center text-white">
        <div class="text-center p-3"  style="background-image: linear-gradient(to right, #0f2027, #203a43, #2c5364);">
            XYZ S.A. © 2023 Todos los derechos reservados.
            <hr>
            dev: Yovan Ramón Yaune Enovore
        </div>
    </footer>
    <!-- Copyright -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </body>
</html>
