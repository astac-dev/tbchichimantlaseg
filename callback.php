<?php
/*
require_once 'config.php';
session_start();

$provider = new \League\OAuth2\Client\Provider\GenericProvider([
    'clientId'                => MS_CLIENT_ID,
    'clientSecret'            => MS_CLIENT_SECRET,
    'redirectUri'             => MS_REDIRECT_URI,
    'urlAuthorize'            => 'https://login.microsoftonline.com/' . MS_TENANT_ID . '/oauth2/v2.0/authorize',
    'urlAccessToken'          => 'https://login.microsoftonline.com/' . MS_TENANT_ID . '/oauth2/v2.0/token',
    'urlResourceOwnerDetails' => '',
    'scopes'                  => 'openid profile email User.Read'
]);

// Validar el estado para evitar ataques CSRF
if (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
    unset($_SESSION['oauth2state']);
    exit('Estado no válido');
}

try {
    // Obtener el token de acceso
    $accessToken = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code']
    ]);

    // Usar el token para obtener los datos del alumno desde Microsoft Graph
    $resourceOwner = $provider->getResourceOwner($accessToken);
    $userData = $resourceOwner->toArray();

    // El correo institucional es nuestra llave maestra
    $emailAlumno = $userData['mail'] ?? $userData['userPrincipalName'];

    // --- CONEXIÓN A MARIADB PARA VERIFICAR AL ALUMNO ---
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $stmt = $pdo->prepare("SELECT * FROM alumnos_calificaciones WHERE correo_institucional = ? AND estatus_alumno = 'Activo'");
    $stmt->execute([$emailAlumno]);
    $alumno = $stmt->fetch();

    if ($alumno) {
        // Si el alumno existe en tu lista de Chichimantla, iniciamos sesión [cite: 1]
        $_SESSION['user_name'] = $alumno['nombre_completo'];
        $_SESSION['user_email'] = $emailAlumno;
        $_SESSION['user_id'] = $alumno['id'];
        
        header("Location: dashboard.php");
    } else {
        // Si no está en la base de datos, aunque tenga cuenta de Microsoft, no entra
        echo "Lo sentimos, tu cuenta no está autorizada para generar constancias en este plantel.";
    }

} catch (Exception $e) {
    exit('Error al conectar con Microsoft: ' . $e->getMessage());
}
*/