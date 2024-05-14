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
        <a href="/dashboardEmployee/E-C/prestamos">
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
        <h1>Bienvenido al panel para realizar préstamos 🏦</h1>
        <h4>Panel exclusivo para realizar préstamos de los clientes, puedes hacer muchos préstamos (no tuyos obviamente).
        </h4>
    </article>

    <article class="form-article" style="grid-column: span 2;">
        <h1 style="margin-bottom: 1em;">Formulario para realizar préstamos 🧑‍💼</h1>
        <form action="{{ route('dash.uc.prestamos.save') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="persona_id" class="block text-sm font-medium text-gray-700 mb-1">Nombre del Cliente</label>
                <select id="persona_id" name="persona_id"
                    class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border">
                    <option value="" hidden>Selecciona una persona</option>
                    @foreach ($personas as $persona)
                        <option value="{{ $persona->id }}">{{ $persona->id }} | {{ $persona->name }}</option>
                    @endforeach
                </select>
                @error('persona_id')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="intereses" class="block text-sm font-medium text-gray-700 mb-1">Intereses (%)</label>
                <select id="intereses" name="intereses"
                    class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border">
                    <option value="" hidden>Selecciona un interés</option>
                    <option value="3">3%</option>
                    <option value="4">4%</option>
                    <option value="5">5%</option>
                </select>
                @error('intereses')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="montoPrestado" class="block text-sm font-medium text-gray-700 mb-1">Monto Prestado</label>
                <input type="number" id="montoPrestado" name="montoPrestado" min="1" max="50000" step="1"
                    class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border">
                @error('montoPrestado')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="abono_mensual" class="block text-sm font-medium text-gray-700 mb-1">Abono Mensual</label>
                <input type="number" id="abono_mensual" name="abono_mensual" min="1" max="5000" step="1"
                    class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border">
                @error('abono_mensual')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="sueldo_cliente" class="block text-sm font-medium text-gray-700 mb-1">Sueldo Cliente</label>
                <input type="number" id="sueldo_cliente" name="sueldo_cliente" min="1" max="10000" step="1"
                    class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border"
                    required>
                @error('salario')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">Enviar</button>
        </form>

    </article>

    <article class="form-article">
        <h1 style="margin-bottom: 1em;">Retiros realizados recientemente 🧑‍🏭</h1>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id del cliente</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Monto prestado</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Intereses</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Abono mensual</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha préstamo   </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($prestamos as $dependiente)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $dependiente->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $dependiente->IdCliente }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">${{ $dependiente->montoPrestado }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $dependiente->intereses }}%</td>
                    <td class="px-6 py-4 whitespace-nowrap">${{ $dependiente->abono_mensual }}</td>
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
