@extends('layouts.app')
@section('title', 'Home')
@section('content')

    {{-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://plus.unsplash.com/premium_photo-1669137759430-3a04cd1a7cd0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" alt="...">

                <div
                    class="position-absolute top-50 start-50 translate-middle text-center text-white bg-dark bg-opacity-50 w-100 p-5">
                    <h1 class="fw-bold">Banco Seguro y Transparente: Tu Socio de Siempre</h1>
                    <h2>Gestiona tus cuentas y transacciones de manera segura y eficiente.</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1525267219888-bb077b8792cc?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" alt="...">
                <div
                    class="position-absolute top-50 start-50 translate-middle text-center text-white bg-dark bg-opacity-50 w-100 p-5">
                    <h1 class="fw-bold">Cuentas de Ahorro</h1>
                    <h2>“Nuestras cuentas de ahorro te ofrecen una forma segura de guardar tus fondos. Gana intereses
                        mientras mantienes acceso las 24 horas. Planifica tus metas financieras y observa cómo tus ahorros
                        crecen.”
                    </h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" alt="...">
                <div
                    class="position-absolute top-50 start-50 translate-middle text-center text-white bg-dark bg-opacity-50 w-100 p-5">
                    <h1 class="fw-bold">Préstamos Personales</h1>
                    <h2>“¿Necesitas financiamiento para un proyecto personal o una emergencia? Nuestros préstamos personales
                        son flexibles y se adaptan a tus necesidades. Tasas competitivas y plazos convenientes.”
                    </h2>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid mb-5">

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="{{ asset('img/carousel_01.avif') }}" class="rounded img-fluid" alt="...">

                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-10">
                        <h2 class="fw-bold fs-1">Impulsa tus Metas</h2>
                        <p class="fs-3">Con nuestros préstamos, puedes financiar tus proyectos personales o
                            empresariales.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="rounded img-fluid" alt="...">

                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-10">
                        <h2 class="fw-bold fs-1">Beneficios de Nuestra Tarjeta de Banco</h2>
                        <p class="fs-3">Puedes pagar en más de 120 establecimientos asociados. ¡Explora la
                            comodidad
                            y versatilidad que
                            ofrecen!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1556155092-490a1ba16284?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="rounded img-fluid" alt="...">

                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-10">
                        <h2 class="fw-bold fs-1">Facilidad de acceso</h2>
                        <p class="fs-3">Te ofrecemos múltiples canales para administrar tus finanzas de manera conveniente
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <div class="bg-dark p-3 bg-opacity-50">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </div>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <div class="bg-dark p-3 bg-opacity-50">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </div>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center">Cuentas y Depósitos</h2>
                    </div>
                    <div class="">

                    </div>

                </div>
            </div>
        </section>
    </div>

    {{-- <div class="position-relative">
        <img src="https://plus.unsplash.com/premium_photo-1669137759430-3a04cd1a7cd0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="imagen de portada del sitio web" class="img-fluid rounded">
        <div
            class="position-absolute top-50 start-50 translate-middle text-center text-white bg-dark bg-opacity-50 w-100 p-5">
            <h1 class="fw-bold">Banco Seguro y Transparente: Tu Socio de Siempre</h1>
            <h2>Gestiona tus cuentas y transacciones de manera segura y eficiente.</h2>
        </div>
    </div> --}}

@endsection
