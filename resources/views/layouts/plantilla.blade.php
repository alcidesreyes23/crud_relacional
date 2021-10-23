<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300&display=swap" rel="stylesheet">

    <!-- DATA TABLES CSS-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">

    <!-- TOAST CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- CSS -->
     @yield('css')
</head>
    <style>
        body h1{
            font-family: 'Oswald', sans-serif;
            line-height : 50px;
        }

        body{
            font-family: 'Raleway', sans-serif;
        }
    </style>
<body>  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><strong>PHP</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown mr-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lista Ejercicios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="index.jsp">Ejercicio MVC</a></li>
                        <li><a class="dropdown-item" href="index2.jsp">Ejercicio Java Beans</a></li>
                        <li><a class="dropdown-item" href="index3.jsp">Ejercicio JSTL</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    </nav>


    <!-- CONTENIDO -->
    @yield('content')




    <div class="container">
        <footer class="container mt-5 border-top p-3">
        <p class="float-end">© Ciclo-02-2021 Software Libre.</p>
        <p><strong href="#">Erick Alcides Reyes Avila</strong> · <strong href="#"># 261318</strong></p>
        </footer>
    </div>    
       <!-- SweetAlert -->
       <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       <!-- jQuery -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <!-- JS Bootstrap -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <!--iMask-->
       <script src="https://unpkg.com/imask"></script>
       <!-- Jquery Mask -->
        <script src="https://cdnjs.com/libraries/jquery.mask"></script>

       <!-- TOAST JS -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       <!-- DATA TABLE JS -->
       <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" ></script>
       <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js" ></script>
       <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js" ></script>
       <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js" ></script>
      </body>
     
      <!-- JavaScript -->
     @yield('js')
</html>


   

