@extends('layouts.app')
@section('title', 'Home')
@section('content')

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{ asset('img/carousel_01.avif') }}" class="img-fluid" alt="impulsa tus metas">

                <div class="carousel-caption bg-dark bg-opacity-10">
                    <h2 class="fw-bold">Impulsa tus Metas</h2>
                    <p class="fs-5 fw-semibold">Con nuestros préstamos, puedes financiar tus proyectos personales
                        o
                        empresariales.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="img-fluid" alt="beneficios de nuestra tarjeta de banco">

                <div class="carousel-caption bg-dark bg-opacity-10">
                    <h2 class="fw-bold">Beneficios de Nuestra Tarjeta de Banco</h2>
                    <p class="fs-5 fw-semibold">Puedes pagar en más de 120 establecimientos asociados. ¡Explora la
                        comodidad
                        y versatilidad que
                        ofrecen!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1556155092-490a1ba16284?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="img-fluid" alt="facilidad de acceso">

                <div class="carousel-caption bg-dark bg-opacity-10">
                    <h2 class="fw-bold">Facilidad de acceso</h2>
                    <p class="fs-5 fw-semibold">Te ofrecemos múltiples canales para administrar tus finanzas de manera
                        conveniente
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <div class="bg-dark p-1 bg-opacity-50">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </div>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <div class="bg-dark p-1 bg-opacity-50">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </div>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <section class="pt-5">
            <p class="fs-6">
                Somos una institución financiera comprometida con la excelencia en el servicio y la satisfacción de nuestros
                clientes. Ofrecemos una amplia gama de productos y servicios diseñados para cubrir tus necesidades
                financieras. Desde cuentas de ahorro hasta préstamos, estamos aquí para ayudarte a alcanzar tus metas
                económicas. Explora nuestro sitio y descubre cómo podemos ser parte de tu éxito financiero.
            </p>
        </section>
        <section class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h2 class="p-4">Cuentas y Depósitos</h2>
                </div>
                <div class="col-12 my-3 shadow rounded">
                    <div class="row row-cols-2">
                        <div class="col-12 col-md-6 p-0 m-0">
                            <img src="{{ asset('img/home/cuentacorriente.jpg') }}" class="img-fluid rounded"
                                alt="Ilustración de una cuenta corriente con tarjetas bancarias" loading="lazy">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row h-100">
                                <div class="col-12 col-xl-12 align-self-end">
                                    <h5 class="fw-bold fs-3">Cuenta Corriente</h5>
                                </div>
                                <div class="col-12 col-xl-12">
                                    <p>¿Estás listo para dar un paso hacia una gestión financiera más ágil y
                                        conveniente? Nuestra Cuenta Corriente es la solución perfecta para ti. Permíteme
                                        contarte por qué deberías considerarla
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-3 shadow rounded">
                    <div class="row row-cols-2">
                        <div class="col-12 col-md-6 p-0 m-0">
                            <img src="{{ asset('img/home/cuentahorro.jpg') }}" class="img-fluid rounded"
                                alt="Ilustración de una cuenta de ahorro" loading="lazy">
                        </div>
                        <div class="col-12 col-md-6">

                            <div class="row h-100">
                                <div class="col-12 col-xl-12 align-self-end">
                                    <h5 class="fw-bold fs-3">Cuentas de Ahorro</h5>
                                </div>
                                <div class="col-12 col-xl-12">
                                    <p>Con una Cuenta de Ahorro, tu dinero no solo está seguro, sino que
                                        también gana intereses. Cada mes, verás crecer tus ahorros sin esfuerzo adicional.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-3 shadow rounded">
                    <div class="row row-cols-2">
                        <div class="col-12 col-md-6 p-0 m-0">
                            <img src="{{ asset('img/home/depositoaplazo.png') }}" class="img-fluid rounded"
                                alt="Ilustración de un depósito a plazo fijo" loading="lazy">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row h-100">
                                <div class="col-12 col-xl-12 align-self-end">
                                    <h5 class="fw-bold fs-3">Depósitos a Plazo</h5>
                                </div>
                                <div class="col-12 col-xl-12">
                                    <p>Con los Depósitos a Plazo, tu dinero genera intereses a una tasa fija
                                        durante un período específico (por ejemplo, 3, 6 o 12 meses).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <h4 class="pt-5">Capital Inteligente Financiero</h4>
            <p class="">
                Hemos creado el Programa de Financiamiento Integral para ayudarte a alcanzar tus objetivos. Ya sea que
                desees comprar una casa, adquirir un automóvil, financiar estudios o planificar un viaje, estamos aquí para
                brindarte soluciones personalizadas. Nuestro equipo de expertos te guiará en cada paso, asegurando que
                obtengas las mejores condiciones y beneficios.
            </p>
            <div class="row shadow">
                <div class="col-6 col-md-8 p-0 m-0">
                    <img src="{{ asset('img/home/banner-financiamiento.jpg') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-6 col-md-4 p-0 m-0">
                    <div class="row">
                        <div class="col-12">
                            <img src="https://cdn.pixabay.com/photo/2020/05/25/17/03/travel-5219496_1280.jpg" alt=""
                                class="img-fluid rounded">
                        </div>
                        <div class="col-12">
                            <img src="https://img.freepik.com/foto-gratis/mujer-comprando-carro_1303-13573.jpg?t=st=1723793866~exp=1723797466~hmac=4d30e0f56b9abff8a61b1f170a67309a62792c17cc65e7f6920ca6f181bfa2d2&w=740"
                                alt="" class="img-fluid rounded">

                        </div>
                    </div>

                </div>

            </div>
        </section>
    @endsection
