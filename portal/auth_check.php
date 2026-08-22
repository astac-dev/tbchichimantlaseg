<?php
session_start();
// Si no existe la sesión de correo institucional, lo regresamos al inicio
if (!isset($_SESSION['user_email'])) {
    header("Location: ../index.php?error=no_access");
    exit();
}
?>