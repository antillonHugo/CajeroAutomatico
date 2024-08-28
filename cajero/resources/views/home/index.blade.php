@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/carousel_01.avif') }}" class="img-fluid" alt="impulsa tus metas" loading="lazy">
                <div class="carousel-caption bg-dark bg-opacity-10">
                    <h2 class="fw-bold">Impulsa tus Metas</h2>
                    <p class="fs-5 fw-semibold">Con nuestros préstamos, puedes financiar tus proyectos personales
                        o
                        empresariales.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="img-fluid" alt="beneficios de nuestra tarjeta de banco" loading="lazy">
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
                    class="img-fluid" alt="facilidad de acceso" loading="lazy">

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
    <section class="container pt-5">
        <p class="fs-6">
            Somos una institución financiera comprometida con la excelencia en el servicio y la satisfacción de nuestros
            clientes. Ofrecemos una amplia gama de productos y servicios diseñados para cubrir tus necesidades
            financieras. Desde cuentas de ahorro hasta préstamos, estamos aquí para ayudarte a alcanzar tus metas
            económicas. Explora nuestro sitio y descubre cómo podemos ser parte de tu éxito financiero.
        </p>
    </section>
    <section class="container px-5 px-md-0 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="p-4">Cuentas y Depósitos</h2>
            </div>
            <div class="col-12 col-md-10 col-lg-9 shadow rounded">
                <div class="row row-cols-2">
                    <div class="col-12 col-md-6 p-0 m-0">
                        <img src="{{ asset('img/home/cuentacorriente.jpg') }}" class="img-fluid rounded"
                            alt="Ilustración de una cuenta corriente con tarjetas bancarias" loading="lazy">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row h-100">
                            <div class="col-12 col-xl-12 align-self-end">
                                <h5 class="fw-bold fs-3 py-2">Cuenta Corriente</h5>
                            </div>
                            <div class="col-12 col-xl-12">
                                <p>¿Estás listo para dar un paso hacia una gestión financiera más ágil y
                                    conveniente? Nuestra Cuenta Corriente es la solución perfecta para ti. Permíteme
                                    contarte por qué deberías considerarla.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-lg-9 shadow rounded my-4">
                <div class="row d-lg-flex flex-row-reverse row-cols-2">
                    <div class="col-12 col-md-6 p-0 m-0">
                        <img src="{{ asset('img/home/cuentahorro.jpg') }}" class="img-fluid rounded"
                            alt="Ilustración de una cuenta de ahorro" loading="lazy">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row h-100">
                            <div class="col-12 col-xl-12 align-self-end">
                                <h5 class="fw-bold fs-3 py-2">Cuentas de Ahorro</h5>
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
            <div class="col-md-10 col-lg-9 shadow rounded">
                <div class="row row-cols-2">
                    <div class="col-12 col-md-6 p-0 m-0">
                        <img src="{{ asset('img/home/depositoaplazo.png') }}" class="img-fluid rounded"
                            alt="Ilustración de un depósito a plazo fijo" loading="lazy">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row h-100">
                            <div class="col-12 col-xl-12 align-self-end">
                                <h5 class="fw-bold fs-3 py-2">Depósitos a Plazo</h5>
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
    <section class="bg-secondary  bg-opacity-10 rounded my-5 py-5">
        <div class="container shadow">
            <div class="row text-center justify-content-md-center">
                <div class="col-md-11 col-lg-8 col-xxl-9">
                    <h4 class="fw-bold">Capital Inteligente Financiero</h4>
                    <p class="lh-lg">
                        Hemos creado el Programa de Financiamiento Integral para ayudarte a alcanzar tus objetivos. Ya sea
                        que
                        desees comprar una casa, adquirir un automóvil, financiar estudios o planificar un viaje, estamos
                        aquí para
                        brindarte soluciones personalizadas. Nuestro equipo de expertos te guiará en cada paso, asegurando
                        que
                        obtengas las mejores condiciones y beneficios.
                    </p>
                </div>
                <div class="col-12 col-sm-8 col-xxl-4 p-0 m-0">
                    <div class="position-relative">
                        <img src="{{ asset('img/home/banner-financiamiento01.jpg') }}"
                            alt="Opcion de Financiamiento para Comprar una Casa" class="img-fluid rounded-top"
                            loading="lazy">
                        <h3 class="position-absolute top-0 start-0  p-3 bg-dark bg-opacity-25 text-white ms-lg-1 ms-xxl-0">
                            Casa</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-xxl-8">
                    <div class="row">
                        <div class="col-12 col-xxl-6 p-0 m-0">
                            <div class="position-relative">
                                <img src="{{ asset('img/home/banner-financiamiento02.jpg') }}"
                                    alt="Opcion de Financiamiento para Realizar un Viaje" class="img-fluid rounded-top"
                                    loading="lazy">

                                <h3 class="position-absolute top-0 start-0 p-3 bg-dark bg-opacity-25 text-white">Viajes
                                </h3>
                            </div>
                        </div>
                        <div class="col-12 pb-0 mb-0 col-xxl-6 p-0 m-0">
                            <div class="position-relative">
                                <img src="{{ asset('img/home/banner-financiamiento03.jpg') }}"
                                    alt="Opciones de Financiamiento para Comprar un Automóvil."
                                    class="img-fluid rounded-bottom" loading="lazy">

                                <h3 class="position-absolute top-0 start-0 p-3 bg-dark bg-opacity-25 text-white">Auto</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
