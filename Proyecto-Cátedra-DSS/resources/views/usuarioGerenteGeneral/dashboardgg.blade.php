<div>
    ESTAS LOGUEADO
</div>

<a href="{{ route('brainchoficcem.index') }}">Sucursales</a>

@if(session('user'))
    <p>Bienvenido, {{ session('user')->name }}</p>
@endif


<form action="{{ route('logoutemployees') }}" method="POST">
    @csrf
    <input type="submit" value="Cerrar Sesión">
</form>
