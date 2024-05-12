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
$dui = $_POST['dui'];
$cuenta = $_POST['cuenta'];
$monto = $_POST['monto'];

// Verificar si el DUI y la cuenta están relacionados (esto es solo un ejemplo, debes adaptarlo a tu base de datos)
$sql = "SELECT * FROM prestamistas WHERE dui = '$dui' AND cuenta_bancaria = '$cuenta'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // DUI y cuenta están relacionados, proceder con la transacción
    // Aquí agregar lógica para realizar la transacción
    echo "Transacción realizada con éxito";
} else {
    // DUI y cuenta no están relacionados, mostrar mensaje de error
    echo "Error: El DUI y la cuenta bancaria no están relacionados";
}

// Cerrar conexión
$conn->close();
?>
