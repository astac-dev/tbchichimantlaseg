<?php
/*
// Iniciador de Sesión Microsoft 365
// Telebachillerato Chichimantla Segundo

require_once 'config.php';
session_start();

// Configuramos el proveedor con los datos de tu config.php
$provider = new \League\OAuth2\Client\Provider\GenericProvider([
    'clientId'                => MS_CLIENT_ID,
    'clientSecret'            => MS_CLIENT_SECRET,
    'redirectUri'             => MS_REDIRECT_URI,
    'urlAuthorize'            => 'https://login.microsoftonline.com/' . MS_TENANT_ID . '/oauth2/v2.0/authorize',
    'urlAccessToken'          => 'https://login.microsoftonline.com/' . MS_TENANT_ID . '/oauth2/v2.0/token',
    'urlResourceOwnerDetails' => 'https://graph.microsoft.com/v1.0/me',
    'scopes'                  => 'openid profile email User.Read'
]);

// Generamos la URL de autorización
$authUrl = $provider->getAuthorizationUrl();

// Guardamos el 'state' en la sesión para evitar ataques de falsificación (CSRF)
$_SESSION['oauth2state'] = $provider->getState();

// ¡Adiós! Redirigimos al alumno a Microsoft
header('Location: ' . $authUrl);
exit;
*/
