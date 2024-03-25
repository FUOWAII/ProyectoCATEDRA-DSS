<h1>Crear sucursales</h1>

<form action="{{ route('brainchoficcem.store') }}" method="POST">
@csrf

<label for="nombre"></label>
<input type="text" placeholder="Ingresa el nombre" name="nombre">
<br>
<br>

<label for="dirección"></label>
<input type="text" placeholder="Ingresa la dirección" name="dirección">
<br>
<br>

<label for="estado"></label>
<input type="text" placeholder="Ingresa el estado" name="estado">
<br>
<br>

<label for="idEncargado"></label>
<input type="number" placeholder="Ingresa el Encargado" name="idEncargado">
<br>
<br>

<input type="submit" value="Enviar">

</form>