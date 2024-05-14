@extends('main.menuUsers')

@section('resources_css/js')
    @vite(['resources/css/main/menuUsers.css', 'resources/js/main/menuUsers.js', 'resources/css/cajero/welcomeUC.css'])
@endsection

@section('title')
    Cajero | ApexFinance
@endsection

@section('menu-options')
    <li>
        <a href="/dashboardEmployee/E-C/clientes">
            <i class="fa-solid fa-users" style="margin: 0 10px 0 0px"></i>
            <span>Clientes</span>
        </a>
    </li>
    <li>
        <a href="/dashboardEmployee/E-C/abonos">
            <i class="fa-solid fa-chart-column" style="margin: 0 10px 0 0px"></i>
            <span>Abonos</span>
        </a>
    </li>
    <li>
        <a href="/dashboardEmployee/E-C/retiros">
            <i class="fa-solid fa-calendar-minus" style="margin: 0 10px 0 0px"></i>
            <span>Retiros</span>
        </a>
    </li>
    <li>
        <a href="#0">
            <i class="fa-solid fa-book-bookmark" style="margin: 0 10px 0 0px"></i>
            <span>Préstamos</span>
        </a>
    </li>
    <li>
        <a href="#0">
            <i class="fa-solid fa-comments" style="margin: 0 10px 0 0px"></i>
            <span>Casos préstamos</span>
        </a>
    </li>
@endsection

@section('name-user')
    @if (session('user'))
        Usuario: Cajero | Nombre:{{ session('user')->name }}
    @endif
@endsection

@section('content-panel')
    <article class="text-welcome">
        <h1>
            @if (session('user'))
                Bienvenido, <b>{{ session('user')->name }}</b> 🧑‍💼!
            @endif
        </h1>
        <h4>Siéntete cómodo haciendo tu trabajo, lo mejor de lo mejor solo aquí, en ApexFinance!</h4>
    </article>
    <article>
        <h1>Realizar abonos 🙅</h1>
        <h4>Realiza abonos hacia otras cuentas a raíz de dinero físico, que complicado no?</h4>
        <form action="/dashboardEmployee/E-C/clientes" method="GET">
            <button class="special">Clientes</button>
        </form>
    </article>
    <article>
        <h1>Gestionar abonos 💵</h1>
        <h4>Realiza abonos de los clientes, siempre es bueno ayudar a alguien.</h4>
        <form action="/dashboardEmployee/E-C/abonos" method="GET">
            <button class="special">Abonos</button>
        </form>
    </article>
    <article>
        <h1>Gestionar retiros 🪙</h1>
        <h4>Realiza retiros de los clientes, dales la mejor experiencia de su vida!</h4>
        <form action="/dashboardEmployee/E-C/retiros" method="GET">
            <button class="special">Abonos</button>
        </form>
    </article>
    <article>
        <h1>Gestionar préstamos 👛</h1>
        <h4>Verifica los préstamos y crealos para los clientes, trata de no equivocarte ;D</h4>
        <form action="/dashboardEmployee/E-C/prestamos" method="GET">
            <button class="special">Prestamos</button>
        </form>
    </article>
    <article>
        <h1>Gestioar casos de préstamos 📰</h1>
        <h4>Verifica cada caso de préstamo aperturado, que no se te escape nadie he...</h4>
        <form action="/" method="GET">
            <button i type="submit" class="special">Casos P.</button>
        </form>
    </article>
@endsection

@section('logout-button')
    <form action="{{ route('logoutemployees') }}" method="POST">
        @csrf
        <button type="submit" class="button-logout" style="display: flex; align-items: center; font-size: 0.9rem;">
            <i class="fa-solid fa-right-from-bracket" style="margin: 0 10px 0 0px"></i>
            <span>Cerrar secióm</span>
        </button>
    </form>
@endsection
