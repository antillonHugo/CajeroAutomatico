<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Booostrap 5.2 css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>

    <header class="mb-3 pb-5">
        <nav class="navbar navbar-expand-lg shadow fixed-top bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <span class="fs-3 fw-bold">GO</span>
                    <span class="fw-light">Capital</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        <a class="nav-link" href=" {{ route('paises.index') }} ">Paises</a>
                        <a class="nav-link" href="#">Clientes</a>
                        <a class="nav-link" href="#">Cuentas</a>
                        <a class="nav-link" href="#">Transacciones</a>
                        <a class="nav-link" href="#">Iniciar sesión</a>
                        <a class="nav-link" href="#">Registrarse</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <footer class="container fw-bold bg-dark bg-opacity-10 text-gray">
        <div class="p-3 mt-4 p-lg-5 mt-lg-5 text-center">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            <h6>© 2024 Copyright. Todos los derechos reservados <span class="fw-bold">Hugo Antillón</span></h6>
        </div>
    </footer>
    <!--fontaweson-->
    <script src="https://kit.fontawesome.com/ca6b9ed282.js" crossorigin="anonymous"></script>
    <!--Booostrap 5.2 js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!--archivo js para el buscador de los formularios-->
    <script src="{{ asset('js/searchForm.js') }}"></script>
</body>

</html>
