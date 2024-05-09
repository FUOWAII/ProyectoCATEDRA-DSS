<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acciones de Personal</title>
</head>
<body>
    <h1>Acciones de Personal</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo de Acción</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Fecha de Solicitud</th>
                <th>Fecha de Aprobación</th>
                <th>ID del Encargado</th>
                <th>ID del Encargado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($acciones as $accion)
                <tr>
                    <td>{{ $accion->ID }}</td>
                    <td>{{ $accion->Tipo_Accion }}</td>
                    <td>{{ $accion->Descripcion }}</td>
                    <td>
                        <form action="{{ route('acciones-personal.update', $accion->ID) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <select name="estado">
                                <option value="Pendiente" {{ $accion->Estado == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                                <option value="Aprobado" {{ $accion->Estado == 'Aprobado' ? 'selected' : '' }}>Aprobado</option>
                                <option value="Rechazado" {{ $accion->Estado == 'Rechazado' ? 'selected' : '' }}>Rechazado</option>
                            </select>
                            <button type="submit">Actualizar</button>
                        </form>
                    </td>
                    <td>{{ $accion->Fecha_Solicitud }}</td>
                    <td>{{ $accion->Fecha_Aprobacion }}</td>
                    <td>{{ $accion->idEncargado }}</td>
                    <td>{{ $accion->empleado->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
