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
        <h1>Bienvenido al panel para realizar abonos 💸</h1>
        <h4>Realiza abonos hacia las cuentas bancarias de otros usuarios, expresa tu alegría en la vida con el cliente.</h4>
    </article>

    <article class="form-article" style="grid-column: span 2;">
        <h1 style="margin-bottom: 1em;">Formulario para realizar abonos bancarios 🧑‍💼</h1>
        <form action="{{ route('dash.uc.abonos.save') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="persona_receptora_abono" class="block text-sm font-medium text-gray-700 mb-1">Persona
                    Receptora</label>
                <input type="text" id="persona_receptora_abono" name="persona_receptora_abono"
                    class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border">
                @error('persona_receptora_abono')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="DUI_persona_abono" class="block text-sm font-medium text-gray-700 mb-1">DUI Persona
                    Receptora</label>
                <input type="text" id="DUI_persona_abono" name="DUI_persona_abono"
                    class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border">
                @error('DUI_persona_abono')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="id_cuenta_receptora" class="block text-sm font-medium text-gray-700 mb-1">Cuenta
                    Receptora</label>
                <select id="id_cuenta_receptora" name="id_cuenta_receptora"
                    class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border">
                    @foreach ($bankAccounts as $cuenta)
                        <option value="{{ $cuenta->id }}">{{ $cuenta->NumeroCuenta }} | {{ $cuenta->user->name }}</option>
                    @endforeach
                </select>
                @error('id_cuenta_receptora')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="cantid_adabono" class="block text-sm font-medium text-gray-700 mb-1">Cantidad Abono</label>
                <input type="number" id="cantid_adabono" name="cantid_adabono" min="0.01" max="5000" step="0.01"
                    class="w-full px-3 py-2 border-gray-300 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 input-border">
                @error('cantid_adabono')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">Enviar</button>
        </form>
    </article>

    <article class="form-article">
        <h1 style="margin-bottom: 1em;">Abonos agregados recientemente 🧑‍🏭</h1>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre
                        persona emisor</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DIU persona
                        emisora</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cuenta
                        receptora</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cantidad
                        abono</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha abono
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($bankCredits as $bank)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $bank->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $bank->persona_receptora_abono }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $bank->DUI_persona_abono }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $bank->account->NumeroCuenta }} | {{ $bank->account->user->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">${{ $bank->cantid_adabono }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $bank->fecha }}</td>
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
