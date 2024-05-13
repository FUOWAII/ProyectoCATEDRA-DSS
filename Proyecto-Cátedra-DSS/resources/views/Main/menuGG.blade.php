<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/8dd3c39186.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.png') }}">
    <title>@yield('title')</title>
    @vite(['resources/css/main/menuUsers.css', 'resources/js/main/menuUsers.js'])
    @vite(['resources/css/gerenteGeneral/inicio.css', ''])
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@vite(['resources\css\gerenteGeneral\formSucursal.css'])
</head>

<body>

    <header class="page-header">
        <nav>
            <a href="#0" style="margin: auto;" aria-label="forecastr logo" class="logo">
                <img class="image-logoo" style="height: 70px; margin-left: 10px; margin-bottom: -7px;"
                    src="{{ Vite::asset('resources/img/logo.png') }}" alt="logo">
                <h1 style="margin-bottom: -25px;">Banco Agricola</h1>
            </a>
            <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
                <svg width="20" height="20" aria-hidden="true">
                    <use xlink:href="#down"></use>
                </svg>
            </button>
            <ul class="admin-menu">
                <li class="menu-heading">
                    <h3>Opciones</h3>
                </li>

                <li>
                    <a href="{{ route('brainchoficcem.index') }}">
                        <i class="fa-solid fa-file" style="margin: 0 10px 0 0px"></i>
                        <span >Listar Sucursales</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('brainchoficcem.create') }}" >
                        <i class="fa-solid fa-users" style="margin: 0 10px 0 0px"></i>
                        <span>Crear Sucursales</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Detalles.index') }}" >
                        <i class="fa-solid fa-chart-column" style="margin: 0 10px 0 0px"></i>
                        <span>Busqueda</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('acciones-personal.index') }}" >
                        <i class="fa-solid fa-book-bookmark" style="margin: 0 10px 0 0px"></i>
                        <span>Notificaciones</span>
                    </a>
                </li>

                <li class="menu-heading">
                    <h3>Configuración</h3>
                </li>
                <li>
                    <a href="#0">
                        <i class="fa-solid fa-wrench" style="margin: 0 10px 0 0px"></i>
                        <span>Sobre mí</span>
                    </a>
                </li>

                <form action="{{ route('logoutemployees') }}" method="POST">
        @csrf
        <button type="submit" class="button-logout" style="display: flex; align-items: center; font-size: 0.9rem;">
            <i class="fa-solid fa-right-from-bracket" style="margin: 0 10px 0 0px"></i>
            <span>Cerrar secióm</span>
        </button>
    </form>

                <li>
                    <div class="switch">
                        <input type="checkbox" id="mode" checked>
                        <label for="mode">
                            <span></span>
                            <span>Dark</span>
                        </label>
                    </div>
                    <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
                        <i class="fa-solid fa-right-left" style="margin: 0 10px 0 0px"></i>
                        <span>Collapse</span>
                    </button>
                </li>
            </ul>
        </nav>
    </header>
    <section class="page-content">
        <section class="search-and-user">
            <form>
            </form>
            <div class="admin-profile">
                <span class="greeting">@yield('name-user')</span>
                <div class="notifications">
                    <svg>
                        <use xlink:href="#users"></use>
                    </svg>
                </div>
            </div>
        </section>
        <section class="grid">

            @yield('content-panel')

        </section>
        <footer class="page-footer">
        </footer>
    </section>
</body>

</html>