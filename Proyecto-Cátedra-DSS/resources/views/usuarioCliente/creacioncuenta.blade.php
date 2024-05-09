<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.118.2">
<title>Signin Template · Bootstrap v5.3</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{ asset('js/cuentabancaria.js') }}"></script>

<style>
  body {
    background-color: #d6e4f0; /* Fondo azul pastel */
  }
  .form-container {
    background-color: #ffffff; /* Fondo del formulario */
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Sombra */
  }
  .form-container h1 {
    font-size: 24px; /* Tamaño del título */
    text-align: center; /* Centrado */
  }
  .form-floating {
    margin-bottom: 20px; /* Espacio entre los campos */
  }
  .btn-container {
    display: flex;
    justify-content: space-between;
  }
  .btn-container .btn:first-child {
    margin-right: 10px; /* Margen a la derecha */
  }
  .btn-container .btn:last-child {
    margin-left: 10px; /* Margen a la izquierda */
  }
  .navbar-nav {
    margin: 0 auto; /* Centrar las opciones */
    display: flex;
    align-items: center; /* Centrar verticalmente */
  }
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #87CEFA;">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="#">
    <img src="/img/LOGO BANCO.jpg" alt="Banco de Agricultura" width="120">
    </a>
    <!-- Nuevos apartados -->
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#">Números de Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sucursales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Horarios</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
<main class="form-container">
<form>
    <div style="text-align: center;" class="form-text">
    <img src="/img/LOGO BANCO.jpg" alt="Banco de Agricultura" width="120">

    </div>
<br>
    <h1 class="h3 mb-3 fw-normal">Completa todos los campos.</h1>
    <div class="form-floating form-text">
        <input type="text" class="form-control" id="floatingInput" required pattern="[0-9]{8}">
        <label for="floatingInput">Numero de Cuenta Bancaria</label>
        <small>Ingrese su número de cuenta de 8 dígitos.</small>
    </div>
    <br>
    <div class="form-floating form-text">
        <input type="number" class="form-control" id="balance" name="balance" required min="0" step="0.01">
        <label for="balance">Balance Inicial</label>
        <small>Ingrese el saldo inicial de la cuenta.</small>
    </div>

    <div class="form-floating form-text">
        <input type="text" class="form-control" id="fullName" name="fullName" required>
        <label for="fullName">Nombre Completo</label>
        <small>Ingrese su nombre completo.</small>
    </div>

    <div class="form-floating form-text">
        <input type="date" class="form-control" id="birthdate" name="birthdate" required>
        <label for="birthdate">Fecha de Nacimiento</label>
        <small>Ingrese su fecha de nacimiento.</small>
    </div>

    <div class="form-floating form-text">
        <input type="text" class="form-control" id="address" name="address" required>
        <label for="address">Dirección Residencial</label>
        <small>Ingrese su dirección residencial.</small>
    </div>

    <div class="form-floating form-text">
        <input type="text" class="form-control" id="idNumber" name="idNumber" required pattern="[0-9]{8}-[0-9]" >
        <label for="idNumber">Número de Identificación</label>
        <small>Ingrese su número de identificación.</small>
    </div>

    <div class="form-floating form-text">
    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required pattern="[0-9]{4}-[0-9]{4}">
    <label for="phoneNumber">Número de Teléfono</label>
    <small>Ingrese su número de teléfono (4 números, un guion y 4 números).</small>
</div>


<div class="form-floating form-text">
    <input type="email" class="form-control" id="email" name="email" required pattern="[a-zA-Z0-9._%+-]+@gmail.com">
    <label for="email">Correo Electrónico</label>
    <small>Ingrese su dirección de correo electrónico (@gmail.com).</small>
</div>


    <div class="form-floating form-text">
        <input type="text" class="form-control" id="nationality" name="nationality" required>
        <label for="nationality">Nacionalidad</label>
        <small>Ingrese su nacionalidad.</small>
    </div>

    <div class="form-floating form-text">
        <input type="text" class="form-control" id="occupation" name="occupation" required>
        <label for="occupation">Ocupación</label>
        <small>Ingrese su ocupación.</small>
    </div>

    <div class="form-floating form-text">
    <select class="form-select" id="maritalStatus" name="maritalStatus" required>
        <option value="" selected disabled>Selecciona tu estado civil</option>
        <option value="Soltero/a">Soltero/a</option>
        <option value="Casado/a">Casado/a</option>
        <option value="Divorciado/a">Divorciado/a</option>
        <option value="Viudo/a">Viudo/a</option>
        <option value="Unión Libre">Unión Libre</option>
    </select>
    <label for="maritalStatus">Estado Civil</label>
    <small>Seleccione su estado civil.</small>
</div>


    <div class="form-floating form-text">
        <input type="text" class="form-control" id="personalReference" name="personalReference" required>
        <label for="personalReference">Referencia Personal</label>
        <small>Ingrese información de una referencia personal.</small>
    </div>

    <button class="btn btn-primary w-100 py-2" ><a href="{{ route('cuentabancaria') }}" style="color: inherit; text-decoration: none;" >Crear</a></button>
</form>




</main>


  </body>
</html>






