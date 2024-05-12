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

// Insertar los datos en la base de datos
$sql = "INSERT INTO dependientes_banco (nombre, correo, dui) VALUES ('$nombre', '$correo', '$dui')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo dependiente del banco agregado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
