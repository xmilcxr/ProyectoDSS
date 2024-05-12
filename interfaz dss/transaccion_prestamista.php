<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Transacción con Prestamista</title>
    <link rel="stylesheet" href="cliente.css"> 
</head>
<body>
    <div class="container">
        <div class="form-transaccion">
            <h2>Ingresar o Retirar Dinero de un Prestamista</h2>
            <form method="post" action="procesar_transaccion.php">
                <label for="dui">DUI del Prestamista:</label>
                <input type="text" id="dui" name="dui" required><br><br>
                
                <label for="cuenta">Cuenta Bancaria:</label>
                <input type="text" id="cuenta" name="cuenta" required><br><br>
                
                <label for="monto">Monto a Ingresar o Retirar:</label>
                <input type="number" id="monto" name="monto" required><br><br>
                
                <input type="submit" value="Realizar Transacción">
            </form>
        </div>
    </div>
</body>
</html>
