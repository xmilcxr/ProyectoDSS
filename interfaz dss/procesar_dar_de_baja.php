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

// Recuperar ID del empleado a dar de baja
$id_empleado = $_POST['id_empleado'];

// Actualizar el estado del empleado a inactivo
$sql = "UPDATE empleados SET estado='inactivo' WHERE id=$id_empleado";

if ($conn->query($sql) === TRUE) {
    echo "Empleado dado de baja exitosamente";
} else {
    echo "Error al dar de baja al empleado: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>