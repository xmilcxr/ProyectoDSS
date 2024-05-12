<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingresar Nuevo Cliente o Prestamista</title>
    <link rel="stylesheet" href="cliente.css">
</head>
<body>
    <h2>Ingresar Nuevo Cliente o Prestamista</h2>
    <form method="post" action="procesar_ingreso.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required><br><br>
        
        <label for="dui">Número de DUI:</label>
        <input type="text" id="dui" name="dui" required><br><br>
        
        <label for="tipo">Tipo (Cliente/Prestamista):</label>
        <select id="tipo" name="tipo">
            <option value="cliente">Cliente</option>
            <option value="prestamista">Prestamista</option>
        </select><br><br>
        
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
