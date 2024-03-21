<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Transacción</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center">Realizar Transacción</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('transaccion.guardar') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="cuenta" class="form-label">Número de Cuenta</label>
                                <input type="text" class="form-control" id="cuenta" name="cuenta" required>
                            </div>
                            <div class="mb-3">
                                <label for="monto" class="form-label">Monto</label>
                                <input type="number" class="form-control" id="monto" name="monto" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo de Transacción</label>
                                <select class="form-select" id="tipo" name="tipo" required>
                                    <option value="ingreso">Ingreso</option>
                                    <option value="retiro">Retiro</option>
                                </select>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Realizar Transacción</button>
                                <a href="#" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
