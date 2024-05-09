<h1>Panel de sucursales</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Id</th>
            <th>Nombre</th>
            <th>Ubicación</th>
            <th>Estado</th>
            <th>Id Encargado</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($data as $datos)
            <tr>
                <td>{{ $datos->id }}</td>
                <td>{{ $datos->nombre }}</td>
                <td>{{ $datos->dirección }}</td>
                <td>{{ $datos->estado }}</td>
                <td>{{ $datos->idEncargado }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<br>

<a href="{{ route('brainchoficcem.create') }}">Crear sucursal</a>
