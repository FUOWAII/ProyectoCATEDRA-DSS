<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión - Banco de Agricultura</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #d6e4f0; /* Fondo azul pastel */
    }
    .form-container {
      background-color: #ffffff; /* Fondo del formulario */
      border-radius: 10px;
      padding: 20px;
      margin: auto;
      max-width: 400px;
      margin-top: 50px;
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

<main class="form-container">
  <h1 class="mb-4">Ingresa los datos de tu cuenta bancaria</h1>
  <form>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" required pattern="[0-9]{8}">
      <label for="floatingInput">Número de Cuenta Bancaria</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" required>
      <label for="password">Contraseña</label>
    </div>

    <div class="btn-container">
    <button type="submit" class="btn btn-primary w-100 py-2" style="font-size: 1rem; letter-spacing: 1px;"><a href="{{ route('transaccion') }}" style="color: inherit; text-decoration: none;">Ingresar</a></button>

<button type="submit" class="btn btn-primary w-100 py-2" style="font-size: 1rem; letter-spacing: 1px;">
   <a href="{{ route('creacioncuenta') }}" style="color: inherit; text-decoration: none;">Crear nueva cuenta bancaria</a>
</button>


    </div>
  </form>
</main>

</body>
</html>


