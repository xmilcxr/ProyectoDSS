<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <title>Recuperar Contraseña </title>
    <link rel="stylesheet" href="cliente.css">
</head>
<body>
    <div class="container">
        <h1>Banco de Agricultura Salvadoreño</h1>
        <img src="img/BAS.png "alt="Logo Banco">
        <hr> </hr> 
        <h2>Recuperar Contraseña</h2>
        <!-- Formulario de recuperación de contraseña -->
        <form method="post" action="forgot_password_process.php">
            <label for="correo_recuperar">Correo Electrónico:</label>
            <input type="email" id="correo_recuperar" name="correo_recuperar" required><br><br>
            
            <input type="submit" name="forgot" value="Recuperar Contraseña">
        </form>
        <!-- Fin del formulario de recuperación de contraseña -->

        <p>¿Quieres crear una cuenta nueva? <a href="interfaz cliente.php">Regístrate aquí</a></p>
    </div>
</body>
</html>
