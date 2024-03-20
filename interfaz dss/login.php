<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <title>Iniciar Sesión </title>
    <link rel="stylesheet" href="cliente.css">
</head>
<body>
    <div class="container">
        <h1>Banco de Agricultura Salvadoreño</h1>
        <img src="img/BAS.png "alt="Logo Banco">
        <hr> </hr>
        <h2>Iniciar Sesión</h2>
        <!-- Formulario de inicio de sesión -->
        <form method="post" action="login_process.php">
            <label for="correo_login">Correo Electrónico:</label>
            <input type="email" id="correo_login" name="correo_login" required><br><br>
            
            <label for="contrasena_login">Contraseña:</label>
            <input type="password" id="contrasena_login" name="contrasena_login" required><br><br>
            
            <input type="submit" name="login" value="Iniciar Sesión">
        </form>
        <!-- Fin del formulario de inicio de sesión -->

        <p>¿Olvidaste tu contraseña? <a href="recuperar.php">Recupérala aquí</a></p>
    </div>
</body>
</html>
