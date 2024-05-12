<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gerente General del Banco</title>
    <link rel="stylesheet" href="cliente.css">
</head>
<body>
    <div class="container">
        <h2>Gerente General del Banco</h2>

        <!-- Acciones de personal -->
        <h3>Acciones de Personal Pendientes</h3>
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

        // Consulta SQL para obtener las acciones de personal pendientes
        $sql = "SELECT * FROM acciones_personal WHERE estado = 'pendiente'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar la lista de acciones de personal pendientes
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["accion"] . " - <a href='procesar_accion_personal.php?id=" . $row["ID"] . "&action=accept'>Aceptar</a> / <a href='procesar_accion_personal.php?id=" . $row["ID"] . "&action=reject'>Rechazar</a></li>";
            }
            echo "</ul>";
        } else {
            echo "No hay acciones de personal pendientes";
        }
        ?>

        <!-- Registro de nueva sucursal -->
        <h3>Registro de Nueva Sucursal</h3>
        <form method="post" action="procesar_registro_sucursal.php">
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required><br><br>
            
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required><br><br>

            <label for="gerente">Gerente de Sucursal:</label>
            <select id="gerente" name="gerente">
                <?php
                // Consulta SQL para obtener la lista de gerentes disponibles
                $sql = "SELECT ID, CONCAT(Nombre, ' ', Apellido) AS NombreCompleto FROM gerentes_sucursal WHERE sucursal_id IS NULL";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["ID"] . "'>" . $row["NombreCompleto"] . "</option>";
                    }
                } else {
                    echo "<option value=''>No hay gerentes disponibles</option>";
                }
                ?>
            </select><br><br>

            <input type="submit" value="Registrar Sucursal">
        </form>

        <!-- Movimientos de cuentas -->
        <h3>Movimientos de Cuentas</h3>
        <?php
        // Consulta SQL para obtener los movimientos de cuentas
        $sql = "SELECT * FROM movimientos_cuenta";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar la lista de movimientos de cuentas
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["descripcion"] . " - Fecha: " . $row["fecha"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "No hay movimientos de cuentas";
        }

        // Cerrar conexión
        $conn->close();
        ?>
    </div>
</body>
</html>