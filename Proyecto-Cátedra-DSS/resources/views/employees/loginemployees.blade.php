<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inicio empleados | ApexFinance</title>

    @vite(['resources\css\employees\loginEmployees.css'])
</head>

<body>
    <div class="container-form register">
        <div class="information">
            <div class="info-childs">
                <h2>ApexFinance te dice ¡Bienvenido!</h2>
                <p>En donde tu trabajo no solo te da desarrollo profesional, sino que fomenta apoyo en tu sociedad</p>
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Hola empleado🧑‍🏭</h2>
                <p>Inicia seción para ejercer tu rol.</p>
                <form class="form form-register" method="POST" action="{{ route('login_employee_post') }}">
                    @csrf
                    <div>
                        <label>
                            <i class='bx bx-envelope'></i>
                            <input type="email" name="email" placeholder="Correo electrónico">
                        </label>
                    </div>
                    <div>
                        <label>
                            <i class='bx bx-lock-alt'></i>
                            <input type="password" name="password" placeholder="Contraseña">
                        </label>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <input type="submit" value="Ingresar">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
