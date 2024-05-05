<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Cuenta</title>
</head>
<body>
    <h1>Detalles de la Cuenta</h1>

    <form action="{{ route('Detalles.index') }}" method="GET">
        <label for="numero_cuenta">Número de Cuenta:</label>
        <input type="text" name="numero_cuenta" id="numero_cuenta">
        <button type="submit">Buscar</button>
    </form>

    @if(isset($bankaccount))
        <h2>Número de Cuenta: {{ $bankaccount->NumeroCuenta }}</h2>
        <h2>Nombre del Usuario: {{ $bankaccount->user->name }}</h2>
        <h2>Saldo de la Cuenta: {{ $bankaccount->SaldoCuenta }}</h2>
        <h2>Fecha de Apertura: {{ $bankaccount->FechaApertura }}</h2>
        <h2>Estado: {{ $bankaccount->Estado }}</h2>

        @if($withdrawals->isNotEmpty())
            <h2>Retiros:</h2>
            <table>
                <thead>
                    <tr>
                        <th>Cantidad</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($withdrawals as $withdrawal)
                        <tr>
                            <td>{{ $withdrawal->cantidadretiro }}</td>
                            <td>{{ $withdrawal->fecha }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        @if($payments->isNotEmpty())
            <h2>Abonos:</h2>
            <table>
                <thead>
                    <tr>
                        <th>Cantidad</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $payment)
                        <tr>
                            <td>{{ $payment->cantidadabono }}</td>
                            <td>{{ $payment->fecha }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        @if($lendings->isNotEmpty())
            <h2>Préstamos:</h2>
            <table>
                <thead>
                    <tr>
                        <th>Monto</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lendings as $lending)
                        <tr>
                            <td>{{ $lending->montoPrestado }}</td>
                            <td>{{ $lending->fechaPréstamo }}</td>
                            <td>{{ $lending->estadoPagoPrestamo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endif
</body>
</html>
