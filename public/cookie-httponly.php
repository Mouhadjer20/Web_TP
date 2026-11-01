<?php
if (isset($_GET["action"]) && $_GET["action"] === "create") {
    setcookie("tp2_theme_http", "clair", [
        "expires" => time() + 600,
        "path" => "/",
        "httponly" => true,
        "samesite" => "Lax"
    ]);

    header("Location: cookie-httponly.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test HttpOnly</title>
</head>
<body>

    <h1>Test du cookie HttpOnly</h1>

    <a href="?action=create">Créer un cookie HttpOnly</a>

    <button onclick="alert(document.cookie)">
        Lire les cookies avec JavaScript
    </button>

    <p>Ouvre la console avec F12 pour tester document.cookie.</p>

</body>
</html>
