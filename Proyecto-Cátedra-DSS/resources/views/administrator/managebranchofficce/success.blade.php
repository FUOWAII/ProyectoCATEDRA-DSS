@extends('main.menuGG')

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@vite(['resources\css\gerenteGeneral\formSucursal.css'])

@section('content-panel')

<div class="caja bg-gradient-to-r from-purple-400 via-blue-500 to-gray-500 rounded-lg shadow-md px-6 py-6">
<div class="container bg-gradient-to-r from-purple-400 via-blue-500 to-gray-500 rounded-lg shadow-md px-6 py-6 ">
    <div class="bg-gradient-to-r from-purple-400 via-blue-500 to-gray-500 rounded-lg shadow-md px-6 py-6">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">¡Éxito!</h1>
            
            <div class="flex justify-center mt-4">
                <a href="{{ route('create-branchofficce') }}" class="inline-block bg-gradient-to-r from-green-400 to-blue-500 hover:bg-gradient-to-r hover:from-green-500 hover:to-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-300">Volver</a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
