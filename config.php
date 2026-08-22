<?php
/**
 * Configuración Global - Portal Institucional
 * Telebachillerato Chichimantla Segundo
 */

// 1. CARGA DE LIBRERÍAS (Composer)
// Este archivo habilita todas las herramientas de Microsoft, PDF y QR
require_once __DIR__ . '/vendor/autoload.php';

// 2. CONFIGURACIÓN DE BASE DE DATOS (MariaDB)
// Nota: En cPanel, el host suele ser 'localhost'
define('DB_HOST', 'localhost');
define('DB_NAME', 'nombre_de_tu_base_de_datos'); 
define('DB_USER', 'tu_usuario_de_base_de_datos');
define('DB_PASS', 'tu_contraseña_segura');

// 3. CREDENCIALES DE MICROSOFT ENTRA ID (Azure AD)
// Sustituye los valores con los que obtuviste en el portal de Azure
define('MS_CLIENT_ID',     'cb9dd3a9-00c0-461f-849a-769aca0b0718');
define('MS_CLIENT_SECRET', 'tu_client_secret_aqui');
define('MS_TENANT_ID',     'b1420663-50e7-4ff2-b5e3-7a15c40ff90a');

// IMPORTANTE: Esta URL debe ser idéntica a la que registraste en Azure.
// Para desarrollo local usa: http://localhost:8000/callback.php
// Para producción usa: https://tu-sitio.edu.mx/callback.php
define('MS_REDIRECT_URI',  'http://localhost:8000/callback.php');

// 4. DATOS INSTITUCIONALES
define('ESCUELA_NOMBRE', 'Telebachillerato Chichimantla Segundo');
define('VALIDEZ_CONSTANCIA', 365); // Días de validez para el QR

// Configuración de visualización de errores (Solo para desarrollo)
error_reporting(E_ALL);
ini_set('display_errors', 1);