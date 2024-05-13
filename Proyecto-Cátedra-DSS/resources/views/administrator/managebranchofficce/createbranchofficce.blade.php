@extends('main.menuGG')


@section('content-panel')

<div class="hola">
    <div class="mt-12  font-serif">

        <form id="myForm" action="{{ route('brainchoficcem.store') }}" method="POST"
            class="max-w-md mx-auto bg-white bg-opacity-80 shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">

            <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Crear Sucursales</h1>
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" placeholder="Ingresa el nombre" name="nombre"
                    class="mt-1 p-3 w-full border rounded-lg shadow-sm focus:outline-none focus:border-indigo-500">
            </div>
            <div class="mb-4">
                <label for="dirección" class="block text-gray-700 text-sm font-bold mb-2">Dirección:</label>
                <input type="text" placeholder="Ingresa la dirección" name="dirección"
                    class="mt-1 p-3 w-full border rounded-lg shadow-sm focus:outline-none focus:border-indigo-500">
            </div>
            <div class="mb-4">
                <label for="estado" class="block text-gray-700 text-sm font-bold mb-2">Estado:</label>
                <select name="estado"
                    class="mt-1 p-3 w-full border rounded-lg shadow-sm focus:outline-none focus:border-indigo-500">
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                    <option value="En proceso">En proceso</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="idEncargado" class="block text-gray-700 text-sm font-bold mb-2">Selecciona el
                    Encargado:</label>
                <select name="idEncargado"
                    class="mt-1 p-3 w-full border rounded-lg shadow-sm focus:outline-none focus:border-indigo-500">
                    @foreach($empleados as $id => $nombre)
                        <option value="{{ $id }}">{{ $nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center justify-center">
                <button type="submit"
                    class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300">Enviar</button>
            </div>
        </form>
    </div>



</div>
@endsection