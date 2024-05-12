<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gerente de Sucursal</title>
    <link rel="stylesheet" href="cliente.css">
</head>
<body>
    <div class="container">
        <h2>Panel de Control del Gerente de Sucursal</h2>
        <div class="acciones">
            <h3>Ingresar Nuevo Empleado</h3>
            <form method="post" action="procesar_ingresar_empleado.php">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>
                
                <label for="puesto">Puesto:</label>
                <select id="puesto" name="puesto">
                    <option value="cajero">Cajero</option>
                    <option value="limpieza">Personal de Limpieza</option>
                    <option value="secretaria">Secretaria</option>
                    <option value="asesor">Asesor Financiero</option>
                </select><br><br>
                
                <input type="submit" value="Ingresar Empleado">
            </form>
        </div>
        
        <div class="acciones">
            <h3>Dar de Baja a un Empleado</h3>
            <form method="post" action="procesar_dar_de_baja.php">
                <label for="id_empleado">ID del Empleado:</label>
                <input type="text" id="id_empleado" name="id_empleado" required><br><br>
                
                <input type="submit" value="Dar de Baja">
            </form>
        </div>
        <h2>Gerente de Sucursal</h2>

<!-- Formulario para visualizar préstamos -->
<form method="post" action="">
    <h3>Lista de Préstamos</h3>
    <?php
    // Conexión a la base de datos (reemplaza los valores con los de tu configuración)
    $servername = "localhost";
    $username = "usuario";
    $password = "contraseña";
    $dbname = "nombre_de_la_base_de_datos";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    // Consulta SQL para obtener los préstamos
    $sql = "SELECT ID, DUI, Tipo_de_cuenta, Cantidad, Interes, Estado FROM prestamo";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar la lista de préstamos en una tabla
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>DUI</th><th>Tipo de cuenta</th><th>Cantidad</th><th>Interés</th><th>Estado</th><th>Acción</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["ID"]."</td>";
            echo "<td>".$row["DUI"]."</td>";
            echo "<td>".$row["Tipo de cuenta"]."</td>";
            echo "<td>".$row["Cantidad"]."</td>";
            echo "<td>".$row["Interes"]."</td>";
            echo "<td>".$row["Estado"]."</td>";
            // Botones para aprobar o rechazar el préstamo
            echo "<td><button type='submit' name='action' value='approve_".$row["ID"]."'>Aprobar</button> <button type='submit' name='action' value='reject_".$row["ID"]."'>Rechazar</button></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No hay préstamos para mostrar";
    }
    ?>
</form>

<?php
// Procesar la acción de aprobar o rechazar un préstamo
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $action = $_POST['action'];
    $prestamo_id = substr($action, strpos($action, "_") + 1);

    // Verificar si se aprueba o se rechaza el préstamo
    if (strpos($action, 'approve') !== false) {
        // Lógica para aprobar el préstamo
        // Puedes implementar aquí la actualización del estado del préstamo en la base de datos
        echo "<p>Préstamo ID $prestamo_id aprobado</p>";
    } elseif (strpos($action, 'reject') !== false) {
        // Lógica para rechazar el préstamo
        // Puedes implementar aquí la actualización del estado del préstamo en la base de datos
        echo "<p>Préstamo ID $prestamo_id rechazado</p>";
    }
}
?>

<a href="index.php">Volver</a>
    </div>
</body>
</html>
