<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Página de Inicio de Sesión Bancario | Nombre del Banco</title>
</head>
<body>
    <div class="container " id="container">
        <div class="form-container sign-up">
            <form class="form-text" >
                <h1>Crear Cuenta Bancaria</h1>
                <div class="social-icons form-text" >
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>O usa tu correo electrónico para registrarte</span>
                <input type="text" placeholder="Nombre">
                <input type="email" placeholder="Correo electrónico">
                <input type="password" placeholder="Contraseña">
                <button type="submit">Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in ">
            <form class="form-text">
                <h1>Iniciar Sesión Bancario</h1>
                <div class="social-icons form-text" >
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>O usa tu correo electrónico y contraseña</span>
                <input type="email" placeholder="Correo electrónico">
                <input type="password" placeholder="Contraseña">
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button><a href="{{ route('menutemporal') }}" class="button">Iniciar Sesión</a></button>
            </form>
        </div>
        <div class="toggle-container ">
            <div class="toggle">
                <div class="toggle-panel toggle-left form-text">
                    <h1>¡Bienvenido de vuelta!</h1>
                    <p>Ingresa tus detalles personales para acceder a tu cuenta bancaria</p>
                    <button class="hidden" id="login">Iniciar Sesión</button>
                </div>
                <div class="toggle-panel toggle-right form-text">
                    <h1>¡Hola, Amigo!</h1>
                    <p>Regístrate con tus detalles personales para crear una nueva cuenta bancaria</p>
                    <button class="hidden" id="register">Registrarse</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
