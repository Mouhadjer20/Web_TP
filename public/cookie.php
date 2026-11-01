<?php
// Traiter les actions avant tout affichage HTML
if (isset($_GET["action"])) {

    $action = $_GET["action"];

    if ($action === "create") {
        // Créer le cookie
        setcookie("tp2_theme", "clair", [
            "expires" => time() + 600,
            "path" => "/",
            "samesite" => "Lax"
        ]);
    }

    elseif ($action === "modify") {
        // Modifier la valeur du cookie
        setcookie("tp2_theme", "sombre", [
            "expires" => time() + 600,
            "path" => "/",
            "samesite" => "Lax"
        ]);
    }

    elseif ($action === "delete") {
        // Supprimer le cookie
        setcookie("tp2_theme", "", [
            "expires" => time() - 3600,
            "path" => "/",
            "samesite" => "Lax"
        ]);
    }

    // Recharger la page pour lire le cookie actualisé
    header("Location: cookie.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP02 - Cookies</title>
</head>
<body>

    <h1>TP02 - Gestion des cookies</h1>

    <h2>Valeur du cookie</h2>

    <?php
    if (isset($_COOKIE["tp2_theme"])) {
        echo "<p>Cookie tp2_theme : <strong>"
            . htmlspecialchars($_COOKIE["tp2_theme"])
            . "</strong></p>";
    } else {
        echo "<p>Aucun cookie tp2_theme trouvé.</p>";
    }
    ?>

    <h2>Actions</h2>

    <p><a href="?action=create">Créer le cookie (clair)</a></p>
    <p><a href="?action=modify">Modifier le cookie (sombre)</a></p>
    <p><a href="?action=delete">Supprimer le cookie</a></p>

</body>
</html>
