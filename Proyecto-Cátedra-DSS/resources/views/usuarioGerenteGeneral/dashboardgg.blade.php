@extends('main.menuGG')


@section('title')
Cajero | ApexFinance
@endsection

@section('name-user')
@if (session('user'))
    <p class="text-lg font-bold">Bienvenido, {{ session('user')->name }}!</p>
@endif
@endsection

@section('content-panel')



    <!-- Carrusel de imágenes publicitarias -->
    <div class="detalle">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ Vite::asset('resources/img/banco.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/img/banco1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/img/banco2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/img/banco3.jpeg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/img/banco4.jpeg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <!-- Controles del carrusel -->
            <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <div>
        <p>a</p>
    </div>

    <div class="info">
        <!-- Texto entre el carrusel y la sección de publicidad -->
        <p class="main-text  font-serif"><strong>Bienvenido al Banco de Agricultura de El Salvador!</strong></p>
        <p class="main-text  font-serif" style="text-align: justify;">Somos una institución financiera comprometida con
            el
            desarrollo económico y financiero del país. Nuestro enfoque principal es apoyar al sector agrícola y rural,
            proporcionando servicios bancarios de alta calidad diseñados para satisfacer las necesidades específicas de
            nuestros clientes.

            Ofrecemos una amplia gama de servicios financieros, que incluyen préstamos para la adquisición de equipos,
            financiamiento para la producción agrícola, líneas de crédito para agricultores y ganaderos, así como
            servicios de ahorro y cuentas corrientes adaptadas a las necesidades del sector.</p>


        <!-- Apartados de Publicidad -->





        <p class="main-text" style="text-align: left; font-size: 24px;  font-serif">Beneficios exclusivos:</p>
        <div class="row">
            <div class="col-md-4">
                <div class="ad-section">
                    <img src="{{ Vite::asset('resources/img/publicidad.jpg') }}" alt="Publicidad 1" class="img-fluid">
                    <div class="ad-text  font-serif">
                        <p>Seguridad en tus viajes</p>
                        <p>Con nuestras tarjetas bancarias, disfruta de la tranquilidad de viajar con seguridad.
                            Nuestros sistemas de seguridad avanzados protegen tus transacciones en cualquier parte
                            del mundo, brindándote paz mental mientras exploras nuevos destinos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ad-section">
                    <img src="{{ Vite::asset('resources/img/publicidad1.jpg') }}" alt="Publicidad 2" class="img-fluid">
                    <div class="ad-text  font-serif">
                        <p>Beneficios exclusivos para viajeros</p>
                        <p>Obtén acceso a una amplia gama de beneficios exclusivos diseñados especialmente para los
                            amantes de los viajes. Desde descuentos en hoteles y alquiler de autos hasta ofertas
                            especiales en actividades turísticas, nuestro banco se compromete a hacer que tus
                            experiencias de viaje sean aún más gratificantes.</P>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ad-section">
                    <img src="{{ Vite::asset('resources/img/publicidad2.jpg') }}" alt="Publicidad 3" class="img-fluid">
                    <div class="ad-text  font-serif">
                        <p>Asistencia financiera global</p>
                        <p>Ya sea que estés planeando unas vacaciones en el extranjero o un viaje de negocios,
                            nuestro banco está aquí para ayudarte con tus necesidades financieras en cualquier parte
                            del mundo. Con una red global de sucursales y servicios en línea, te ofrecemos el
                            respaldo que necesitas para disfrutar de tus viajes sin preocupaciones financieras.</p>
                    </div>
                </div>
            </div>
        </div>
        </d>

        <!-- Scripts de Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Inicialización del carrusel -->
        <script>
            $('.carousel').carousel();
        </script>

        <!-- Scripts de Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection