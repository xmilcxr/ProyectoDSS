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
$salario = $_POST['salario'];
$monto = $_POST['monto'];

// Calcular el monto máximo del préstamo según el salario
if ($salario < 365) {
    $max_prestamo = 10000;
    $interes = 0.03;
} elseif ($salario < 600) {
    $max_prestamo = 25000;
    $interes = 0.03;
} elseif ($salario < 900) {
    $max_prestamo = 35000;
    $interes = 0.04;
} else {
    $max_prestamo = 50000;
    $interes = 0.05;
}

// Validar el monto solicitado
if ($monto > $max_prestamo) {
    echo "Error: El monto solicitado excede el máximo permitido de $" . $max_prestamo;
} else {
    // Calcular la cuota mensual a pagar
    $cuota_mensual = $monto * $interes / 12;
    
    // Abrir un caso con el estado correspondiente
    // Aquí deberías implementar la lógica para abrir el caso y registrar los detalles del préstamo en la base de datos
    // Por ahora, simplemente mostraremos los detalles del préstamo
    echo "Préstamo abierto con éxito<br>";
    echo "Cliente: $nombre<br>";
    echo "Salario: $salario<br>";
    echo "Monto Solicitado: $monto<br>";
    echo "Cuota Mensual: $cuota_mensual";
}

// Cerrar conexión
$conn->close();
?>
