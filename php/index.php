<?php
session_start();
if (isset($_SESSION['user_name'])) {
    header("Location: dashboard.php"); // Si ya inició sesión, lo mandamos al panel
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"> <title>Portal de Constancias - TBCH Chichimantla</title>
</head>
<body>
    <div class="login-container" style="text-align: center; margin-top: 100px;">
        <img src="img/showcase2024.png" alt="Showcase School" width="200"> <h2>Generador de Constancias Digitales</h2>
        <p>Inicia sesión con tu cuenta institucional para continuar.</p>
        
        <a href="login.php" class="btn-ms">
            <img src="img/microsoftlogo.png" alt="MS Logo" width="20"> Iniciar sesión con Microsoft 365
        </a>
    </div>
</body>
</html>