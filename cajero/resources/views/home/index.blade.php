@extends('layouts.app')
@section('title', 'Home')
@section('content')

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

    <div class="container">
        <section class="text-center">
            <div class="row">
                <div class="col-12">
                    <h2 class="p-4">Cuentas y Depósitos</h2>
                </div>
                <div class="col-12">
                    <div class="row row-cols-2 shadow-lg">
                        <div class="col">
                            <img src="https://media.istockphoto.com/id/1433388112/es/foto/concepto-de-financiaci%C3%B3n-de-banca-de-inversi%C3%B3n-de-ahorro-pila-de-monedas-con-alcanc%C3%ADa-sobre-la.jpg?s=1024x1024&w=is&k=20&c=3_WO4jp77JgRGBsQMDyi6NCl1nr0q2BEO7xF29p2Bp0="
                                class="card-img-top" alt="...">
                        </div>
                        <div class="col  align-self-center">
                            <h5 class="fw-bold fs-3">Cuenta Corriente</h5>
                            <p class="">permite administrar tus fondos de manera eficiente. Con ella, puedes
                                realizar pagos, transferencias y acceder a tu dinero fácilmente. ¡Descubre la comodidad y
                                flexibilidad que ofrece esta cuenta bancaria!”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row row-cols-2 shadow-lg">


                        <div class="col  align-self-center">
                            <h5 class="fw-bold fs-3">Cuentas de Ahorro</h5>
                            <p class="">servicio bancario que te permite depositar dinero de forma segura y acceder a
                                él cuando lo necesites. Además, esta cuenta ofrece intereses por el capital que mantienes en
                                ella, lo que te permite generar ingresos pasivos. ¡Empieza a ahorrar y a hacer crecer tus
                                fondos con nuestra cuenta de ahorro!
                            </p>
                        </div>
                        <div class="col">
                            <img src="https://media.istockphoto.com/id/1433388112/es/foto/concepto-de-financiaci%C3%B3n-de-banca-de-inversi%C3%B3n-de-ahorro-pila-de-monedas-con-alcanc%C3%ADa-sobre-la.jpg?s=1024x1024&w=is&k=20&c=3_WO4jp77JgRGBsQMDyi6NCl1nr0q2BEO7xF29p2Bp0="
                                class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>




                {{-- <div class="col">
                    <div class="card shadow-lg">
                        <img src="https://media.istockphoto.com/id/1433388112/es/foto/concepto-de-financiaci%C3%B3n-de-banca-de-inversi%C3%B3n-de-ahorro-pila-de-monedas-con-alcanc%C3%ADa-sobre-la.jpg?s=1024x1024&w=is&k=20&c=3_WO4jp77JgRGBsQMDyi6NCl1nr0q2BEO7xF29p2Bp0="
                            class="card-img-top" alt="...">
                        <diV class="card-body">
                            <h5 class="card-title text-center">Cuenta Corriente</h5>
                            <p class="card-text">permite administrar tus fondos de manera eficiente. Con ella, puedes
                                realizar pagos, transferencias y acceder a tu dinero fácilmente. ¡Descubre la comodidad y
                                flexibilidad que ofrece esta cuenta bancaria!”
                            </p>
                           
                        </diV>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-lg">
                        <img src="https://media.istockphoto.com/id/1433388112/es/foto/concepto-de-financiaci%C3%B3n-de-banca-de-inversi%C3%B3n-de-ahorro-pila-de-monedas-con-alcanc%C3%ADa-sobre-la.jpg?s=1024x1024&w=is&k=20&c=3_WO4jp77JgRGBsQMDyi6NCl1nr0q2BEO7xF29p2Bp0="
                            class="card-img-top" alt="...">
                        <diV class="card-body">
                            <h5 class="card-title text-center">Cuentas de Ahorro</h5>
                            <p class="card-text">Ahorra con inteligencia y ve crecer tu dinero. Características destacadas
                            </p>
                        </diV>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-lg">
                        <img src="https://media.istockphoto.com/id/1433388112/es/foto/concepto-de-financiaci%C3%B3n-de-banca-de-inversi%C3%B3n-de-ahorro-pila-de-monedas-con-alcanc%C3%ADa-sobre-la.jpg?s=1024x1024&w=is&k=20&c=3_WO4jp77JgRGBsQMDyi6NCl1nr0q2BEO7xF29p2Bp0="
                            class="card-img-top" alt="...">
                        <diV class="card-body">
                            <h5 class="card-title">Depósitos a Plazo</h5>
                            <p class="card-text">Maximiza tus ganancias con depósitos a plazo fijo. Lo que necesitas saber
                            </p>
                        </diV>
                    </div>
                </div> --}}


            </div>
        </section>



    </div>

@endsection
