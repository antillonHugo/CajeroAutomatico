@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <x-shared.text-center>
        <div class="container-full position-relative">
            <div class="row">
                <div class="col-12 col-lg-6 pe-lg-2">
                    <div class="my-3 text-lg-center px-lg-5">
                        <h1 class="fw-bold lh-sm lh-md py-3">Bienvenido a
                            <span class="d-block">
                                <b class="pe-1">Go</b>Capital
                            </span>
                        </h1>
                        <p class="text-break px-xl-5 me-lg-5">
                            Somos una solución integral para todas tus necesidades bancarias.
                            Nuestra misión es proporcionarte los mejores servicios bancarios
                            con una interfaz fácil de usar y un enfoque en la
                            sostenibilidad.
                        </p>
                        <x-home.link href="https://example.coms">
                            Ver más...
                        </x-home.link>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-none d-lg-block p-lg-0">
                    <img src="https://images.unsplash.com/photo-1530047625168-4b29bfbbe1fc?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="w-100 h-100 object-fit-cover rounded-end" alt="imagen representa la felicidad de una madre"
                        loading="lazy">
                </div>
            </div>
            <div class="carouselhome">
                <div id="carouselHome" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://plus.unsplash.com/premium_photo-1661369965783-0e769d86b410?q=80&w=1504&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="d-block w-100 rounded" alt="representa la actitud de los empleados" loading="lazy">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1726137569906-14f8079861fa?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="d-block w-100 rounded" alt="represntación del servicio de tarjetas de creditos"
                                loading="lazy">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.pexels.com/photos/4148842/pexels-photo-4148842.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="d-block w-100 rounded" alt="representacion de una familia feliz" loading="lazy">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselHome"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </x-shared.text-center>
    <x-shared.text-center>
        <x-shared.centered-container-lg>
            <p class="fs-4 text-secondary fw-semibold text-break">
                Experimenta la conveniencia de realizar operaciones bancarias con Sistema
                Bancario. Explora nuestros servicios y comienza a realizar
                operaciones bancarias hoy mismo.
            </p>
            <x-home.link href="">
                Detalles...
            </x-home.link>
        </x-shared.centered-container-lg>
    </x-shared.text-center>
    <x-shared.text-center>
        <x-shared.centered-container-lg>
            <h2 class="text-break">Construye tu futuro financiero hoy.</h2>
            <p class="lh-lg text-break">
                En cada decisión que tomas, estás dando forma a tu futuro.
                Con nuestras herramientas y recursos, te ayudamos a
                establecer metas claras y alcanzarlas. ¡Hoy es el primer
                paso hacia la vida financiera que siempre has soñado!
            </p>
        </x-shared.centered-container-lg>
    </x-shared.text-center>
    <x-shared.text-center>
        <div class="container d-inline-block p-1">
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <a href="" class="text-reset text-decoration-none">
                        <img src="{{ asset('../img/home/cuentas.png') }}"
                            alt="imagen representa el servicio de apertura de cuenta" class="img-fluid rounded"
                            loading="lazy">
                        <h3 class="pt-2">Cuentas Bancarias</h3>
                        <p class="fw-medium lh-base">
                            Para gestionar tus gastos diarios con facilidad.
                        </p>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <a href="" class="text-reset text-decoration-none">
                        <img src="{{ asset('../img/home/prestamos.png') }}" alt="prestamos y creditos"
                            class="img-fluid rounded" loading="lazy">
                        <h3 class="pt-2">Préstamos y Créditos</h3>
                        <p class="fw-medium lh-base">
                            Para financiar tus proyectos personales.
                        </p>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <a href="" class="text-reset text-decoration-none">
                        <img src="{{ asset('../img/home/tarjeta.png') }}"
                            alt="representacion del servicio de tarjetas de creditos" class="img-fluid rounded"
                            loading="lazy">
                        <h3 class="pt-2">Emisión de Tarjetas Bancarias</h3>
                        <p class="fw-medium lh-base">
                            Obtenen tarjetas de débito, crédito, prepago y otras.
                        </p>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <a href="" class="text-reset text-decoration-none">
                        <img src="{{ asset('../img/home/soporte.png') }}" alt="representación del servicio al cliente 24/7"
                            class="img-fluid rounded" loading="lazy">
                        <h3 class="pt-2">Atención y Soporte al Cliente</h3>
                        <p class="fw-medium lh-base">
                            Disponibilidad de atención telefónica y en línea para resolver dudas y problemas.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </x-shared.text-center>
    <x-home.banner>
        <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="img-banner" alt="beneficios de nuestra tarjeta de banco" loading="lazy">
        <div class="position-absolute top-50 start-50 translate-middle w-100 p-3 bg-dark bg-opacity-25 text-white">
            <x-shared.centered-container-lg>
                <h2 class="fw-bolder text-break">Red de Beneficios Bancarios</h2>
                <p class="fs-4 fw-semibold" id="beneficios">
                    Es un servicio exclusivo que conecta a los clientes del banco con
                    una ampliagama de aliados comerciales, incluyendo supermercados,
                    farmacias y tiendas.
                </p>
                <x-home.link href="#beneficios">Ver más...</x-home.link>
            </x-shared.centered-container-lg>
        </div>
    </x-home.banner>
    <x-shared.text-center>
        <div class="pb-5">
            <x-shared.centered-container-lg>
                <div>
                    <h3 class="fw-bold text-break px-2">Red de Socios Comerciales</h3>
                    <p class="px-4 fw-medium lh-lg">
                        Descubre nuestra Red de Socios Comerciales y aprovecha descuentos
                        y promociones exclusivas en supermercados, farmacias, tiendas
                        de ropa y más. Mejora tu experiencia de compra y maximiza el valor
                        de tus transacciones bancarias con nuestros aliados comerciales.
                    </p>
                </div>
            </x-shared.centered-container-lg>
            <div class="nav nav-pills d-flex justify-content-center gap-3" id="nav-tab" role="tablist">
                <button class="nav-link py-3 px-4 active" id="nav-mercado-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-mercado" type="button" role="tab" aria-controls="nav-mercado"
                    aria-selected="true">
                    Supermercados
                </button>
                <button class="nav-link py-3 px-4" id="nav-tiendas-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-tiendas" type="button" role="tab" aria-controls="nav-tiendas"
                    aria-selected="false">
                    Tiendas de Ropa
                </button>
                <button class="nav-link py-3 px-4" id="nav-restaurante-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-restaurante" type="button" role="tab" aria-controls="nav-restaurante"
                    aria-selected="false">
                    Restaurantes
                </button>
                <button class="nav-link py-3 px-4" id="nav-informatica-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-informatica" type="button" role="tab" aria-controls="nav-informatica"
                    aria-selected="false">
                    Tiendas de informática
                </button>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active text-dark" id="nav-mercado" role="tabpanel"
                    aria-labelledby=" nav-mercado-tab" tabindex="0">
                    @include('home.mercado')
                </div>
                <div class="tab-pane fade text-dark" id="nav-tiendas" role="tabpanel" aria-labelledby="nav-tiendas-tab"
                    tabindex="0">
                    @include('home.ropa')
                </div>
                <div class="tab-pane fade text-dark" id="nav-restaurante" role="tabpanel"
                    aria-labelledby="nav-restaurante-tab" tabindex="0">
                    @include('home.restaurante')
                </div>
                <div class="tab-pane fade text-dark" id="nav-informatica" role="tabpanel"
                    aria-labelledby="nav-informatica-tab" tabindex="0">
                    @include('home.informatica')
                </div>
            </div>
        </div>
    </x-shared.text-center>
@endsection
