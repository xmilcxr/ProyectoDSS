<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Dependiente del Banco</title>
    <link rel="stylesheet" href="cliente.css"> 
</head>
<body>
    <div class="container">
        <div class="form-dependiente">
            <h2>Agregar Dependiente del Banco</h2>
            <form method="post" action="procesar_agregar_dependiente.php">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>
                
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required><br><br>
                
                <label for="dui">Número de DUI:</label>
                <input type="text" id="dui" name="dui" required><br><br>
                
                <input type="submit" value="Guardar">
            </form>
        </div>
    </div>
</body>
</html>
