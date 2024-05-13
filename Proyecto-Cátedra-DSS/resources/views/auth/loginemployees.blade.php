<form method="POST" action="{{ route('login_employee_post') }}">
    @csrf
    <h1>INICIAR SECIÓN </h1>
    <input type="email" name="email" placeholder="Correo electrónico">
    <input type="password" name="password" placeholder="Contraseña">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input type="submit" value="Ingresar">
</form>