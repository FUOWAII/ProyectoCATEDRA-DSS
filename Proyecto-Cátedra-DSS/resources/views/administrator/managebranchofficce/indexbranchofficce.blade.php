@extends('main.menuGG')

@section('content-panel')

    <div class="container mx-auto mt-12  rounded-lg shadow-md p-16 h-full" >
        <h1 class="text-3xl font-semibold text-gray-800 mb-6  font-serif">Lista de Sucursales</h1>
        <div class="overflow-x-auto container" >
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50  font-serif">
                    <tr >
                        <th  class="px-16 py-6 text-left text-xs font-medium text-black-200 uppercase tracking-wider">Id</th>
                        <th class="px-16 py-6 text-left text-xs font-medium text-black-200 uppercase tracking-wider">Nombre</th>
                        <th class="px-16 py-6 text-left text-xs font-medium text-black-200 uppercase tracking-wider">Ubicación</th>
                        <th class="px-16 py-6 text-left text-xs font-medium text-black-200 uppercase tracking-wider">Estado</th>
                        <th class="px-16 py-6 text-left text-xs font-medium text-black-200 uppercase tracking-wider">Id Encargado</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200  font-serif">
                    @foreach ($data as $datos)
                        <tr style="background-color:#c9d8dd;">
                            <td class="px-8 py-4 whitespace-nowrap">{{ $datos->id }}</td>
                            <td class="px-8 py-4 whitespace-nowrap">{{ $datos->nombre }}</td>
                            <td class="px-8 py-4 whitespace-nowrap">{{ $datos->dirección }}</td>
                            <td class="px-8 py-4 whitespace-nowrap">{{ $datos->estado }}</td>
                            <td class="px-8 py-4 whitespace-nowrap">{{ $datos->idEncargado }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-8  font-serif">
                {{ $data->links() }} 
            </div>
            <div class="mt-8  font-serif">
                <a href="{{ route('brainchoficcem.create') }}" class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">Crear Sucursal</a>
            </div>
        </div>
    </div>
    
@endsection


