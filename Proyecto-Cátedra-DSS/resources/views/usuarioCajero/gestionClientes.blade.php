@extends('main.menuUsers')

@section('resources_css/js')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
        <a href="/dashboardEmployee/E-C/prestamos">
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
        <h1>Bienvenido al creador de clientes 🙅</h1>
        <h4>Siéntete cómodo haciendo tu trabajo, lo mejor de lo mejor solo aquí, en ApexFinance!</h4>
    </article>

    <article class="form-article" style="grid-column: span 2;">
        <h1 style="margin-bottom: 1em;">Formulario para la creación de dependientes de banco 🧑‍💼</h1>
        <form action="{{ route('dash.uc.clientes.save') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Repetir contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border">
                @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>                      
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">Registrar</button>
        </form>
    </article>

    <article class="form-article">
        <h1 style="margin-bottom: 1em;">Dependientes agregados recientemente 🧑‍🏭</h1>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Correo</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha creación</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($dependientes as $dependiente)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $dependiente->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $dependiente->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $dependiente->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $dependiente->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
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
