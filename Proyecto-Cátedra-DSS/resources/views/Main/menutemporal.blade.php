<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú Temporal</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Agrega estilos personalizados aquí si es necesario */
    body {
      padding-top: 50px;
    }
    .container {
      text-align: center;
    }
    .btn {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Menú Temporal</h1>
    <p>Este menú es solo temporal hasta que se implementen los roles en el login. Luego de esto será eliminado.</p>
    <div class="btn-group-vertical">
      <a href="{{ route('cuentabancaria') }}" class="btn btn-primary">Cliente o Prestamista</a>
      <a href="{{ route('principal') }}" class="btn btn-primary">Dependiente del Banco</a>
      <a href="{{ route('principal') }}" class="btn btn-primary">Cajero</a>
      <a href="{{ route('principal') }}" class="btn btn-primary">Gerente de Sucursal</a>
      <a href="{{ route('principal') }}" class="btn btn-primary">Gerente General del Banco</a>
    </div>
  </div>

</body>
</html>
