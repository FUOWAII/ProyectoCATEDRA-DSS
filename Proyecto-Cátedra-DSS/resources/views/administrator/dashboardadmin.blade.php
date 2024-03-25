<div>
    ESTAS LOGUEADO PUTOOOO
</div>

<a href="{{ route('brainchoficcem.index') }}">Sucursales</a>

<form action="{{ route('logoutemployees') }}" method="POST">
    @csrf
    <input type="submit" value="Cerrar Sesión">
</form>
