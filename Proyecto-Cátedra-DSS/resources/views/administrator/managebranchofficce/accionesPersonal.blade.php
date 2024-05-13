@extends('main.menuGG')



@section('content-panel')

<div class="container mx-auto mt-8 bg-white rounded-lg shadow-md p-6 h-full  font-serif">
 
    <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Acciones de Personal</h1>
    <div class="mb-4 flex justify-between">
        <label for="search" class="block text-gray-700 text-sm font-bold mb-6">Buscar por tipo de acción:</label>
        <div class="flex">
            <input type="text" id="search"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-4">
            <button id="searchButton"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Buscar</button>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="table-auto w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Tipo de Acción</th>
                    <th class="px-4 py-2">Descripción</th>
                    <th class="px-4 py-2">Estado</th>
                    <th class="px-4 py-2">Fecha de Solicitud</th>
                    <th class="px-4 py-2">Fecha de Aprobación</th>
                    <th class="px-4 py-2">ID del Encargado</th>
                    <th class="px-4 py-2">Nombre del Encargado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($acciones as $accion)
                    <tr class="accionRow h-12"> 
                        <td class="border px-4 py-2">{{ $accion->Tipo_Accion }}</td>
                        <td class="border px-4 py-2">{{ $accion->Descripcion }}</td>
                        <td class="border px-4 py-2">
                            <form action="{{ route('acciones-personal.update', $accion->ID) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="estado" class="bg-white border rounded px-3 py-1">
                                    <option value="Pendiente" {{ $accion->Estado == 'Pendiente' ? 'selected' : '' }}>Pendiente
                                    </option>
                                    <option value="Aprobado" {{ $accion->Estado == 'Aprobado' ? 'selected' : '' }}>Aprobado
                                    </option>
                                    <option value="Rechazado" {{ $accion->Estado == 'Rechazado' ? 'selected' : '' }}>Rechazado
                                    </option>
                                </select>
                                <button type="submit"
                                    class="ml-2 bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded">Actualizar</button>
                            </form>
                        </td>
                        <td class="border px-4 py-2">{{ $accion->Fecha_Solicitud }}</td>
                        <td class="border px-4 py-2">{{ $accion->Fecha_Aprobacion }}</td>
                        <td class="border px-4 py-2">{{ $accion->idEncargado }}</td>
                        <td class="border px-4 py-2">{{ $accion->empleado->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchButton = document.getElementById('searchButton');
        const accionRows = document.querySelectorAll('.accionRow');

        searchButton.addEventListener('click', function () {
            const searchInput = document.getElementById('search');
            const searchValue = searchInput.value.toLowerCase().trim();

            accionRows.forEach(row => {
                const tipoAccion = row.querySelector('td:first-child').textContent.toLowerCase().trim();

                if (tipoAccion.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
</script>

@endsection