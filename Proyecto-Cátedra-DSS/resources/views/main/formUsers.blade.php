<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.png') }}">
    <script src="https://kit.fontawesome.com/8dd3c39186.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Inicio de Sesión | ApexFinance</title>

    @vite(['resources/css/main/formUsers.css'])
</head>
<body>
    <div class="container " id="container">
        <div class="form-container sign-up">
            <form class="form-text" >
                <h1>Crear tu Cuenta Bancaria💸</h1>
                <span>Y usa tu correo electrónico para registrarte</span>
                <input type="text" placeholder="Nombre">
                <input type="email" placeholder="Correo electrónico">
                <input type="password" placeholder="Contraseña">
                <input type="password" placeholder="Repite la Contraseña">
                <button type="submit">Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in ">
            <form class="form-text">
                <h1>Iniciar Sesión Bancario💰</h1>
                <span style="margin-top: 10px;">Y usa tu correo electrónico y contraseña</span>
                <input type="email" style="margin-top: 15px;" placeholder="Correo electrónico">
                <input type="password" placeholder="Contraseña">
                <button><a href="" class="button">Iniciar Sesión</a></button>
            </form>
        </div>
        <div class="toggle-container ">
            <div class="toggle">
                <div class="toggle-panel toggle-left form-text">
                    <h1>ApexFinance te dice ¡Bienvenido de vuelta!</h1>
                    <p>Ingresa tus detalles personales para acceder a tu cuenta.</p>
                    <button class="hidden" id="login">Iniciar Sesión</button>
                </div>
                <div class="toggle-panel toggle-right form-text">
                    <h1>ApexFinance te dice ¡Bienvenido!</h1>
                    <p>Regístrate con tus detalles personales para crear una nueva cuenta.</p>
                    <button class="hidden" id="register">Registrarse</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
