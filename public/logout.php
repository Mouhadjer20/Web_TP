<?php
session_start();

// Supprimer les données de session
$_SESSION = [];

// Supprimer le cookie de session
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();

    setcookie(session_name(), "", [
        "expires" => time() - 3600,
        "path" => $params["path"],
        "domain" => $params["domain"],
        "secure" => $params["secure"],
        "httponly" => $params["httponly"],
        "samesite" => $params["samesite"]
    ]);
}

// Détruire la session côté serveur
session_destroy();

header("Location: login.php");
exit;
