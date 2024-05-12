<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apertura de Préstamo</title>
    <link rel="stylesheet" href="cliente.css"> 
</head>
<body>
    <div class="container">
        <div class="form-prestamo">
            <h2>Apertura de Préstamo</h2>
            <form method="post" action="procesar_apertura_prestamo.php">
                <label for="nombre">Nombre del Cliente:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>
                
                <label for="salario">Salario del Cliente:</label>
                <input type="number" id="salario" name="salario" required><br><br>
                
                <label for="monto">Monto Solicitado:</label>
                <input type="number" id="monto" name="monto" required><br><br>
                
                <input type="submit" value="Abrir Préstamo">
            </form>
        </div>
    </div>
</body>
</html>
