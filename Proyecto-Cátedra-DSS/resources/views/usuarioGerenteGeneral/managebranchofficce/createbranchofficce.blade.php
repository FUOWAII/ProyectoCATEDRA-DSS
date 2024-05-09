<h1>Crear sucursales</h1>

<form action="{{ route('brainchoficcem.store') }}" method="POST">
@csrf

<label for="nombre">Nombre:</label>
<input type="text" placeholder="Ingresa el nombre" name="nombre">
<br>
<br>

<label for="dirección">Dirección:</label>
<input type="text" placeholder="Ingresa la dirección" name="dirección">
<br>
<br>

<label for="estado">Estado:</label>
<select name="estado">
    <option value="Activo">Activo</option>
    <option value="Inactivo">Inactivo</option>
    <option value="En proceso">En proceso</option>
</select>
<br>
<br>

<label for="idEncargado">Selecciona el Encargado:</label>
<select name="idEncargado">
    @foreach($empleados as $id => $nombre)
        <option value="{{ $id }}">{{ $nombre }}</option>
    @endforeach
</select>
<br>
<br>

<input type="submit" value="Enviar">

</form>
