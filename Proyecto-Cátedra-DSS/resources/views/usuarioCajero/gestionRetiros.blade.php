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
        <h1>Bienvenido al panel para realizar retiros 🫰</h1>
        <h4>Panel exclusivo para realizar retiros de los clientes, siéntete confiado que lo harás bien.</h4>
    </article>

    <article class="form-article" style="grid-column: span 2;">
        <h1 style="margin-bottom: 1em;">Formulario para realizar retiros bancarios 🧑‍💼</h1>
        <form action="{{ route('dash.uc.retiros.save') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="persona_receptora_abono" class="block text-sm font-medium text-gray-700 mb-1">Nombre del cliente</label>
                <input type="text" id="persona_receptora_abono" name="persona_receptora_abono" class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border">
                @error('persona_receptora_abono')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="IdCuenta" class="block text-sm font-medium text-gray-700 mb-1">Número de cuenta</label>
                <input type="text" id="IdCuenta" name="IdCuenta" class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border">
                @error('IdCuenta')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="cantidad_retiro" class="block text-sm font-medium text-gray-700 mb-1">Cantidad de retiro</label>
                <input type="number" id="cantidad_retiro" name="cantidad_retiro" min="0.01" max="5000" step="0.01" class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border">
                @error('cantidad_retiro')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">Enviar</button>
        </form>        
    </article>

    <article class="form-article">
        <h1 style="margin-bottom: 1em;">Retiros realizados recientemente 🧑‍🏭</h1>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Número de cuenta</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre de la persona retiro</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cantidad Retiro</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cantidad actual saldos</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha retiro</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($retiros as $dependiente)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $dependiente->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $dependiente->account->NumeroCuenta }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $dependiente->persona_retiro_bancario }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">${{ $dependiente->cantidad_retiro }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">${{ $dependiente->account->SaldoCuenta }}</td>
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
