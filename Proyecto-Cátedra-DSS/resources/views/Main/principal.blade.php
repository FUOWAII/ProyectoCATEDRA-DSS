<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Agricultura</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .navbar {
        background-color: #87CEFA; /* Color de fondo de la barra de navegación (azul claro) */
    }
    .navbar-brand img {
        max-height: 90px;
    }
    .carousel-item img {
        width: 100%;
        object-fit: cover;
    }
    .ad-section {
        margin-top: 30px;
    }
    .ad-section img {
        max-width: 100%;
    }
    .ad-text {
        text-align: center;
        margin-top: 10px;
    }
    .ad-text p {
        text-align: justify;
    }
    .main-text {
        text-align: center;
        margin-top: 20px;
        font-size: 18px;
        margin-left: 20px;
        margin-right: 20px;
    }
    .navbar-nav {
        width: 100%;
        justify-content: center;
    }
    /* Reducir tamaño del nombre del banco */
    .navbar-brand h1 {
        font-size: 24px;
    }
    /* Cambiar color y efecto al pasar el cursor sobre los elementos del menú */
    .nav-item a {
        color: #fff; /* Color del texto del menú */
        transition: all 0.3s ease-in-out; /* Transición suave */
    }
    .nav-item a:hover {
        color: #4a90e2; /* Cambio de color al pasar el cursor (azul claro) */
        font-weight: bold; /* Aumentar grosor del texto */
        text-decoration: none; /* Eliminar subrayado */
    }
    .btn-primary {
    white-space: nowrap; /* Evitar que el texto se rompa en varias líneas */
    padding: 8px 20px; /* Ajustar el relleno del botón */
    font-size: 16px; /* Tamaño de fuente del botón */
    border-radius: 5px; /* Borde redondeado */
}
</style>

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="/img/LOGO BANCO.jpg" alt="Banco de Agricultura">
            </a>
            <!-- Nuevos apartados -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Números de Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sucursales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Horarios</a>
                </li>
            </ul>
            <!-- Botón de Inicio de Sesión -->
            <div class="ml-auto">
    <a href="{{ route('welcome') }}" class="btn btn-primary" style="white-space: nowrap;">Iniciar Sesión</a>
</div>
    </nav>

    <!-- Carrusel de imágenes publicitarias -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/Publicidad1.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/Publicidad2.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/Publicidad3.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/Publicidad4.jpeg" class="d-block w-100" alt="...">
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

    <!-- Texto entre el carrusel y la sección de publicidad -->
    <p class="main-text"><strong>Bienvenido al Banco de Agricultura de El Salvador!</strong></p>
    <p class="main-text" style="text-align: justify;">Somos una institución financiera comprometida con el desarrollo económico y financiero del país. Nuestro enfoque principal es apoyar al sector agrícola y rural, proporcionando servicios bancarios de alta calidad diseñados para satisfacer las necesidades específicas de nuestros clientes.

        Ofrecemos una amplia gama de servicios financieros, que incluyen préstamos para la adquisición de equipos, financiamiento para la producción agrícola, líneas de crédito para agricultores y ganaderos, así como servicios de ahorro y cuentas corrientes adaptadas a las necesidades del sector.</p>
    <p class="main-text" style="text-align: left; font-size: 24px;">Beneficios exclusivos:</p>

    <!-- Apartados de Publicidad -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="ad-section">
                    <img src="/img/publicidad6.jpeg" alt="Publicidad 1" class="img-fluid">
                    <div class="ad-text">
                        <p>Seguridad en tus viajes</p>
                            <p>Con nuestras tarjetas bancarias, disfruta de la tranquilidad de viajar con seguridad. Nuestros sistemas de seguridad avanzados protegen tus transacciones en cualquier parte del mundo, brindándote paz mental mientras exploras nuevos destinos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ad-section">
                    <img src="/img/publicidad7.jpeg" alt="Publicidad 2" class="img-fluid">
                    <div class="ad-text">
                        <p>Beneficios exclusivos para viajeros</p>
                        <p>Obtén acceso a una amplia gama de beneficios exclusivos diseñados especialmente para los amantes de los viajes. Desde descuentos en hoteles y alquiler de autos hasta ofertas especiales en actividades turísticas, nuestro banco se compromete a hacer que tus experiencias de viaje sean aún más gratificantes.</P>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ad-section">
                    <img src="/img/Publicidad8.jpeg" alt="Publicidad 3" class="img-fluid">
                    <div class="ad-text">
                        <p>Asistencia financiera global</p>
                        <p>Ya sea que estés planeando unas vacaciones en el extranjero o un viaje de negocios, nuestro banco está aquí para ayudarte con tus necesidades financieras en cualquier parte del mundo. Con una red global de sucursales y servicios en línea, te ofrecemos el respaldo que necesitas para disfrutar de tus viajes sin preocupaciones financieras.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Inicialización del carrusel -->
    <script>
        $('.carousel').carousel();
    </script>
</body>
</html>
