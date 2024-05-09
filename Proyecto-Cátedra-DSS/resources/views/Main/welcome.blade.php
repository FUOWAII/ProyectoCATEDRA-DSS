<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.png') }}">
    <script src="https://kit.fontawesome.com/8dd3c39186.js" crossorigin="anonymous"></script>
    <title>Inicio | ApexFinance</title>

    @vite(['resources/css/main/welcome.css', 'resources/css/main/bootstrap.min.css'])

</head>

<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner"
        style="background-image: url({{ Vite::asset('resources/img/banner-bk.jpg') }});">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="logo">
                    </div>
                    <div class="col-6 align-self-center text-right">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ route('dashboard') }}" class="text-white lead"
                                    style="margin-right: 1.5em;">Panel</a>
                            @else
                                <a href="{{ route('login') }}" class="text-white lead" style="margin-right: 1.5em;">Iniciar
                                    Seción</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-white lead"
                                        style="margin-right: 1.5em;">Registro</a>
                                @endif
                            @endauth
                        @endif

                        <a href="#" class="text-white lead">Sobre nosotros</a>
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"
                class="display-3 text-white font-weight-bold my-5">
                Una nueva oportunidad
                <br>
                Para gestionar tu economía épicamente
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"
                class="lead text-white my-4">
                En donde tus necesidades y desarrollos son nuestra prioridad
                <br>Porque en ApexFinance nos importan tus desarrollos económicos y siempre estaremos para ayudarte.
            </p>
            @if (Route::has('login'))
                @auth
                    <a href="{{ route('dashboard') }}" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000"
                        data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Ir al panel</a>
                @else
                    <a href="{{ route('register') }}" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000"
                        data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Regístrate!</a>
                @endauth
            @endif
        </div>
    </div>
    <!-- three-blcok -->
    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">Smartest protection for your site</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <img src="{{ Vite::asset('resources/img/smart-protect-1.jpg') }}" alt="Anti-spam" class="mx-auto">
                <h4>Anti-spam</h4>
                <p>Lorem ipsum dolor sit amet porro his no his deleniti</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <img src="{{ Vite::asset('resources/img/smart-protect-2.jpg') }}" alt="Phishing Detect" class="mx-auto">
                <h4>Phishing Detect</h4>
                <p>Ne error antiopam usu. Sed vocen concludaturque ea</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <img src="{{ Vite::asset('resources/img/smart-protect-3.jpg') }}" alt="Smart Scan" class="mx-auto">
                <h4>Smart Scan</h4>
                <p>Et usu ocurreret elaboraret doctus prodesse assueverit.</p>
            </div>
        </div>
    </div>
    <!-- feature (skew background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-first">
        <div class="container my-5">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold">Take a look inside</h2>
                    <p class="my-4">Te iisque labitur eos, nec sale argumentum scribentur no,
                        <br> augue disputando in vim. Erat fugit sit at, ius lorem deserunt deterruisset no.
                    </p>
                    <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-blue">Learn More</a>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true"
                    class="col-md-6 align-self-center">
                    <img src="{{ Vite::asset('resources/img/feature-1.png') }}" alt="Take a look inside"
                        class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- feature (green background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-last">
        <div class="container">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true"
                    class="col-md-6 flex-md-last">
                    <h2 class="font-weight-bold">Safe and reliable</h2>
                    <p class="my-4">
                        Duo suas detracto maiestatis ad, commodo lucilius invenire nec ad,
                        <br> eum et oratio disputationi. Falli lobortis his ad
                    </p>
                    <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-blue">Learn More</a>
                </div>
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true"
                    class="col-md-6 align-self-center flex-md-first">
                    <img src="{{ Vite::asset('resources/img/feature-2.png') }}" alt="Safe and reliable"
                        class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- client -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{ Vite::asset('resources/img/client-1.png') }}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{ Vite::asset('resources/img/client-2.png') }}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{ Vite::asset('resources/img/client-3.png') }}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{ Vite::asset('resources/img/client-4.png') }}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{ Vite::asset('resources/img/client-5.png') }}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{ Vite::asset('resources/img/client-6.png') }}" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- contact -->
    <div class="jumbotron jumbotron-fluid" id="contact"
        style="background-image: url({{ Vite::asset('resources/img/contact-bk.jpg') }});">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white">
                    <h2 class="font-weight-bold">Contact Us</h2>
                    <p class="my-4">
                        Te iisque labitur eos, nec sale argumentum scribentur,
                        <br> augue disputando in vim. Erat fugit sit at, ius lorem.
                    </p>
                    <ul class="list-unstyled">
                        <li>Email : company_email@com</li>
                        <li>Phone : 361-688-5824</li>
                        <li>Address : 4826 White Avenue, Corpus Christi, Texas</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="name" class="form-control" id="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Email">Your Email</label>
                                <input type="email" class="form-control" id="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <button type="submit"
                            class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- copyright -->
    <div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                    Copyright © 2018 Chen, Yi-Ya.
                </div>
                <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                    <a href="#" class="d-inline-block text-center ml-2">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                        <i class="fa fa-medium" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- AOS -->
    <script src="js/aos.js"></script>
    <script>
        AOS.init({});
    </script>
</body>

</html>
