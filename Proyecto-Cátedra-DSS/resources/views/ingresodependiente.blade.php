<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Cuentas por DUI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center">Consulta de Cuentas Bancarias por DUI</h5>
                    </div>
                    <div class="card-body">
                        <form >
                            @csrf
                            <div class="mb-3">
                                <label for="dui" class="form-label">Ingrese su DUI:</label>
                                <input type="text" class="form-control" id="dui" name="dui" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Consultar Cuentas</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
