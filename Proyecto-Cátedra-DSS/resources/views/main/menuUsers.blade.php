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
    @yield('resources_css/js')
</head>

<body>

    <header class="page-header">
        <nav>
            <a href="#0" style="margin: auto;" aria-label="forecastr logo" class="logo">
                <img class="image-logoo" style="height: 70px; margin-left: 5px; margin-bottom: -7px;"
                    src="{{ Vite::asset('resources/img/logo.png') }}" alt="logo">
                <h1 style="margin-bottom: -25px; margin-top: 15px; font-size: 20px;">ApexFinance</h1>
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

                @yield('menu-options')

                <li class="menu-heading">
                    <h3>Configuración</h3>
                </li>

                @yield('logout-button')

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
