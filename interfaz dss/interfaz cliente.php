<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <title>Registro de Usuario </title>
    <link rel="stylesheet" href="cliente.css">
</head>
<body>
    <div class="container">
        <h1>Banco de Agricultura Salvadoreño</h1>
        <img src="img/BAS.png "alt="Logo Banco">
        <hr> </hr>
        <h2>Registro de Usuario</h2>
        <!-- Formulario de registro -->
        <form method="post" action="registro_process.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required><br><br>
            
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br><br>
            
            <input type="submit" value="Registrarse">
        </form>
        <!-- Fin del formulario de registro -->

        <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
    </div>
</body>
</html>
