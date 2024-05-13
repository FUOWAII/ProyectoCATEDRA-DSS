@extends('main.menuGG')



@section('content-panel')

<div class="detalle">
<div class="container">



    <h1 class="text-3xl font-semibold text-center text-white-800 mb-6 font-serif">Detalles de la Cuenta</h1>

    <div class="mt-8 flex justify-between holis">
    <form action="{{ route('Detalles.index') }}" method="GET" class="w-full">
        <div class="flex items-center justify-between w-full"> 
            <label for="numero_cuenta" class="block text-gray-700 font-bold mb-2 mr-4 text-lg font-serif">Número de Cuenta:</label> 
            <input type="text" name="numero_cuenta" id="numero_cuenta"
                   class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded">Buscar</button> 
        </div>
    </form>
</div>




    <div class="container mx-auto mt-8 bg-white rounded-lg shadow-md p-6 ">
        @if(isset($bankaccount))
            <h2 class="text-xl font-semibold mb-2 font-serif">Número de Cuenta: {{ $bankaccount->NumeroCuenta }}</h2>
            <h2 class="text-xl font-semibold mb-2 font-serif">Nombre del Usuario: {{ $bankaccount->user->name }}</h2>
            <h2 class="text-xl font-semibold mb-2 font-serif">Saldo de la Cuenta: {{ $bankaccount->SaldoCuenta }}</h2>
            <h2 class="text-xl font-semibold mb-2 font-serif">Fecha de Apertura: {{ $bankaccount->FechaApertura }}</h2>
            <h2 class="text-xl font-semibold mb-2 font-serif">Estado: {{ $bankaccount->Estado }}</h2>

            @if($withdrawals->isNotEmpty())
                <h2 class="text-xl font-semibold mb-2 font-serif">Retiros:</h2>
                <table class="w-full mb-4">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 bg-gray-200 font-serif">Cantidad</th>
                            <th class="px-4 py-2 bg-gray-200  font-serif">Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($withdrawals as $withdrawal)
                            <tr>
                                <td class="border px-4 py-2  font-serif">{{ $withdrawal->cantidadretiro }}</td>
                                <td class="border px-4 py-2  font-serif">{{ $withdrawal->fecha }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            @if($payments->isNotEmpty())
                <h2 class="text-xl font-semibold mb-2  font-serif">Abonos:</h2>
                <table class="w-full mb-4">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 bg-gray-200  font-serif">Cantidad</th>
                            <th class="px-4 py-2 bg-gray-200  font-serif">Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payments as $payment)
                            <tr>
                                <td class="border px-4 py-2  font-serif">{{ $payment->cantidadabono }}</td>
                                <td class="border px-4 py-2 font-serif">{{ $payment->fecha }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            @if($lendings->isNotEmpty())
                <h2 class="text-xl font-semibold mb-2  font-serif">Préstamos:</h2>
                <table class="w-full mb-4">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 bg-gray-200  font-serif">Monto</th>
                            <th class="px-4 py-2 bg-gray-200  font-serif">Fecha</th>
                            <th class="px-4 py-2 bg-gray-200  font-serif">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lendings as $lending)
                            <tr>
                                <td class="border px-4 py-2  font-serif">{{ $lending->montoPrestado }}</td>
                                <td class="border px-4 py-2  font-serif">{{ $lending->fechaPréstamo }}</td>
                                <td class="border px-4 py-2  font-serif">{{ $lending->estadoPagoPrestamo }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        @endif

    </div>
</div>
</div>
</div>

</d>
@endsection