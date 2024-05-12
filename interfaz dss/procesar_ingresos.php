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

// Recuperar datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$dui = $_POST['dui'];
$tipo = $_POST['tipo'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO clientes_prestamistas (nombre, correo, dui, tipo) VALUES ('$nombre', '$correo', '$dui', '$tipo')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro insertado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
