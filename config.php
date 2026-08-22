<?php
/**
 * Configuración Global - Portal Institucional
 * Telebachillerato Chichimantla Segundo
 */

// 1. CARGA DE VARIABLES DE ENTORNO
// Leemos el archivo .env si existe para evitar exponer claves en el código
$envFile = __DIR__ . '/.env';
$env = file_exists($envFile) ? parse_ini_file($envFile) : [];

// 2. CONFIGURACIÓN DE BASE DE DATOS (MariaDB)
define('DB_HOST', $env['DB_HOST'] ?? 'localhost');
define('DB_NAME', $env['DB_NAME'] ?? 'nombre_de_tu_base_de_datos'); 
define('DB_USER', $env['DB_USER'] ?? 'tu_usuario_de_base_de_datos');
define('DB_PASS', $env['DB_PASS'] ?? 'tu_contraseña_segura');

// 3. CREDENCIALES DE MICROSOFT ENTRA ID (Azure AD)
define('MS_CLIENT_ID',     $env['MS_CLIENT_ID'] ?? '');
define('MS_CLIENT_SECRET', $env['MS_CLIENT_SECRET'] ?? '');
define('MS_TENANT_ID',     $env['MS_TENANT_ID'] ?? '');

// IMPORTANTE: Esta URL debe ser idéntica a la que registraste en Azure.
define('MS_REDIRECT_URI',  $env['MS_REDIRECT_URI'] ?? 'http://localhost:8000/callback.php');

// 4. DATOS INSTITUCIONALES
define('ESCUELA_NOMBRE', 'Telebachillerato Chichimantla Segundo');
define('VALIDEZ_CONSTANCIA', 365); // Días de validez para el QR

// Configuración de visualización de errores (Solo para desarrollo)
error_reporting(E_ALL);
ini_set('display_errors', 1);